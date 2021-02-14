<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use Str;
use Storage;

class ArtikelController extends Controller
{
    public function getIndex()
    {
        $data['artikel'] = Artikel::all();
        return view('artikel.index', $data);
    }

    public function getAdd()
    {

        return view('artikel.add');
    }
    public function getSave(Request $request)
    {

        $this->validate($request, [
            'judul' => 'required',
            'content' => 'required|min:10',
            'gambar' => 'required',


        ]);
        if (empty($request->file('gambar'))) {
            Artikel::create([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'content' => $request->content,
                'user_id' => $request->user_id

            ]);
        } else {
            Artikel::create([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'content' => $request->content,
                'gambar' => $request->file('gambar')->store('artikel'),
                'user_id' => $request->user_id

            ]);
        }

        return redirect('admin/artikel')->with('success', 'Artikel success is saved');
    }

    public function getDelete($id)
    {
        $artikel = Artikel::find($id);
        if (!$artikel) {
            return redirect()->back();
        } else {
            Storage::delete($artikel->gambar);

            $artikel->delete();

            return redirect('admin/artikel')->with('success', 'Artikel success is Deleted');
        }
    }

    public function getEdit($id)
    {
        $data['artikel'] = Artikel::find($id);
        return view('artikel.edit', $data);
    }
    public function getUpdate(Request $request, $id)
    {

        $this->validate($request, [
            'judul' => 'required',
            'content' => 'required|min:10',

        ]);
        if (empty($request->file('gambar'))) {
            $artikel = Artikel::find($id);
            $artikel->update([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'content' => $request->content,
                'user_id' => $request->user_id
            ]);
        } else {
            $artikel = Artikel::find($id);
            Storage::delete($artikel->gambar);
            $artikel->update([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'content' => $request->content,
                'gambar' => $request->file('gambar')->store('artikel'),
                'user_id' => $request->user_id
            ]);
        }

        return redirect('admin/artikel')->with('success', 'Artikel success is Updated');
    }

    public function show(Artikel $artikel)
    {
        $artikel_detail = $artikel;
        return view('frontend.artikel.detail', compact('artikel_detail'));
    }
}
