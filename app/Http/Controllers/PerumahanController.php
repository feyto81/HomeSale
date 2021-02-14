<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perumahan;
use App\Agen;
use Str;
use Storage;
use DB;

class PerumahanController extends Controller
{
    public function getIndex()
    {
        $data['perumahan'] = Perumahan::all();
        return view('perumahan.index', $data);
    }

    public function getAdd()
    {
        $data['agen'] = Agen::all();
        return view('perumahan.add', $data);
    }

    public function getSave(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'luas' => 'required',
            'room' => 'required',
            'bedrooms' => 'required',
            'status' => 'required',
            'agen_id' => 'required',
            'description' => 'required',
            'details' => 'required',
            'features' => 'required',
            'video_link' => 'required',
            'location' => 'required',
            'address' => 'required',
            'city' => 'required',
            'provinsi' => 'required'

        ]);
        $perumahan = new Perumahan;
        $perumahan->name = $request->name;
        $perumahan->price = $request->price;
        $perumahan->luas = $request->luas;
        $perumahan->room = $request->room;
        $perumahan->bedrooms = $request->bedrooms;
        $perumahan->bathrooms = $request->bathrooms;
        $perumahan->status = $request->status;
        $perumahan->agen_id = $request->agen_id;
        $perumahan->description = $request->description;
        $perumahan->details = $request->details;
        $perumahan->features = $request->features;
        $perumahan->video_link = $request->video_link;
        $perumahan->location = $request->location;
        $perumahan->address = $request->address;
        $perumahan->city = $request->city;
        $perumahan->provinsi = $request->provinsi;
        $perumahan->thumbnail = $request->file('thumbnail')->store('perumahan');
        $perumahan->gambar1 = $request->file('gambar1')->store('perumahan');
        $perumahan->gambar2 = $request->file('gambar2')->store('perumahan');
        $perumahan->gambar3 = $request->file('gambar3')->store('perumahan');

        $result = $perumahan->save();
        if ($result) {
            // alert()->success('Customer Successfully Added', 'Success');
            return redirect('admin/perumahan')->with('success', 'Perumahan success is saved');
        } else {

            return back();
        }
    }

    public function getDelete($id)
    {
        $perumahan = Perumahan::find($id);
        if (!$perumahan) {
            return redirect()->back();
        } else {
            Storage::delete($perumahan->thumbnail);
            Storage::delete($perumahan->gambar1);
            Storage::delete($perumahan->gambar2);
            Storage::delete($perumahan->gambar3);
            $perumahan->delete();

            return redirect('admin/perumahan')->with('success', 'Perumahan success is Deleted');
        }
    }

    public function getDetails($id)
    {
        $data['perumahan'] = Perumahan::find($id);
        return view('frontend.perumahan.detail', $data);
    }
    public function getPerumahanSale()
    {
        $data['perumahansale'] = Perumahan::where('status', 'Jual')->get();
        return view('frontend.perumahan.sale', $data);
    }
    public function getPerumahanSaleDetails($id)
    {
        $data['perumahan'] = Perumahan::find($id);
        return view('frontend.perumahan.saledetails', $data);
    }
    public function getPerumahanSaleSearch(Request $request)
    {
        // $perumahansale = Perumahan::when($request->q, function ($query) use ($request) {
        //     $query->where('name', 'like', "%{$request->q}%")
        //         ->where('status', 'Jual')
        //         ->orWhere('price', 'like', "%{$request->q}%")
        //         ->orWhere('address', 'like', "%{$request->q}%")
        //         ->orWhere('city', 'like', "%{$request->q}%")
        //         ->orWhere('provinsi', 'like', "%{$request->q}%");
        // })->paginate();
        // $perumahansale->appends($request->only('q'));
        $perumahansale = Perumahan::when($request->q, function ($query) use ($request) {
            $query->where('status', 'Jual')

                ->where('price', 'like', "%{$request->q}%")
                // ->where('provinsi', 'like', "%{$request->q}%")
                // ->where('address', 'like', "%{$request->q}%")
                ->orwhere('city', 'like', "%{$request->q}%");
            // ->where('name', 'like', "%{$request->q}%");
        })->paginate();

        return view('frontend.perumahan.sale', compact('perumahansale'));
    }

    public function getPerumahanSewa()
    {
        $data['perumahansewa'] = Perumahan::where('status', 'Sewa')->get();
        return view('frontend.perumahan.sewa', $data);
    }

    public function getPerumahanSewaDetails($id)
    {
        $data['perumahan'] = Perumahan::find($id);
        return view('frontend.perumahan.sewadetails', $data);
    }
    public function getPerumahanSewaSearch(Request $request)
    {
        $cari = $request->q;

        // mengambil data dari table pegawai sesuai pencarian data
        // $data['perumahansewa'] = DB::table('perumahan')
        //     ->where('status', 'Sewa')
        //     ->orWhere('name', 'like', "%" . $cari . "%")
        //     ->orwhere('price', 'like', "%" . $cari . "%")
        //     ->orwhere('address', 'like', "%" . $cari . "%")
        //     ->orwhere('city', 'like', "%" . $cari . "%")
        //     ->orwhere('provinsi', 'like', "%" . $cari . "%")
        //     ->paginate();
        // $perumahansewa = DB::table('perumahan')
        //     ->join('agen', 'perumahan.agen_id', '=', 'agen.id')
        //     ->select('perumahan.*', 'agen.name as agen_name', 'agen.*')
        //     ->where('status', 'Sewa')




        //     ->orwhere('perumahan.price', 'like', "%" . $cari . "%")
        //     ->where('perumahan.provinsi', 'like', "%" . $cari . "%")
        //     ->where('perumahan.address', 'like', "%" . $cari . "%")
        //     ->where('perumahan.city', 'like', "%" . $cari . "%")
        //     ->where('perumahan.name', 'like', "%" . $cari . "%")

        //     ->get();
        $perumahansewa = Perumahan::when($request->q, function ($query) use ($request) {
            $query->where('status', 'Sewa')

                ->where('price', 'like', "%{$request->q}%")
                // ->where('provinsi', 'like', "%{$request->q}%")
                // ->where('address', 'like', "%{$request->q}%")
                ->where('city', 'like', "%{$request->q}%");
            // ->where('name', 'like', "%{$request->q}%");
        })->paginate();
        // dd($perumahansewa);

        return view('frontend.perumahan.sewa', compact('perumahansewa'));
    }
}
