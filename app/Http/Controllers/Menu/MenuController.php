<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\MenuRequest;
use App\Modules\Models\Menu\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    protected $menu;

    function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }
    public function index()
    {
        $menus = $this->menu->orderBy('created_at', 'desc')->get();

        return view('menu.index', compact('menus'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * @param Storemenu $request
     * @return mixed
     */
    public function store(MenuRequest $request)
    {
        if ($menu = $this->menu->create($request->data())) {

        }
        Toastr()->success('menu Added Successfully.','Success');
        return redirect()->route('menu.index');
    }

    /**
     * @param menu $page
     * @return \Illuminate\View\View
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    public function update(MenuRequest $request, Menu $menu)
    {
        if ($menu->update($request->data())) {
            $menu->fill([
                'slug' => Str::slug($request->title),
            ])->save();
            Toastr()->success('menu Updated Successfully.','Success');
            return redirect()->route('menu.index');

        }

    }

    public function destroy($id)
    {
        $menu = $this->menu->find($id);
        $menu->delete();
        Toastr()->success('menu Deleted Successfully.','Success');
        return redirect()->route('menu.index');
    }
}

