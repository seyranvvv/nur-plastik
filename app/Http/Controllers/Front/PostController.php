<?php

namespace App\Http\Controllers\Front;

use App\Contact;
use App\Greet;
use App\Http\Controllers\Controller;
use App\Post;
use App\PostBanner;
use App\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $posts = Post::orderByRaw('datetime desc')
            ->where('datetime', '<=', Carbon::now())
            ->where('active', '=', 1)
            ->paginate(1);
     /*   $flags = Greet::all();*/
        $postBanner = PostBanner::where('active',1)->latest()->first();
        $services = Service::orderBy('id')->get();
        return view('front.post.index')->with([
            'contact' => $contact,
            'posts' => $posts,
            'postBanner' => $postBanner,
            'services' => $services,
            /*'flags' => $flags,*/
        ]);
    }

    public function single($slug)
    {

        $contact = Contact::first();
        $postBanner = PostBanner::where('active',1)->latest()->first();
        $posts = Post::orderByRaw('datetime desc')
            ->where('active', '=', 1)->take(3)->get();
        $post = Post::whereSlug($slug)
            ->where('active', '=', 1)->firstOrFail();
        $services = Service::orderBy('id')->get();
        return view('front.post.singleNews')->with([
            'contact' => $contact,
            'post' => $post,
            'posts' => $posts,
            'postBanner' => $postBanner,
            'services' => $services,

        ]);
    }
}
