<?php

namespace App\Http\Controllers\Front;

use App\About;
use App\AboutText;
use App\Baner;
use App\Contact;
use App\Greet;
use App\Http\Controllers\Controller;
use App\OurFeauter;
use App\Post;
use App\Project;
use App\Service;
use App\ServiceAbout;
use App\Slider;
use App\Total;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $about = About::first();
        $total = Total::first();
        $services = Service::orderBy('id','asc')->get();
        $serviceAbout = ServiceAbout::first();
        $aboutTexts = AboutText::all();
        $ourFeauters = OurFeauter::all();
        $baner = Baner::where('active',1)->latest()->first();
        $projects = Project::all();
        /*

          $logo = Logo::first();*/
        $posts = Post::orderByRaw('datetime desc')
            ->where('active', '=', 1)->take(2)->get();
        $sliders = Slider::whereStatus(1)
            ->orderBy('id', 'asc')
            ->take(3)
            ->get();
        return view('front.index')->with([
            'contact' => $contact,
           'sliders' => $sliders,
            'posts' => $posts,
            'about' => $about,
            'total' => $total,
            'services' => $services,
            'aboutTexts' => $aboutTexts,
           'serviceAbout' => $serviceAbout,
           'ourFeauters' => $ourFeauters,
           'baner' => $baner,
           'projects' => $projects,
           /*



            'logo' => $logo,*/
        ]);
    }
}
