<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use App\Http\Requests\Booking\BookingRequest;
use App\Mail\SendQuoteInfo;
use App\Modules\Models\Booking\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    protected $booking;

    function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
    public function index()
    {
        $bookings = $this->booking->orderBy('created_at', 'desc')->get();

        return view('booking.index', compact('bookings'));
    }


    public function store(BookingRequest $request)
    {
        $data = $request->all();
        $book = new Booking();
        $book->service_id = request('service_id');
        $book->company_name = request('company_name');
        $book->company_address = request('company_address');
        $book->name = request('name');
        $book->email = request('email');
        $book->phone = request('phone');
        $book->mobile = request('mobile');
        $book->save();
        Mail::to('ritu.gubhaju20@gmail.com')->send(new SendQuoteInfo($data));
        Toastr()->success('The information has been submitted successfully.','Success');
        return redirect()->back();
    }

    public function quote()
    {
        return view('quote.index');
    }
}
