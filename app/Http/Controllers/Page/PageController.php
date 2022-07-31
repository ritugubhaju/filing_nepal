<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Page\PageRequest;
use App\Modules\Models\Page\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    protected $page;

    function __construct(Page $page)
    {
        $this->page = $page;

    }
    public function index()
    {
        $pages = $this->page->orderBy('created_at', 'desc')->get();

        return view('page.index', compact('pages'));
    }

    /**
     * @return \Illuminate\View\View
     */


    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('page.create');
    }

    /**
     * @param PageRequest $request
     * @return mixed
     */
    public function store(PageRequest $request)
    {

        if ($page = $this->page->create($request->pageFillData())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $page, 'image');
            }
        }
        Toastr()->success('Page Added Successfully.','Success');
        return redirect()->route('page.index');

    }

    /**
     * @param Page $page
     * @return \Illuminate\View\View
     */
    public function edit(Page $page)
    {
        return view('page.edit', compact('page'));
    }

    public function update(PageRequest $request, Page $page)
    {

        if ($page->update($request->pageFillData())) {
            $page->fill([
                'slug' => Str::slug($request->title),
            ])->save();
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $page, 'image');
            }
        }
        Toastr()->success('Page Updated Successfully.','Success');
        return redirect()->route('page.index');
    }

    public function destroy($id)
    {
        $page = $this->page->find($id);
        $page->delete();
        return redirect()->route('page.index')->withSuccess(trans('page has been deleted'));
    }

    function uploadFile(Request $request, $page, $type = null)
    {
        if ($type == 'image') {
            $file = $request->file('image');
            $path = 'uploads/page';
            $fileName = $this->uploadFromAjax($file, $path);
            if (!empty($page->image))
                $this->__deleteImages($page);

            $data['image'] = $fileName;
        }

        $this->updateImage($page->id, $data);

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

    public function updateImage($pageId, array $data)
    {
        try {
            $page = Page::find($pageId);
            $page = $page->update($data);
            return $page;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }
}
