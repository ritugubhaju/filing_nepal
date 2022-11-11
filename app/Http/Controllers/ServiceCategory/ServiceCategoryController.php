<?php

namespace App\Http\Controllers\ServiceCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCategory\ServiceCategoryRequest;
use App\Modules\Models\ServiceCategory\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceCategoryController extends Controller
{
    protected $category;

    function __construct(ServiceCategory $category)
    {
        $this->category = $category;
    }
    public function index()
    {
        $categories = $this->category->orderBy('created_at', 'desc')->get();

        return view('service-category.index', compact('categories'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('service-category.create');
    }

    /**
     * @param Storecategory $request
     * @return mixed
     */
    public function store(ServiceCategoryRequest $request)
    {
        if ($category = $this->category->create($request->data())) {
            if($request->hasFile('image')) {
                $this->uploadFile($request, $category);
            }

        }
        Toastr()->success('Category Added Successfully.','Success');
        return redirect()->route('category.index');
    }

    /**
     * @param category $page
     * @return \Illuminate\View\View
     */
    public function edit(ServiceCategory $category)
    {
        return view('service-category.edit', compact('category'));
    }

    public function update(ServiceCategoryRequest $request, ServiceCategory $category)
    {
        if ($category->update($request->data())) {
            $category->fill([
                'slug' => Str::slug($request->title),
            ])->save();
            if($request->hasFile('image')) {
                $this->uploadFile($request, $category);
            }
            Toastr()->success('Category Updated Successfully.','Success');
            return redirect()->route('category.index');

        }

    }

    public function destroy($id)
    {
        $category = $this->category->find($id);
        $image_path = public_path().'/uploads/category/'.$category->image;
        if($category->image)
        {
            unlink($image_path);

        }
        $category->delete();
        Toastr()->success('Category Deleted Successfully.','Success');
        return redirect()->route('category.index');
    }

    function uploadFile(Request $request, $category)
    {
        $file = $request->file('image');
        $path = 'uploads/category';
        $fileName = $this->uploadFromAjax($file, $path);
        if (!empty($category->image))
            $this->__deleteImages($category);

        $data['image'] = $fileName;
        $this->updateImage($category->id, $data);

    }

    public function updateImage($categoryId, array $data)
    {
        try {
            $category = $this->category->find($categoryId);
            $category = $category->update($data);
            return $category;
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


