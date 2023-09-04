<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $objs = Project::orderBy('name_tm')
            ->paginate(10);
        return view('admin.project.index')
            ->with([
                'objs' => $objs,
            ]);
    }

    public function create()
    {
        return view('admin.project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_tm' => 'required',
            'name_ru' => 'nullable',
            'name_en' => 'nullable',
        ]);

        $obj = new Project();
        $obj->name_tm = $request->name_tm;
        $obj->name_ru = $request->name_ru ?: null;
        $obj->name_en = $request->name_en ?: null;

        $obj->save();

        $success = $obj->getTitle() . ' ' . trans('transAdmin.created');
        return redirect()->route('admin.project.index')
            ->with([
                'success' => $success
            ]);
    }



    public function edit($id)
    {
        $obj = Project::findOrFail($id);
        return view('admin.project.edit')
            ->with([
                'obj' => $obj,
            ]);
    }


    public function update(Request $request, $id)
    {
        $obj = Project::findOrFail($id);
        $request->validate([
            'name_tm' => 'required',
            'name_ru' => 'nullable',
            'name_en' => 'nullable',
        ]);
        $obj->name_tm = $request->name_tm;
        $obj->name_ru = $request->name_ru ?: null;
        $obj->name_en = $request->name_en ?: null;

        $obj->update();

        $success = $obj->getTitle() . ' ' . trans('transAdmin.updated');
        return redirect()->route('admin.project.index')
            ->with([
                'success' => $success
            ]);
    }


    public function delete($id)
    {
        $obj = Project::findOrFail($id);
        $obj->delete();
        $success = 'pozuldy!';
        return redirect()->route('admin.project.index')->with([
            'success' => $success
        ]);
    }
}
