<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Hash;

class CustomerController extends Controller
{
    public function getIndex()
    {
        $data['customer'] = Customer::all();
        return view('customer.index', $data);
    }
    public function getAdd()
    {
        return view('customer.add');
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
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->mobile_number = $request->mobile_number;
        $customer->address = $request->address;
        $customer->kodepos = $request->kodepos;
        $customer->password = Hash::make($request->password);
        $result = $customer->save();
        if ($result) {
            // alert()->success('Customer Successfully Added', 'Success');
            return redirect('admin/customer')->with('success', 'Customer success is saved');
        } else {

            return back();
        }
    }
    public function getDelete(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return back()->with('success', 'Customer successfully deleted');
    }

    public function getEdit($id)
    {
        $data['customer'] = Customer::find($id);
        return view('customer.edit', $data);
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

        $customer = Customer::find($id);
        $customer->name = $request->get('name');
        $customer->email = $request->get('email');
        $customer->mobile_number = $request->get('mobile_number');
        $customer->address = $request->get('address');
        $customer->kodepos = $request->get('kodepos');
        if ($request->get('password') != '') {
            $customer->password = Hash::make($request->get('password'));
        }
        $result = $customer->save();
        if ($result) {
            return redirect('/admin/customer')->with('success', 'Customer successfully Updated');
        } else {
            return back();
        }
    }
}
