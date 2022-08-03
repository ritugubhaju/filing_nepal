<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\SendContactInfo;
use App\Mail\SendQuoteInfo;
use App\Modules\Models\Client\Client;
use App\Modules\Models\Menu\Menu;
use App\Modules\Models\Page\Page;
use App\Modules\Models\RecentQuote\RecentQuote;
use App\Modules\Models\Service\Service;
use App\Modules\Models\ServiceCategory\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class FrontendController extends Controller
{
    public function homepage()
    {
        $menus = Menu::where('status', 1)->orderBy('order','asc')->get();
        $service_category = ServiceCategory::where('status', 1)->get();
        $services = Service::where('status', 1)->get();
        $clients = Client::where('status', 1)->latest()->take(6)->get();
        $about = Page::where('slug','about-filing-nepal')->where('status', 1)->get();


        return view('frontend.home',compact('menus','service_category','services','clients','about'));
    }

    public function searchDetails(Request $request){
        $menus = Menu::where('status', 1)->orderBy('order','asc')->get();
        $search = $request->search;

        $service_categories = ServiceCategory::where('slug',$search)->where('status', 1)->get();
        $services = Service::where('slug',$search)->where('status', 1)->get();

        return view('frontend.service.servicecategory',compact('service_categories','services','menus'));


    }

    public function register()
    {
        $menus = Menu::where('status', 1)->orderBy('order','asc')->get();

        return view('frontend.register-login.register',compact('menus'));
    }

    public function registerDetails(Request $request)
    {
        $menus = Menu::where('status', 1)->orderBy('order','asc')->get();

        $validator = $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
            'password' => ['required'],
        ]);

        $client = new Client();

        $client->title = $request['title'];
        $client->email = $request['email'];
        $client->password = Hash::make($request['password']);
        $client->company_name = $request['company_name'];
        $client->save();
        Toastr()->success('The information has been submitted successfully.','Success');
        return redirect()->back();
    }

    public function clientLogin()
    {
        $menus = Menu::where('status', 1)->orderBy('order','asc')->get();

        return view('frontend.register-login.login',compact('menus'));
    }


    public function services()
    {
        $menus = Menu::where('status', 1)->orderBy('order','asc')->get();

        $service_category = ServiceCategory::where('status', 1)->get();
        $services = Service::where('status', 1)->get();
        return view('frontend.service.index',compact('services','service_category','menus'));
    }

    public function servicesDetails(Service $services)
    {
        $menus = Menu::where('status', 1)->orderBy('order','asc')->get();

        return view('frontend.service.detail', compact('services','menus'));
    }

    public function quote()
    {
        $menus = Menu::where('status', 1)->orderBy('order','asc')->get();
        $services = Service::where('status', 1)->get();
        return view('frontend.quote.index',compact('menus','services'));
    }

    public function quoteDetails(Request $request)
    {
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

    public function about()
    {
        $menus = Menu::where('status', 1)->orderBy('order','asc')->get();
        $about = Page::where('slug','about-filing-nepal')->where('status', 1)->get();
        $mission = Page::where('slug','mission')->where('status', 1)->get();
        $vision = Page::where('slug','vision')->where('status', 1)->get();
        return view('frontend.about',compact('menus','about','mission','vision'));
    }

    public function contact()
    {
        $menus = Menu::where('status', 1)->orderBy('order','asc')->get();
        return view('frontend.contact.contact',compact('menus'));
    }

    public function contactDetails(Request $request)
    {
        $data = $request->all();
        Mail::to('ritu.gubhaju20@gmail.com')->send(new SendContactInfo($data));
        return redirect()->back()->withSuccess(trans('Contact Inquiry Send Successfully'));
    }


}
