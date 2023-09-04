<?php

namespace App\Http\Controllers\Admin;

use App\AboutOur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutOurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $objs = AboutOur::orderBy('name_tm')
            ->paginate(10);
        return view('admin.aboutOur.index')
            ->with([
                'objs' => $objs,
            ]);
    }


    public function edit($id)
    {
        $obj = AboutOur::findOrFail($id);
        return view('admin.aboutOur.edit')
            ->with([
                'obj' => $obj,
            ]);
    }


    public function update(Request $request, $id)
    {
        $obj = AboutOur::findOrFail($id);
        $request->validate([
            'title_tm' => 'required',
            'name_tm' => 'required',
            'name_ru' => 'nullable',
            'name_en' => 'nullable',
        ]);
        $obj->title_tm = $request->title_tm;
        $obj->title_ru = $request->title_ru ?: null;
        $obj->title_en = $request->title_en ?: null;
        $obj->name_tm = $request->name_tm;
        $obj->name_ru = $request->name_ru ?: null;
        $obj->name_en = $request->name_en ?: null;

        $obj->update();

        $success = $obj->getTitle() . ' ' . trans('transAdmin.updated');
        return redirect()->route('admin.aboutOur.index')
            ->with([
                'success' => $success
            ]);
    }
}
