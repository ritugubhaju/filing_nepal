<?php

namespace App\Http\Controllers\SubCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategory\SubCategoryRequest;
use App\Modules\Models\ServiceCategory\ServiceCategory;
use App\Modules\Models\SubCategory\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SubCategoryController extends Controller
{
    protected $subcategory,$category;

    function __construct(SubCategory $subcategory,ServiceCategory $category)
    {
        $this->subcategory = $subcategory;
        $this->category = $category;
    }
    public function index()
    {
        $subcategories = $this->subcategory->orderBy('created_at', 'desc')->get();

        return view('service-subcategory.index', compact('subcategories'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = $this->category->get();
        return view('service-subcategory.create',compact('categories'));
    }

    /**
     * @param Storesubcategory $request
     * @return mixed
     */
    public function store(SubCategoryRequest $request)
    {
        if ($subcategory = $this->subcategory->create($request->data())) {
        }
        Toastr()->success('Subcategory Added Successfully.','Success');
        return redirect()->route('subcategory.index');

    }

    /**
     * @param subcategory $page
     * @return \Illuminate\View\View
     */
    public function edit(Subcategory $subcategory)
    {
        $category_search = ServiceCategory::find($subcategory->category_id);
        $categories = $this->category->get();
        return view('service-subcategory.edit', compact('subcategory','categories','category_search'));
    }

    public function update(SubCategoryRequest $request, Subcategory $subcategory)
    {
        if ($subcategory->update($request->data())) {
            $subcategory->fill([
                'slug' => Str::slug($request->title),
            ])->save();
            Toastr()->success('Subcategory Updated Successfully.','Success');
            return redirect()->route('subcategory.index');

        }

    }

    public function destroy($id)
    {
        $subcategory = $this->subcategory->find($id);
        $subcategory->delete();
        Toastr()->success('Subcategory Deleted Successfully.','Success');
        return redirect()->route('subcategory.index');
    }

}


