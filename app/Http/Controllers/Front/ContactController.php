<?php

namespace App\Http\Controllers\Front;

use App\Contact;
use App\ContactBanner;
use App\Greet;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $contactBanner = ContactBanner::where('active',1)->latest()->first();
//        $flags = Greet::all();
        $services = Service::orderBy('id')->get();
        return view('front.contact.index')->with([
            'contact' => $contact,
            'contactBanner' => $contactBanner,
            'services' => $services,
           /* 'flags' => $flags*/
        ]);
    }
}
