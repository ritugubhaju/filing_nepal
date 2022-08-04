<?php

namespace App\Providers;

use App\Modules\Models\Menu\Menu;
use App\Modules\Models\ServiceCategory\ServiceCategory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $data['service_category'] = ServiceCategory::where('status', 1)->get();
        $data['menus'] = Menu::where('status', 1)->orderBy('order','asc')->get();
        View::share($data);
    }
}
