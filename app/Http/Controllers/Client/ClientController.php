<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ClientRequest;
use App\Modules\Models\Client\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    protected $client;

    function __construct(Client $client)
    {
        $this->client = $client;
    }
    public function index()
    {
        $clients = $this->client->orderBy('created_at', 'desc')->get();

        return view('client.index', compact('clients'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * @param Storeclient $request
     * @return mixed
     */
    public function store(ClientRequest $request)
    {
        if ($client = $this->client->create($request->data())) {
            if($request->hasFile('image')) {
                $this->uploadFile($request, $client);
            }
        }
        Toastr()->success('Client Added Successfully.','Success');
        return redirect()->route('client.index');

    }

    /**
     * @param client $page
     * @return \Illuminate\View\View
     */
    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    public function update(ClientRequest $request, Client $client)
    {
        if ($client->update($request->data())) {
            $client->fill([
                'slug' => Str::slug($request->title),
            ])->save();
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $client);
            }
            Toastr()->success('Client Updated Successfully.','Success');
            return redirect()->route('client.index');

        }

    }

    public function destroy($id)
    {
        $client = $this->client->find($id);
        $image_path = public_path().'/uploads/client/'.$client->image;
        unlink($image_path);
        $client->delete();
        Toastr()->success('Client Deleted Successfully.','Success');
        return redirect()->route('client.index');
    }

    function uploadFile(Request $request, $client)
    {
        $file = $request->file('image');
        $path = 'uploads/client';
        $fileName = $this->uploadFromAjax($file, $path);
        if (!empty($client->image))
            $this->__deleteImages($client);

        $data['image'] = $fileName;
        $this->updateImage($client->id, $data);

    }

    public function updateImage($clientId, array $data)
    {
        try {
            $client = $this->client->find($clientId);
            $client = $client->update($data);
            return $client;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }

    public function __deleteImages($subCat)
    {
        try {
            if (is_file($subCat->image_path))
                unlink($subCat->image_path);

            if (is_file($subCat->thumbnail_path))
                unlink($subCat->thumbnail_path);
        } catch (\Exception $e) {

        }
    }
}


