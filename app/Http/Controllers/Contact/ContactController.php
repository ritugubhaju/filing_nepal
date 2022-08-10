<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Modules\Models\Contact\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contact;

    function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }
    public function index()
    {
        $contacts = $this->contact->get();

        return view('contact.index', compact('contacts'));
    }
}
