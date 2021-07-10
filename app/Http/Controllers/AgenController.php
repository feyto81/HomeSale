<?php

namespace App\Http\Controllers;

use App\Agen;
use Illuminate\Http\Request;
use File;

class AgenController extends Controller
{
    public function getIndex()
    {
        $data['agen'] = Agen::all();
        return view('agen.index', $data);
    }

    public function getAdd()
    {
        return view('agen.add');
    }

    public function getSave(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|min:3|email|unique:agen',
            'phone' => 'required|min:3',
            'no_wa' => 'required|min:3',
            'address' => 'required|min:3',
            'picture' => 'required',

        ]);
        $agen = new Agen;
        $agen->name = $request->name;
        $agen->email = $request->email;
        $agen->phone = $request->phone;
        $agen->no_wa = $request->no_wa;
        $agen->address = $request->address;
        $picture = $request->picture;
        $tujuan_upload = 'avatar_agen';
        $photo_name = time() . "_" . $picture->getClientOriginalName();
        $picture->move($tujuan_upload, $photo_name);
        $agen->picture = $photo_name;
        $result = $agen->save();
        if ($result) {
            // alert()->success('Customer Successfully Added', 'Success');
            return redirect('admin/agen')->with('success', 'Agen success is saved');
        } else {

            return back();
        }
    }
    public function getDelete(Request $request, $id)
    {
        $agen = Agen::find($id);
        $agen->delete();
        return back()->with('success', 'Agen successfully deleted');
    }

    public function getEdit($id)
    {
        $data['agen'] = Agen::find($id);
        return view('agen.edit', $data);
    }
    public function getUpdate(Request $request, $id)
    {

        $this->validate($request, [

            'name' => 'required|min:2',

            'email' => 'required|min:2',
            'phone' => 'required|min:2',
            'no_wa' => 'required|min:2',
            'address' => 'required|min:2'
        ]);

        $agen = Agen::find($id);
        $agen->name = $request->get('name');
        $agen->email = $request->get('email');
        $agen->phone = $request->get('phone');
        $agen->no_wa = $request->get('no_wa');
        $agen->address = $request->get('address');
        if ($request->file('picture') != '') {
            File::delete('avatar_agen/' . $agen->picture);
            $picture = $request->file('picture');
            $tujuan_upload = 'avatar_agen';
            $photo_name = time() . "_" . $picture->getClientOriginalName();
            $picture->move($tujuan_upload, $photo_name);
            $agen->picture = $photo_name;
        }
        $result = $agen->save();
        if ($result) {
            return redirect('/admin/agen')->with('success', 'Agen successfully Updated');
        } else {
            return back();
        }
    }
}
