<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Total;
use Illuminate\Http\Request;

class TotalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $objs = Total::orderBy('id')
            ->paginate(10);
        return view('admin.total.index')
            ->with([
                'objs' => $objs,
            ]);
    }


    public function edit($id)
    {
        $obj = Total::findOrFail($id);
        return view('admin.total.edit')
            ->with([
                'obj' => $obj,
            ]);
    }


    public function update(Request $request, $id)
    {
        $obj = Total::findOrFail($id);
        $request->validate([
            'cooperator' => 'required',
            'where' => 'required',
            'logistika' => 'required',
            'ofis' => 'required',
        ]);

        $obj->cooperator = $request->cooperator;
        $obj->where = $request->where;
        $obj->logistika = $request->logistika;
        $obj->ofis = $request->ofis;
        $obj->update();

        $success = $obj->ofis . ' ' . trans('transAdmin.updated');
        return redirect()->route('admin.total.index')
            ->with([
                'success' => $success
            ]);
    }
}
