<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\ServiceRequest;
use App\Modules\Models\Service\Service;
use App\Modules\Models\ServiceCategory\ServiceCategory;
use App\Modules\Models\SubCategory\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    protected $service,$category;

    function __construct(Service $service,ServiceCategory $category, SubCategory $subcategory)
    {
        $this->service = $service;
        $this->category = $category;
        $this->subcategory = $subcategory;
    }
    public function index()
    {
        $services = $this->service->orderBy('created_at', 'desc')->get();

        return view('service.index', compact('services'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = $this->category->get();
        $subcategories = $this->subcategory->get();
        return view('service.create',compact('categories','subcategories'));
    }

    /**
     * @param Storeservice $request
     * @return mixed
     */
    public function store(ServiceRequest $request)
    {
        if ($service = $this->service->create($request->data())) {
            if($request->hasFile('image')) {
                $this->uploadFile($request, $service);
            }
        }
        Toastr()->success('Service Added Successfully.','Success');
        return redirect()->route('service.index');

    }

    /**
     * @param service $page
     * @return \Illuminate\View\View
     */
    public function edit(Service $service)
    {
        $category_search = ServiceCategory::find($service->category_id);
        $categories = $this->category->get();

        $subcategory_search = SubCategory::find($service->subcategory_id);
        $subcategories = SubCategory::where('category_id',$category_search->id)->get();
        return view('service.edit', compact('service','categories','category_search','subcategory_search','subcategories'));
    }

    public function update(ServiceRequest $request, Service $service)
    {
        //dd($request->all());
        if ($service->update($request->data())) {
            $service->fill([
                'slug' => Str::slug($request->title),
            ])->save();
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $service);
            }
            Toastr()->success('Service Updated Successfully.','Success');
            return redirect()->route('service.index');

        }

    }

    public function destroy($id)
    {
        $service = $this->service->find($id);
        $image_path = public_path().'/uploads/service/'.$service->image;
        if($service->image)
        {
            unlink($image_path);

        }
        $service->delete();
        Toastr()->success('Service Deleted Successfully.','Success');
        return redirect()->route('service.index');
    }

    function uploadFile(Request $request, $service)
    {
        $file = $request->file('image');
        $path = 'uploads/service';
        $fileName = $this->uploadFromAjax($file, $path);
        if (!empty($service->image))
            $this->__deleteImages($service);

        $data['image'] = $fileName;
        $this->updateImage($service->id, $data);

    }

    public function updateImage($serviceId, array $data)
    {
        try {
            $service = $this->service->find($serviceId);
            $service = $service->update($data);
            return $service;
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

    public function serviceCategoryAjax(Request $request)
    {
        $service = $this->subcategory->where('category_id',$request->category_id)->get();
        return response()->json([
            'data' => $service,
            'status' => true,
            'message' => "service Fetched Successfully."
        ]);
    }
}


