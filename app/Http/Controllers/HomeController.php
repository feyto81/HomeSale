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
        if (Auth::attempt($request->only('email', 'password'))) {

            return redirect('/admin/home');
        }
        alert()->error('error', 'Email Or Password Not Valid');
        return redirect('/admin/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('admin/login');
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
