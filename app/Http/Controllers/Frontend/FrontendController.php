<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Modules\Models\Service\Service;
use App\Modules\Models\ServiceCategory\ServiceCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage()
    {
        return view('frontend.home');
    }

    public function services()
    {
        $service_category = ServiceCategory::where('status', 1)->get();
        $services = Service::where('status', 1)->get();
        return view('frontend.service.index',compact('services','service_category'));
    }
}
