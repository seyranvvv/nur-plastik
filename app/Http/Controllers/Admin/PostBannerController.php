<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\PostBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostBannerController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function index() {
        $objs = PostBanner::orderBy('id', 'DESC')
            ->paginate(10);
        return view('admin.postBanner.index')
            ->with([
                'objs' => $objs,
            ]);

    }

    public function create() {
        return view('admin.postBanner.create');
    }


    public function store(Request $request) {
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=1900,height=530',
            'title_tm' => 'required',
        ]);

        $obj = new PostBanner();
        $slug = str_slug($request->title).'-'.str_random(10);
        $obj->title_tm = $request->title_tm;
        $obj->title_ru = $request->title_ru ?: null;
        $obj->title_en = $request->title_en ?: null;
        $obj->slug = $slug;
        $obj->active = ($request->has('active')) ? true : false;
        if ($request->hasfile('image'))
        {
            $originalImage = $request->file('image');
            $originalImageName = $slug.'.'.$originalImage->getClientOriginalExtension();
            $originalPath = 'public/postBanner/image/';
            $originalImage->storeAs($originalPath, $originalImageName);
            //
            $sliderImage12 = Image::make($originalImage)->resize(null, 450, function ($constraint) { $constraint->aspectRatio(); });

            $sliderImage = $sliderImage12;
            $sliderImage = (string) $sliderImage->encode('jpg', 95);
            $sliderPath = 'public/postBanner/slider/'.$originalImageName;
            Storage::put($sliderPath, $sliderImage);

            $sliderImage = $sliderImage12;
            $sliderImage->fill('#e5e5e5');
            $sliderImage = (string) $sliderImage->encode('jpg', 10);
            $sliderPath = 'public/postBanner/slider/placeholder/'.$originalImageName;
            Storage::put($sliderPath, $sliderImage);
            //
            $thumbnailImageBig = Image::make($originalImage)->resize(450, null, function ($constraint) { $constraint->aspectRatio(); });
            $thumbnailImageBig = (string) $thumbnailImageBig->encode('jpg', 80);
            $thumbnailPathBig = 'public/postBanner/thumbnail-big/'.$originalImageName;
            Storage::put($thumbnailPathBig, $thumbnailImageBig);
            //
            $thumbnailImageSmall = Image::make($originalImage)->resize(300, null, function ($constraint) { $constraint->aspectRatio(); });
            $thumbnailImageSmall = (string) $thumbnailImageSmall->encode('jpg', 80);
            $thumbnailPathSmall = 'public/postBanner/thumbnail-small/'.$originalImageName;
            Storage::put($thumbnailPathSmall, $thumbnailImageSmall);
            //
            $adminImage = Image::make($originalImage)->resize(200, null, function ($constraint) { $constraint->aspectRatio(); });
            $adminImage = (string) $adminImage->encode('jpg', 80);
            $adminPath = 'public/postBanner/admin/'.$originalImageName;
            Storage::put($adminPath, $adminImage);
            //
            $obj->img = $originalImageName;
        }
        $obj->save();
        $success = '<b>' . '</b> Surat goşuldy!';
        return redirect()->route('admin.postBanner.index')->with([
            'success' => $success
        ]);
    }

    public function edit($id) {
        $obj = PostBanner::findOrFail($id);
        return view('admin.postBanner.edit', compact('obj'));
    }


    public function update(Request $request, $id) {
        $obj = PostBanner::findOrFail($id);
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=1900,height=530',
            'title_tm' => 'required',
        ]);

        $slug = str_slug($request->slug).'-'.str_random(10);
        $obj->slug = $slug;
        $obj->title_tm = $request->title_tm;
        $obj->title_ru = $request->title_ru ?: null;
        $obj->title_en = $request->title_en ?: null;
        $obj->active = ($request->has('active')) ? true : false;
        if ($request->hasfile('image'))
        {
            if ($obj->img) {
                Storage::delete('public/postBanner/image/'.$obj->img);
                Storage::delete('public/postBanner/slider/'.$obj->img);
                Storage::delete('public/postBanner/slider/placeholder/'.$obj->img);
                Storage::delete('public/postBanner/thumbnail-big/'.$obj->img);
                Storage::delete('public/postBanner/thumbnail-small/'.$obj->img);
                Storage::delete('public/postBanner/admin/'.$obj->img);
            }
            $originalImage = $request->file('image');
            $originalImageName = $slug.'.'.$originalImage->getClientOriginalExtension();
            $originalPath = 'public/postBanner/image/';
            $originalImage->storeAs($originalPath, $originalImageName);
            //
            $sliderImage12 = Image::make($originalImage)->resize(null, 450, function ($constraint) { $constraint->aspectRatio(); });

            $sliderImage = $sliderImage12;
            $sliderImage = (string) $sliderImage->encode('jpg', 95);
            $sliderPath = 'public/postBanner/slider/'.$originalImageName;
            Storage::put($sliderPath, $sliderImage);

            $sliderImage = $sliderImage12;
            $sliderImage->fill('#e5e5e5');
            $sliderImage = (string) $sliderImage->encode('jpg', 10);
            $sliderPath = 'public/postBanner/slider/placeholder/'.$originalImageName;
            Storage::put($sliderPath, $sliderImage);
            //
            $thumbnailImageBig = Image::make($originalImage)->resize(450, null, function ($constraint) { $constraint->aspectRatio(); });
            $thumbnailImageBig = (string) $thumbnailImageBig->encode('jpg', 80);
            $thumbnailPathBig = 'public/postBanner/thumbnail-big/'.$originalImageName;
            Storage::put($thumbnailPathBig, $thumbnailImageBig);
            //
            $thumbnailImageSmall = Image::make($originalImage)->resize(300, null, function ($constraint) { $constraint->aspectRatio(); });
            $thumbnailImageSmall = (string) $thumbnailImageSmall->encode('jpg', 80);
            $thumbnailPathSmall = 'public/postBanner/thumbnail-small/'.$originalImageName;
            Storage::put($thumbnailPathSmall, $thumbnailImageSmall);
            //
            $adminImage = Image::make($originalImage)->resize(200, null, function ($constraint) { $constraint->aspectRatio(); });
            $adminImage = (string) $adminImage->encode('jpg', 80);
            $adminPath = 'public/postBanner/admin/'.$originalImageName;
            Storage::put($adminPath, $adminImage);
            //
            $obj->img = $originalImageName;
        }
        $obj->update();

        $success = '<b>'. '</b> Surat düzedildi!';
        return redirect()->route('admin.postBanner.index')->with([
            'success' => $success
        ]);
    }


    public function delete($id)
    {
        $obj = PostBanner::findOrFail($id);
        if ($obj->img) {
            Storage::delete('public/postBanner/image/'.$obj->img);
            Storage::delete('public/postBanner/slider/'.$obj->img);
            Storage::delete('public/postBanner/slider/placeholder/'.$obj->img);
            Storage::delete('public/postBanner/thumbnail-big/'.$obj->img);
            Storage::delete('public/postBanner/thumbnail-small/'.$obj->img);
            Storage::delete('public/postBanner/admin/'.$obj->img);
        }
        $objName = $obj->slug;
        $obj->delete();
        $success = '<b>'.$objName.'</b> pozuldy!';
        return redirect()->route('admin.postBanner.index')->with([
            'success' => $success
        ]);
    }
}
