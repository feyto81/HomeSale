<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Level;
use Hash;
use Storage;

class UsersController extends Controller
{
    public function getIndex()
    {
        $data['user'] = User::all();
        return view('user.index', $data);
    }
    public function getAdd()
    {
        $data['level'] = Level::all();
        return view('user.add', $data);
    }

    public function getSave(Request $request)
    {
        $this->validate($request, [

            'name' => 'required',
            'email' => 'required',

            'foto' => 'required',
            'password' => 'required'
        ]);
        if (empty($request->file('foto'))) {
            User::create([

                'name' => $request->name,
                'email' => $request->email,
                'level_id' => '1',

                'password' => Hash::make($request->password)
            ]);
        } else {
            User::create([

                'name' => $request->name,
                'email' => $request->email,
                'level_id' => '1',
                'password' => Hash::make($request->password),
                'foto' => $request->file('foto')->store('avatar')
            ]);
        }

        return redirect('admin/users')->with("success", 'User Data Successfully Saved');
    }

    public function getDelete($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back();
        } else {
            Storage::delete($user->foto);
            $user->delete();
            return redirect('admin/users')->with("success", 'User Successfully Deleted');
        }
    }

    public function getEdit($id)
    {
        $data['level'] = Level::select('id', 'name')->get();
        $data['user'] = User::find($id);
        return view('user.edit', $data);
    }

    public function getUpdate(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'


        ]);
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->level_id = '1';
        if ($request->get('password') != '') {
            $user->password = Hash::make($request->get('password'));
        }
        if ($request->get('foto') != '') {
            Storage::delete($user->foto);
            $user->foto = $request->file('foto')->store('avatar');
        }
        $aks = $user->save();
        if ($aks) {
            return redirect('admin/users')->with("success", 'User Successfully Updated');
        } else {
            return back();
        }
    }
}
