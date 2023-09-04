<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $objs = About::orderBy('name_tm')
            ->paginate(10);
        return view('admin.about.index')
            ->with([
                'objs' => $objs,
            ]);
    }


    public function edit($id)
    {
        $obj = About::findOrFail($id);
        return view('admin.about.edit')
            ->with([
                'obj' => $obj,
            ]);
    }


    public function update(Request $request, $id)
    {
        $obj = About::findOrFail($id);
        $request->validate([
            'name_tm' => 'required',
            'name_ru' => 'nullable',
            'name_en' => 'nullable',
            'image' => 'mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=350,height=370',
            'image_index' => 'mimes:jpeg,png,jpg,webp|max:2048|dimensions:width=395,height=315',
        ]);
        $obj->title_tm = $request->title_tm;
        $obj->title_ru = $request->title_ru ?: null;
        $obj->title_en = $request->title_en ?: null;
        $obj->name_tm = $request->name_tm;
        $obj->name_ru = $request->name_ru ?: null;
        $obj->name_en = $request->name_en ?: null;

        if ($request->hasfile('image')) {
            if ($obj->image) {
                Storage::delete('public/about/' . $obj->image);
            }
            $newImg = $request->file('image');
            $newImgName =  rand(100, 9999) . '.' . $newImg->getClientOriginalExtension();
            $originalPath = 'public/about/';
            $newImg->storeAs($originalPath, $newImgName);
            $obj->image = 'about/' . $newImgName;
            $obj->update();
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

        $success = $obj->getName() . ' ' . trans('transAdmin.updated');
        return redirect()->route('admin.about.index')
            ->with([
                'success' => $success
            ]);
    }
}
