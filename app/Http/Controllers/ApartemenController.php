<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartemen;
use App\Agen;
use Storage;
use DB;

class ApartemenController extends Controller
{
    public function getIndex()
    {
        $data['apartemen'] = Apartemen::all();
        return view('apartemen.index', $data);
    }

    public function getAdd()
    {
        $data['agen'] = Agen::all();
        return view('apartemen.add', $data);
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
            'provinsi' => 'required',

        ]);
        $apartemen = new Apartemen;
        $apartemen->name = $request->name;
        $apartemen->price = $request->price;
        $apartemen->luas = $request->luas;
        $apartemen->room = $request->room;
        $apartemen->bedrooms = $request->bedrooms;
        $apartemen->bathrooms = $request->bathrooms;
        $apartemen->status = $request->status;
        $apartemen->agen_id = $request->agen_id;
        $apartemen->description = $request->description;
        $apartemen->details = $request->details;
        $apartemen->features = $request->features;
        $apartemen->video_link = $request->video_link;
        $apartemen->location = $request->location;
        $apartemen->address = $request->address;
        $apartemen->city = $request->city;
        $apartemen->provinsi = $request->provinsi;
        $apartemen->thumbnail = $request->file('thumbnail')->store('apartemen');
        $apartemen->gambar1 = $request->file('gambar1')->store('apartemen');
        $apartemen->gambar2 = $request->file('gambar2')->store('apartemen');
        $apartemen->gambar3 = $request->file('gambar3')->store('apartemen');

        $result = $apartemen->save();
        if ($result) {
            // alert()->success('Customer Successfully Added', 'Success');
            return redirect('admin/apartemen')->with('success', 'Apartemen success is saved');
        } else {

            return back();
        }
    }

    public function getDelete($id)
    {
        $apartemen = Apartemen::find($id);
        if (!$apartemen) {
            return redirect()->back();
        } else {
            Storage::delete($apartemen->thumbnail);
            Storage::delete($apartemen->gambar1);
            Storage::delete($apartemen->gambar2);
            Storage::delete($apartemen->gambar3);
            $apartemen->delete();

            return redirect('admin/apartemen')->with('success', 'Apartemen success is Deleted');
        }
    }

    public function getApartemenSale()
    {
        $data['apartemensale'] = Apartemen::where('status', 'Jual')->get();
        return view('frontend.apartemen.sale', $data);
    }

    public function getApartemenSaleDetails($id)
    {
        $data['apartemen'] = Apartemen::find($id);
        return view('frontend.apartemen.saledetails', $data);
    }

    public function getApartemenSaleSearch(Request $request)
    {
        $apartemensale = Apartemen::when($request->q, function ($query) use ($request) {
            $query->where('status', 'Jual')

                ->where('price', 'like', "%{$request->q}%")
                // ->where('provinsi', 'like', "%{$request->q}%")
                // ->where('address', 'like', "%{$request->q}%")
                ->orwhere('city', 'like', "%{$request->q}%");
            // ->where('name', 'like', "%{$request->q}%");
        })->paginate();

        return view('frontend.apartemen.sale', compact('apartemensale'));
    }

    public function getApartemenSewa()
    {
        $data['apartemensewa'] = Apartemen::where('status', 'Sewa')->get();
        return view('frontend.apartemen.sewa', $data);
    }

    public function getApartemenSewaDetails($id)
    {
        $data['apartemen'] = Apartemen::find($id);
        return view('frontend.apartemen.sewadetails', $data);
    }
    public function getApartemenSewaSearch(Request $request)
    {
        // $cari = $request->q;
        // $apartemensewa = DB::table('apartemen')
        //     ->join('agen', 'apartemen.agen_id', '=', 'agen.id')
        //     ->select('apartemen.*', 'agen.name as agen_name', 'apartemen.created_at as c_p', 'agen.*')
        //     ->where('status', 'Sewa')




        //     ->orwhere('apartemen.price', 'like', "%" . $cari . "%")
        //     ->where('apartemen.provinsi', 'like', "%" . $cari . "%")
        //     ->where('apartemen.address', 'like', "%" . $cari . "%")
        //     ->where('apartemen.city', 'like', "%" . $cari . "%")
        //     ->where('apartemen.name', 'like', "%" . $cari . "%")

        //     ->get();
        $apartemensewa = Apartemen::when($request->q, function ($query) use ($request) {
            $query->where('status', 'Sewa')

                ->where('price', 'like', "%{$request->q}%")
                // ->orwhere('provinsi', 'like', "%{$request->q}%")
                // ->orwhere('address', 'like', "%{$request->q}%")
                ->orwhere('city', 'like', "%{$request->q}%");
            // ->orwhere('name', 'like', "%{$request->q}%");
        })->paginate();
        // $apartemensewa = Apartemen::where('status', 'Sewa')
        //     ->orWhere('price', 'like', "%{$request->q}%")
        //     ->where('provinsi', 'like', "%{$request->q}%")
        //     ->where('address', 'like', "%{$request->q}%")
        //     ->where('city', 'like', "%{$request->q}%")
        //     ->where('name', 'like', "%{$request->q}%")->get();
        $apartemensewa->appends($request->only('q'));
        // $apartemensewa = DB::table('apartemen')
        //     ->join('agen', 'apartemen.agen_id', '=', 'agen.id')
        //     ->select('apartemen.*', 'agen.name as agen_name', 'agen.*')
        //     ->where('status', 'Sewa')
        //     ->where('city', 'like', "%{$request->q}%")
        //     ->orwhere('price', 'like', "%{$request->q}%")
        //     ->get();
        // dd($apartemensewa);
        return view('frontend.apartemen.sewa', compact('apartemensewa'));
    }
}
