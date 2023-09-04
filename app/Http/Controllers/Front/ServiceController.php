<?php

namespace App\Http\Controllers\Front;

use App\Contact;
use App\Greet;
use App\Http\Controllers\Controller;
use App\Service;
use App\ServiceAbout;
use App\ServiceBanner;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $serviceBanner = ServiceBanner::where('active',1)->latest()->first();
        $services = Service::orderBy('id')->get();
        $serviceAbout = ServiceAbout::first();
       /* $flags = Greet::all();*/
        return view('front.service.index')->with([
            'contact' => $contact,
            'services' => $services,
           /* 'flags' => $flags,*/
            'serviceBanner' => $serviceBanner,
            'serviceAbout' => $serviceAbout,
        ]);
    }

    public function single($id)
    {

        $service = Service::where('id',$id)
            ->firstOrFail();
        $contact = Contact::first();
        $serviceBanner = ServiceBanner::where('active',1)->latest()->first();
        $services = Service::orderBy('id')->get();
        $serviceAbout = ServiceAbout::first();
        return view('front.service.service_single')->with([
            'contact' => $contact,
            'service' => $service,
            'services' => $services,
            'serviceBanner' => $serviceBanner,
            'serviceAbout' => $serviceAbout,
        ]);
    }
}
