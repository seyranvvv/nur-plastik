<?php

namespace App\Http\Controllers\Admin;

use App\Baner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Storage;

class BanerController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function index() {
        $objs = Baner::orderBy('id', 'DESC')
            ->paginate(10);
        return view('admin.baner.index')
            ->with([
                'objs' => $objs,
            ]);

    }

    public function create() {
        return view('admin.baner.create');
    }


    public function store(Request $request) {
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,webp|max:2048',
            'name_tm' => 'required',
            'name_ru' => 'nullable',
            'name_en' => 'nullable',
            'title_tm' => 'required',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
        ]);

        $obj = new Baner();
        $obj->title_tm = $request->title_tm;
        $obj->title_ru = $request->title_ru ?: null;
        $obj->title_en = $request->title_en ?: null;
        $obj->name_tm = $request->name_tm;
        $obj->name_ru = $request->name_ru ?: null;
        $obj->name_en = $request->name_en ?: null;
        $slug = str_slug($request->title).'-'.str_random(10);
        $obj->slug = $slug;
        $obj->active = ($request->has('active')) ? true : false;
        if ($request->hasfile('image'))
        {
            $originalImage = $request->file('image');
            $originalImageName = $slug.'.'.$originalImage->getClientOriginalExtension();
            $originalPath = 'public/baner/image/';
            $originalImage->storeAs($originalPath, $originalImageName);
            //
            $sliderImage12 = Image::make($originalImage)->resize(null, 450, function ($constraint) { $constraint->aspectRatio(); });

            $sliderImage = $sliderImage12;
            $sliderImage = (string) $sliderImage->encode('jpg', 95);
            $sliderPath = 'public/baner/slider/'.$originalImageName;
            Storage::put($sliderPath, $sliderImage);

            $sliderImage = $sliderImage12;
            $sliderImage->fill('#e5e5e5');
            $sliderImage = (string) $sliderImage->encode('jpg', 10);
            $sliderPath = 'public/baner/slider/placeholder/'.$originalImageName;
            Storage::put($sliderPath, $sliderImage);
            //
            $thumbnailImageBig = Image::make($originalImage)->resize(450, null, function ($constraint) { $constraint->aspectRatio(); });
            $thumbnailImageBig = (string) $thumbnailImageBig->encode('jpg', 80);
            $thumbnailPathBig = 'public/baner/thumbnail-big/'.$originalImageName;
            Storage::put($thumbnailPathBig, $thumbnailImageBig);
            //
            $thumbnailImageSmall = Image::make($originalImage)->resize(300, null, function ($constraint) { $constraint->aspectRatio(); });
            $thumbnailImageSmall = (string) $thumbnailImageSmall->encode('jpg', 80);
            $thumbnailPathSmall = 'public/baner/thumbnail-small/'.$originalImageName;
            Storage::put($thumbnailPathSmall, $thumbnailImageSmall);
            //
            $adminImage = Image::make($originalImage)->resize(200, null, function ($constraint) { $constraint->aspectRatio(); });
            $adminImage = (string) $adminImage->encode('jpg', 80);
            $adminPath = 'public/baner/admin/'.$originalImageName;
            Storage::put($adminPath, $adminImage);
            //
            $obj->img = $originalImageName;
        }
        $obj->save();
        $success = '<b>' . '</b> Surat goşuldy!';
        return redirect()->route('admin.baner.index')->with([
            'success' => $success
        ]);
    }

    public function edit($id) {
        $obj = Baner::findOrFail($id);
        return view('admin.baner.edit', compact('obj'));
    }


    public function update(Request $request, $id) {
        $obj = Baner::findOrFail($id);
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,webp|max:2048',
            'name_tm' => 'required',
            'name_ru' => 'nullable',
            'name_en' => 'nullable',
            'title_tm' => 'required',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
        ]);
        $obj->title_tm = $request->title_tm;
        $obj->title_ru = $request->title_ru ?: null;
        $obj->title_en = $request->title_en ?: null;
        $obj->name_tm = $request->name_tm;
        $obj->name_ru = $request->name_ru ?: null;
        $obj->name_en = $request->name_en ?: null;
        $slug = str_slug($request->title).'-'.str_random(10);
        $obj->slug = $slug;
        $obj->active = ($request->has('active')) ? true : false;
        if ($request->hasfile('image'))
        {
            if ($obj->img) {
                Storage::delete('public/baner/image/'.$obj->img);
                Storage::delete('public/baner/slider/'.$obj->img);
                Storage::delete('public/baner/slider/placeholder/'.$obj->img);
                Storage::delete('public/baner/thumbnail-big/'.$obj->img);
                Storage::delete('public/baner/thumbnail-small/'.$obj->img);
                Storage::delete('public/baner/admin/'.$obj->img);
            }
            $originalImage = $request->file('image');
            $originalImageName = $slug.'.'.$originalImage->getClientOriginalExtension();
            $originalPath = 'public/baner/image/';
            $originalImage->storeAs($originalPath, $originalImageName);
            //
            $sliderImage12 = Image::make($originalImage)->resize(null, 450, function ($constraint) { $constraint->aspectRatio(); });

            $sliderImage = $sliderImage12;
            $sliderImage = (string) $sliderImage->encode('jpg', 95);
            $sliderPath = 'public/baner/slider/'.$originalImageName;
            Storage::put($sliderPath, $sliderImage);

            $sliderImage = $sliderImage12;
            $sliderImage->fill('#e5e5e5');
            $sliderImage = (string) $sliderImage->encode('jpg', 10);
            $sliderPath = 'public/baner/slider/placeholder/'.$originalImageName;
            Storage::put($sliderPath, $sliderImage);
            //
            $thumbnailImageBig = Image::make($originalImage)->resize(450, null, function ($constraint) { $constraint->aspectRatio(); });
            $thumbnailImageBig = (string) $thumbnailImageBig->encode('jpg', 80);
            $thumbnailPathBig = 'public/baner/thumbnail-big/'.$originalImageName;
            Storage::put($thumbnailPathBig, $thumbnailImageBig);
            //
            $thumbnailImageSmall = Image::make($originalImage)->resize(300, null, function ($constraint) { $constraint->aspectRatio(); });
            $thumbnailImageSmall = (string) $thumbnailImageSmall->encode('jpg', 80);
            $thumbnailPathSmall = 'public/baner/thumbnail-small/'.$originalImageName;
            Storage::put($thumbnailPathSmall, $thumbnailImageSmall);
            //
            $adminImage = Image::make($originalImage)->resize(200, null, function ($constraint) { $constraint->aspectRatio(); });
            $adminImage = (string) $adminImage->encode('jpg', 80);
            $adminPath = 'public/baner/admin/'.$originalImageName;
            Storage::put($adminPath, $adminImage);
            //
            $obj->img = $originalImageName;
        }
        $obj->update();

        $success = '<b>'. '</b> Surat düzedildi!';
        return redirect()->route('admin.baner.index')->with([
            'success' => $success
        ]);
    }


    public function delete($id)
    {
        $obj = Baner::findOrFail($id);
        if ($obj->img) {
            Storage::delete('public/baner/image/'.$obj->img);
            Storage::delete('public/baner/slider/'.$obj->img);
            Storage::delete('public/baner/slider/placeholder/'.$obj->img);
            Storage::delete('public/baner/thumbnail-big/'.$obj->img);
            Storage::delete('public/baner/thumbnail-small/'.$obj->img);
            Storage::delete('public/baner/admin/'.$obj->img);
        }
        $objName = $obj->slug;
        $obj->delete();
        $success = '<b>'.$objName.'</b> pozuldy!';
        return redirect()->route('admin.baner.index')->with([
            'success' => $success
        ]);
    }
}
