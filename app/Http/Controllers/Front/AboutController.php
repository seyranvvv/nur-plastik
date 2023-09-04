<?php

namespace App\Http\Controllers\Front;

use App\About;
use App\AboutBanner;
use App\AboutOur;
use App\Contact;
use App\Goal;
use App\Greet;
use App\Http\Controllers\Controller;
use App\Service;
use App\Total;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $aboutBanner = AboutBanner::where('active',1)->latest()->first();
        $about = About::first();
        $goals = Goal::orderBy('id')->get();
        $total = Total::first();
        $aboutOur = AboutOur::first();
      /*  $flags = Greet::all();*/
        $services = Service::orderBy('id')->get();
        return view('front.about.index')->with([
            'contact' => $contact,
            'services' => $services,
            'aboutBanner' => $aboutBanner,
            'about' => $about,
            'goals' => $goals,
            'total' => $total,
            /*'flags' => $flags,*/
            'aboutOur' => $aboutOur
        ]);
    }
}
