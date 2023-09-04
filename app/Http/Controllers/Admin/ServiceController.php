<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;

class ServiceController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function index() {
        $objs = Service::orderBy('id', 'DESC')
            ->paginate(10);
        return view('admin.service.index')
            ->with([
                'objs' => $objs,
            ]);

    }

    public function create() {
        return view('admin.service.create');
    }


    public function store(Request $request) {
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=370,height=290',
            'image_index' => 'mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=500,height=300',
            'title_tm' => 'required',
            'name_tm' => 'required',
        ]);

        $obj = new Service();
        $slug = str_slug($request->title).'-'.str_random(10);
        $obj->title_tm = $request->title_tm;
        $obj->title_ru = $request->title_ru ?: null;
        $obj->title_en = $request->title_en ?: null;
        $obj->name_tm = $request->name_tm;
        $obj->name_ru = $request->name_ru ?: null;
        $obj->name_en = $request->name_en ?: null;
        $obj->slug = $slug;
        $obj->active = ($request->has('active')) ? true : false;
        if ($request->hasfile('image'))
        {
            $originalImage = $request->file('image');
            $originalImageName = $slug.'.'.$originalImage->getClientOriginalExtension();
            $originalPath = 'public/service/image/';
            $originalImage->storeAs($originalPath, $originalImageName);
            //
            $sliderImage12 = Image::make($originalImage)->resize(null, 450, function ($constraint) { $constraint->aspectRatio(); });

            $sliderImage = $sliderImage12;
            $sliderImage = (string) $sliderImage->encode('jpg', 95);
            $sliderPath = 'public/service/slider/'.$originalImageName;
            Storage::put($sliderPath, $sliderImage);

            $sliderImage = $sliderImage12;
            $sliderImage->fill('#e5e5e5');
            $sliderImage = (string) $sliderImage->encode('jpg', 10);
            $sliderPath = 'public/service/slider/placeholder/'.$originalImageName;
            Storage::put($sliderPath, $sliderImage);
            //
            $thumbnailImageBig = Image::make($originalImage)->resize(450, null, function ($constraint) { $constraint->aspectRatio(); });
            $thumbnailImageBig = (string) $thumbnailImageBig->encode('jpg', 80);
            $thumbnailPathBig = 'public/service/thumbnail-big/'.$originalImageName;
            Storage::put($thumbnailPathBig, $thumbnailImageBig);
            //
            $thumbnailImageSmall = Image::make($originalImage)->resize(300, null, function ($constraint) { $constraint->aspectRatio(); });
            $thumbnailImageSmall = (string) $thumbnailImageSmall->encode('jpg', 80);
            $thumbnailPathSmall = 'public/service/thumbnail-small/'.$originalImageName;
            Storage::put($thumbnailPathSmall, $thumbnailImageSmall);
            //
            $adminImage = Image::make($originalImage)->resize(200, null, function ($constraint) { $constraint->aspectRatio(); });
            $adminImage = (string) $adminImage->encode('jpg', 80);
            $adminPath = 'public/service/admin/'.$originalImageName;
            Storage::put($adminPath, $adminImage);
            //
            $obj->img = $originalImageName;
        }
        if ($request->hasfile('image_index')) {
            $newImage = $request->file('image_index');
            $newImageName = Str::random(10) . '.' . $newImage->getClientOriginalExtension();
            // resize image
            $image = Image::make($newImage);
            $image = (string)$image->encode('jpg', 80);
            $imagePath = 'public/image_index/' . $newImageName;
            Storage::put($imagePath, $image);
            // resize image
            $smallImage = Image::make($newImage)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $smallImage = (string)$smallImage->encode('jpg', 80);
            $smallImagePath = 'public/sm/image_index/' . $newImageName;
            Storage::put($smallImagePath, $smallImage);
            // model
            $obj->image_index = 'image_index/' . $newImageName;
        }
        $obj->save();
        $success = '<b>' . '</b> Surat goşuldy!';
        return redirect()->route('admin.service.index')->with([
            'success' => $success
        ]);
    }

    public function edit($id) {
        $obj = Service::findOrFail($id);
        return view('admin.service.edit', compact('obj'));
    }


    public function update(Request $request, $id) {
        $obj = Service::findOrFail($id);
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=240,height=210',
            'image_index' => 'mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=500,height=300',
            'title_tm' => 'required',
            'name_tm' => 'required',

        ]);

        $slug = str_slug($request->slug).'-'.str_random(10);
        $obj->slug = $slug;
        $obj->title_tm = $request->title_tm;
        $obj->title_ru = $request->title_ru ?: null;
        $obj->title_en = $request->title_en ?: null;
        $obj->name_tm = $request->name_tm;
        $obj->name_ru = $request->name_ru ?: null;
        $obj->name_en = $request->name_en ?: null;
        $obj->active = ($request->has('active')) ? true : false;
        if ($request->hasfile('image'))
        {
            if ($obj->img) {
                Storage::delete('public/service/image/'.$obj->img);
                Storage::delete('public/service/slider/'.$obj->img);
                Storage::delete('public/service/slider/placeholder/'.$obj->img);
                Storage::delete('public/service/thumbnail-big/'.$obj->img);
                Storage::delete('public/service/thumbnail-small/'.$obj->img);
                Storage::delete('public/service/admin/'.$obj->img);
            }
            $originalImage = $request->file('image');
            $originalImageName = $slug.'.'.$originalImage->getClientOriginalExtension();
            $originalPath = 'public/service/image/';
            $originalImage->storeAs($originalPath, $originalImageName);
            //
            $sliderImage12 = Image::make($originalImage)->resize(null, 450, function ($constraint) { $constraint->aspectRatio(); });

            $sliderImage = $sliderImage12;
            $sliderImage = (string) $sliderImage->encode('jpg', 95);
            $sliderPath = 'public/service/slider/'.$originalImageName;
            Storage::put($sliderPath, $sliderImage);

            $sliderImage = $sliderImage12;
            $sliderImage->fill('#e5e5e5');
            $sliderImage = (string) $sliderImage->encode('jpg', 10);
            $sliderPath = 'public/service/slider/placeholder/'.$originalImageName;
            Storage::put($sliderPath, $sliderImage);
            //
            $thumbnailImageBig = Image::make($originalImage)->resize(450, null, function ($constraint) { $constraint->aspectRatio(); });
            $thumbnailImageBig = (string) $thumbnailImageBig->encode('jpg', 80);
            $thumbnailPathBig = 'public/service/thumbnail-big/'.$originalImageName;
            Storage::put($thumbnailPathBig, $thumbnailImageBig);
            //
            $thumbnailImageSmall = Image::make($originalImage)->resize(300, null, function ($constraint) { $constraint->aspectRatio(); });
            $thumbnailImageSmall = (string) $thumbnailImageSmall->encode('jpg', 80);
            $thumbnailPathSmall = 'public/service/thumbnail-small/'.$originalImageName;
            Storage::put($thumbnailPathSmall, $thumbnailImageSmall);
            //
            $adminImage = Image::make($originalImage)->resize(200, null, function ($constraint) { $constraint->aspectRatio(); });
            $adminImage = (string) $adminImage->encode('jpg', 80);
            $adminPath = 'public/service/admin/'.$originalImageName;
            Storage::put($adminPath, $adminImage);
            //
            $obj->img = $originalImageName;
        }
        if ($request->hasfile('image_index')) {
            $newImage = $request->file('image_index');
            $newImageName = Str::random(10) . '.' . $newImage->getClientOriginalExtension();
            // resize image
            $image = Image::make($newImage);
            $image = (string)$image->encode('jpg', 80);
            $imagePath = 'public/image_index/' . $newImageName;
            Storage::put($imagePath, $image);
            // resize image
            $smallImage = Image::make($newImage)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $smallImage = (string)$smallImage->encode('jpg', 80);
            $smallImagePath = 'public/sm/image_index/' . $newImageName;
            Storage::put($smallImagePath, $smallImage);
            // model
            $obj->image_index = 'image_index/' . $newImageName;
        }

        $obj->update();

        $success = '<b>'. '</b> Surat düzedildi!';
        return redirect()->route('admin.service.index')->with([
            'success' => $success
        ]);
    }


    public function delete($id)
    {
        $obj = Service::findOrFail($id);
        if ($obj->img) {
            Storage::delete('public/service/image/'.$obj->img);
            Storage::delete('public/service/slider/'.$obj->img);
            Storage::delete('public/service/slider/placeholder/'.$obj->img);
            Storage::delete('public/service/thumbnail-big/'.$obj->img);
            Storage::delete('public/service/thumbnail-small/'.$obj->img);
            Storage::delete('public/service/admin/'.$obj->img);
        }
        $objName = $obj->slug;
        $obj->delete();
        $success = '<b>'.$objName.'</b> pozuldy!';
        return redirect()->route('admin.service.index')->with([
            'success' => $success
        ]);
    }
}
