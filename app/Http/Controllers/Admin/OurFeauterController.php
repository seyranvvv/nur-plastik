<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\OurFeauter;
use Illuminate\Http\Request;

class OurFeauterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $objs = OurFeauter::orderBy('title_tm')
            ->paginate(10);
        return view('admin.ourFeauter.index')
            ->with([
                'objs' => $objs,
            ]);
    }

    public function create()
    {
        return view('admin.ourFeauter.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_tm' => 'required',

        ]);

        $obj = new OurFeauter();
        $obj->title_tm = $request->title_tm;
        $obj->title_ru = $request->title_ru ?: null;
        $obj->title_en = $request->title_en ?: null;

        $obj->save();

        $success = $obj->getTitle() . ' ' . trans('transAdmin.created');
        return redirect()->route('admin.ourFeauter.index')
            ->with([
                'success' => $success
            ]);
    }



    public function edit($id)
    {
        $obj = OurFeauter::findOrFail($id);
        return view('admin.ourFeauter.edit')
            ->with([
                'obj' => $obj,
            ]);
    }


    public function update(Request $request, $id)
    {
        $obj = OurFeauter::findOrFail($id);
        $request->validate([
            'title_tm' => 'required',
        ]);
        $obj->title_tm = $request->title_tm;
        $obj->title_ru = $request->title_ru ?: null;
        $obj->title_en = $request->title_en ?: null;

        $obj->update();

        $success = $obj->getTitle() . ' ' . trans('transAdmin.updated');
        return redirect()->route('admin.ourFeauter.index')
            ->with([
                'success' => $success
            ]);
    }


    public function delete($id)
    {
        $obj = OurFeauter::findOrFail($id);
        $obj->delete();
        $success = 'pozuldy!';
        return redirect()->route('admin.ourFeauter.index')->with([
            'success' => $success
        ]);
    }
}
