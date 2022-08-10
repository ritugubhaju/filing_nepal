<?php

namespace App\Http\Controllers\Newsletter;

use App\Http\Controllers\Controller;
use App\Modules\Models\Newsletter\Newsletter as Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validator = $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $newsletter = Newsletter::where('email', $request->email)->first();
        if ($newsletter) {
            Toastr()->error('You have already Subscribed.','Error');
            return redirect()->back();
        } else {
            $new_subscriber = new Newsletter();
            $new_subscriber->email = $request['email'];
            $new_subscriber->save();
            Toastr()->success('Thank you For Subscribing.','Success');
            return redirect()->back();
        }
    }
}
