<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $objs = Contact::all();
        return view('admin.contact.index')
            ->with([
                'objs' => $objs,
            ]);
    }


    public function edit($id)
    {
        $obj = Contact::findOrFail($id);
        return view('admin.contact.edit')
            ->with([
                'obj' => $obj,
            ]);
    }


    public function update(Request $request, $id)
    {
        $obj = Contact::findOrFail($id);
        $request->validate([
            'phone' => 'required',
            'phone1' => 'nullable',
            'email' => 'required',
            'adress_tm' => 'required',
            'adress_ru' => 'nullable',
            'adress_en' => 'nullable',
        ]);

        $obj->phone = $request->phone;
        $obj->phone1 = $request->phone ?: null;
        $obj->email = $request->email;
        $obj->adress_tm = $request->adress_tm;
        $obj->adress_ru = $request->adress_ru ?: null;
        $obj->adress_en = $request->adress_en ?: null;
        $obj->update();

        $success = $obj->getName() . ' ' . trans('transAdmin.updated');
        return redirect()->route('admin.contact.index')
            ->with([
                'success' => $success
            ]);
    }
}
