<?php

namespace App\Http\Controllers\Admin;

use App\AboutText;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutTextController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $objs = AboutText::orderBy('title_tm')
            ->paginate(10);
        return view('admin.aboutText.index')
            ->with([
                'objs' => $objs,
            ]);
    }

    public function create()
    {
        return view('admin.aboutText.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_tm' => 'required',

        ]);

        $obj = new AboutText();
        $obj->title_tm = $request->title_tm;
        $obj->title_ru = $request->title_ru ?: null;
        $obj->title_en = $request->title_en ?: null;

        $obj->save();

        $success = $obj->getTitle() . ' ' . trans('transAdmin.created');
        return redirect()->route('admin.aboutText.index')
            ->with([
                'success' => $success
            ]);
    }



    public function edit($id)
    {
        $obj = AboutText::findOrFail($id);
        return view('admin.aboutText.edit')
            ->with([
                'obj' => $obj,
            ]);
    }


    public function update(Request $request, $id)
    {
        $obj = AboutText::findOrFail($id);
        $request->validate([
            'title_tm' => 'required',
        ]);
        $obj->title_tm = $request->title_tm;
        $obj->title_ru = $request->title_ru ?: null;
        $obj->title_en = $request->title_en ?: null;

        $obj->update();

        $success = $obj->getTitle() . ' ' . trans('transAdmin.updated');
        return redirect()->route('admin.aboutText.index')
            ->with([
                'success' => $success
            ]);
    }


    public function delete($id)
    {
        $obj = AboutText::findOrFail($id);
        $obj->delete();
        $success = 'pozuldy!';
        return redirect()->route('admin.aboutText.index')->with([
            'success' => $success
        ]);
    }
}
