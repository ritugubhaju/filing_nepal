<?php

namespace App\Http\Controllers\ServiceCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCategory\ServiceCategoryRequest;
use App\Modules\Models\ServiceCategory\ServiceCategory;
use Illuminate\Http\Request;

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

        }

        return redirect()->route('category.index')->withSuccess(trans('New News has been created'));
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

            return redirect()->route('category.index')->withSuccess(trans('category has been updated'));

        }

    }

    public function destroy($id)
    {
        $category = $this->category->find($id);
        $category->delete();
        return redirect()->route('category.index')->withSuccess(trans('category has been deleted'));
    }
}

