<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\SendQuoteInfo;
use App\Modules\Models\Client\Client;
use App\Modules\Models\Menu\Menu;
use App\Modules\Models\RecentQuote\RecentQuote;
use App\Modules\Models\Service\Service;
use App\Modules\Models\ServiceCategory\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function homepage()
    {
        $menus = Menu::where('status', 1)->orderBy('order','asc')->get();
        return view('frontend.home',compact('menus'));
    }

    public function services()
    {
        $menus = Menu::where('status', 1)->orderBy('order','asc')->get();

        $service_category = ServiceCategory::where('status', 1)->get();
        $services = Service::where('status', 1)->get();
        return view('frontend.service.index',compact('services','service_category','menus'));
    }

    public function quote()
    {
        $menus = Menu::where('status', 1)->orderBy('order','asc')->get();
        $services = Service::where('status', 1)->get();
        return view('frontend.quote.index',compact('menus','services'));
    }

    public function quoteDetails(Request $request)
    {
       // dd($request->all());
        $data = $request->all();
        $quote = new RecentQuote();
        $quote->name = request('name');
        $quote->address = request('address');
        $quote->phone = request('phone');
        $quote->email = request('email');
        $quote->service_id = request('service_id');
        $quote->organization = request('organization');
        $quote->save();
        Mail::to('ritu.gubhaju20@gmail.com')->send(new SendQuoteInfo($data));
        Toastr()->success('The information has been submitted successfully.','Success');
        return redirect()->back();
    }

    public function client()
    {
        $menus = Menu::where('status', 1)->orderBy('order','asc')->get();
        $clients = Client::where('status', 1)->latest()->take(6)->get();
        return view('frontend.client.index',compact('menus','clients'));
    }
}
