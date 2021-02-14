<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use Hash;

class OwnerController extends Controller
{
    public function getIndex()
    {
        $data['owner'] = Owner::all();
        return view('owner.index', $data);
    }
    public function getAdd()
    {
        return view('owner.add');
    }

    public function getSave(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile_number' => 'required|min:3',
            'email' => 'required|min:3|email|unique:customer',
            'address' => 'required|min:3',
            'kodepos' => 'required|min:3',
            'password' => 'required|min:4',
        ]);
        $owner = new Owner;
        $owner->name = $request->name;
        $owner->email = $request->email;
        $owner->mobile_number = $request->mobile_number;
        $owner->address = $request->address;
        $owner->kodepos = $request->kodepos;
        $owner->password = Hash::make($request->password);
        $result = $owner->save();
        if ($result) {
            // alert()->success('Customer Successfully Added', 'Success');
            return redirect('admin/owner')->with('success', 'Owner success is saved');
        } else {

            return back();
        }
    }
    public function getDelete(Request $request, $id)
    {
        $owner = Owner::find($id);
        $owner->delete();
        return back()->with('success', 'Owner successfully deleted');
    }

    public function getEdit($id)
    {
        $data['owner'] = Owner::find($id);
        return view('owner.edit', $data);
    }
    public function getUpdate(Request $request, $id)
    {

        $this->validate($request, [

            'name' => 'required|min:2',
            'address' => 'required|min:3',
            'password' => '',
            'email' => 'required|min:2',
            'mobile_number' => 'required|min:2',
            'kodepos' => 'required|min:2'
        ]);

        $owner = Owner::find($id);
        $owner->name = $request->get('name');
        $owner->email = $request->get('email');
        $owner->mobile_number = $request->get('mobile_number');
        $owner->address = $request->get('address');
        $owner->kodepos = $request->get('kodepos');
        if ($request->get('password') != '') {
            $owner->password = Hash::make($request->get('password'));
        }
        $result = $owner->save();
        if ($result) {
            return redirect('/admin/owner')->with('success', 'Owner successfully Updated');
        } else {
            return back();
        }
    }
}
