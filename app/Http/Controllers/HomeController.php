<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Customer;
use App\Agen;
use App\Perumahan;
use App\Apartemen;
use App\User;
use App\Artikel;

class HomeController extends Controller
{
    public function login()
    {
        return view('login.login');
    }
    public function postlogin(Request $request)
    {
        // if (Auth::attempt($request->only('email', 'password'))) {

        //     return redirect('/admin/home');
        // // }
        // // alert()->error('error', 'Email Or Password Not Valid');
        // return redirect('/admin/login');
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            // 'g-recaptcha-response' => 'required|captcha',

        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            $name = auth()->user()->name;
            return redirect('admin/home')->with(['success' => 'Welcome back ' . $name]);
        }
        return redirect()->back()->with(['error' => 'Invalid email or password']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('admin/login')->with(['successs' => 'Successfully Logout']);
    }
    public function index()
    {
        $data['agen'] = Agen::count();
        $data['customer'] = Customer::count();
        $data['perumahan'] = Perumahan::count();
        $data['apartemen'] = Apartemen::count();
        $data['users'] = User::count();
        $data['artikel'] = Artikel::count();
        return view('home', $data);
    }
    public function welcome()
    {
        $data['perumahan'] = Perumahan::all();
        $data['artikel'] = Artikel::latest()->limit(4)->get();
        return view('frontend.home', $data);
    }
}
