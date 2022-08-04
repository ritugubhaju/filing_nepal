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
use App\Modules\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class FrontendController extends Controller
{
    public function homepage()
    {
        $services = Service::where('status', 1)->get();
        $clients = Client::where('status', 1)->latest()->take(6)->get();
        $about = Page::where('slug','about-filing-nepal')->where('status', 1)->get();

        return view('frontend.home',compact('services','clients','about'));
    }

    public function searchDetails(Request $request){
        $search = $request->search;

        $service_categories = ServiceCategory::where('slug',$search)->where('status', 1)->get();
        $services = Service::where('slug',$search)->where('status', 1)->get();

        return view('frontend.service.servicecategory',compact('service_categories','services'));


    }

    public function register()
    {


        return view('frontend.register-login.register');
    }

    public function registerDetails(Request $request)
    {

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
        $data = $request->all();
        $check = $this->create($data);
        Toastr()->success('The information has been submitted successfully.','Success');
        return redirect()->back();
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['title'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function clientLogin()
    {
        return view('frontend.register-login.login');
    }

    public function loginDetails(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('email',$request->email)->first();

        if (auth()->attempt($credentials)) {
            return redirect()->route('homepage');

        }else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }


    public function services()
    {

        $services = Service::where('status', 1)->get();
        return view('frontend.service.index',compact('services'));
    }

    public function servicesDetails(Service $services)
    {

        return view('frontend.service.detail', compact('services'));
    }

    public function quote()
    {
        return view('frontend.quote.index');
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
        $clients = Client::where('status', 1)->latest()->take(6)->get();
        return view('frontend.client.index',compact('clients'));
    }

    public function about()
    {
        $about = Page::where('slug','about-filing-nepal')->where('status', 1)->get();
        $mission = Page::where('slug','mission')->where('status', 1)->get();
        $vision = Page::where('slug','vision')->where('status', 1)->get();
        return view('frontend.about',compact('about','mission','vision'));
    }

    public function contact()
    {
        return view('frontend.contact.contact');
    }

    public function contactDetails(Request $request)
    {
        $data = $request->all();
        Mail::to('ritu.gubhaju20@gmail.com')->send(new SendContactInfo($data));
        return redirect()->back()->withSuccess(trans('Contact Inquiry Send Successfully'));
    }


}
