<?php

namespace App\Http\Controllers\Admin;

use App\Goal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $objs = Goal::orderBy('name_tm')
            ->paginate(10);
        return view('admin.goal.index')
            ->with([
                'objs' => $objs,
            ]);
    }

    public function create()
    {
        return view('admin.goal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_tm' => 'required',
            'name_tm' => 'required',
            'name_ru' => 'nullable',
            'name_en' => 'nullable',
        ]);

        $obj = new Goal();
        $obj->title_tm = $request->title_tm;
        $obj->title_ru = $request->title_ru ?: null;
        $obj->title_en = $request->title_en ?: null;
        $obj->name_tm = $request->name_tm;
        $obj->name_ru = $request->name_ru ?: null;
        $obj->name_en = $request->name_en ?: null;

        $obj->save();

        $success = $obj->getTitle() . ' ' . trans('transAdmin.created');
        return redirect()->route('admin.goal.index')
            ->with([
                'success' => $success
            ]);
    }



    public function edit($id)
    {
        $obj = Goal::findOrFail($id);
        return view('admin.goal.edit')
            ->with([
                'obj' => $obj,
            ]);
    }


    public function update(Request $request, $id)
    {
        $obj = Goal::findOrFail($id);
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
        return redirect()->route('admin.goal.index')
            ->with([
                'success' => $success
            ]);
    }


    public function delete($id)
    {
        $obj = Goal::findOrFail($id);
        $obj->delete();
        $success = 'pozuldy!';
        return redirect()->route('admin.goal.index')->with([
            'success' => $success
        ]);
    }
}
