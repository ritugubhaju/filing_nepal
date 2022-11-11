<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\SendContactInfo;
use App\Mail\SendQuoteInfo;
use App\Modules\Models\Booking\Booking;
use App\Modules\Models\Client\Client;
use App\Modules\Models\Contact\Contact;
use App\Modules\Models\Menu\Menu;
use App\Modules\Models\Page\Page;
use App\Modules\Models\RecentQuote\RecentQuote;
use App\Modules\Models\Service\Service;
use App\Modules\Models\ServiceCategory\ServiceCategory;
use App\Modules\Models\Slider\Slider;
use App\Modules\Models\User;
use App\Modules\Service\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class FrontendController extends Controller
{
    protected $user, $role, $permission;

    function __construct(UserService $user)
    {
        $this->user = $user;
    }
    public function homepage()
    {
        $services = Service::where('status', 1)->orderBy('created_at', 'desc')->get();
        $clients = Client::where('status', 1)->latest()->take(6)->get();
        $sliders = Slider::where('status', 1)->latest()->get();
        $about = Page::where('slug','about-filing-nepal')->where('status', 1)->get();
        $categories = ServiceCategory::where('status', 1)->orderBy('created_at', 'desc')->get();


        return view('frontend.home',compact('services','clients','about','sliders','categories'));
    }

    public function searchDetails(Request $request){
        $search = $request->search;

        $service_categories = ServiceCategory::where('slug',$search)->where('status', 1)->get();
        foreach($service_categories as $data)
        {
            $title = $data->title;
        }
        $services = Service::where('slug',$search)->where('status', 1)->get();

        return view('frontend.service.servicecategory',compact('service_categories','services','title'));


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
            Toastr()->error('Invalid credentials.','Error');
            return redirect()->back();
        }
    }


    public function services()
    {

        $services = Service::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('frontend.service.index',compact('services'));
    }

    public function servicesDetails(Service $services)
    {

        return view('frontend.service.detail', compact('services'));
    }

    public function quote()
    {
        $quotes = Page::where('slug','recent-quote')->where('status', 1)->get();
        foreach($quotes as $data)
        {
            $image = $data->image_path;
        }
        $services = Service::where('status', 1)->get();
        return view('frontend.quote.index',compact('services','image'));
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

    public function bookingDetails(Request $request)
    {

        $data = $request->all();
        $book = new Booking();
        $book->service_id = request('service_id');
        $book->company_name = request('company_name');
        if($request->company_address){
             $book->company_address = request('company_address');
        }
        $book->name = request('name');
        $book->email = request('email');
        $book->phone = request('phone');
        $book->mobile = request('mobile');
        $book->save();
        Mail::to('ritu.gubhaju20@gmail.com')->send(new SendQuoteInfo($data));
        Toastr()->success('The information has been submitted successfully.','Success');
        return redirect()->back();
    }

    public function client()
    {
        $clients = Client::where('status', 1)->latest()->take(6)->get();
        $clientsay = Client::where('status', 1)->latest()->first();
        return view('frontend.client.index',compact('clients','clientsay'));
    }

    public function about()
    {
        $about = Page::where('slug','about-filing-nepal')->where('status', 1)->get();
        $abouts = Page::where('slug','about-image')->where('status', 1)->get();
        foreach($abouts as $data)
        {
            $image = $data->image_path;
        }
        $mission = Page::where('slug','mission')->where('status', 1)->get();
        $vision = Page::where('slug','vision')->where('status', 1)->get();
        return view('frontend.about',compact('about','mission','vision','image'));
    }

    public function contact()
    {
        $contacts = Page::where('slug','contact-us')->where('status', 1)->get();
        foreach($contacts as $data)
        {
            $image = $data->image_path;
        }
        return view('frontend.contact.contact',compact('image'));
    }

    public function contactDetails(Request $request)
    {
        $data = $request->all();
        $contact = new Contact();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->phone = request('phone');
        $contact->mobile = request('mobile');
        $contact->subject = request('subject');
        $contact->message = request('message');
        $contact->save();
        Mail::to('ritu.gubhaju20@gmail.com')->send(new SendContactInfo($data));
        return redirect()->back()->withSuccess(trans('Contact Inquiry Send Successfully'));
    }

    public function updatePassword(Request $request)
    {
        $user = $this->user->passwordUpdate($request->all());
        if($user == true) {
            Toastr()->success('Password has been Updated Successfully','Success');
            return redirect()->route('homepage');
        } else {
            return redirect()->back();
        }
    }
    public function page($slug = null)
    {

        if ($slug) {

            $page = Page::whereSlug($slug)->where('status',1)->first();

            if ($page == null) {
                return view('frontend.errors.404');
            }

            if ($page) {
                $pages = Page::whereIsPublished(1)->whereIsPrimary(0)->whereNotIn('id', [$page->id])->take(10)->inRandomOrder()->get();
                if ($pages) {
                    return view('frontend.page', compact('page', 'pages'));
                }
            } else {
                return view('frontend.errors.404');
            }
        }
    }


}
