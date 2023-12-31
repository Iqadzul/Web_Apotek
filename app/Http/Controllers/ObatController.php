<?php

namespace App\Http\Controllers;

use App\Models\obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function tampil(Request $request)
    {
        if($request->has('search')){
            $data = obat::where('obat','LIKE','%' .$request->search. '%')->paginate(20)->get();
        }else{
            $data = obat::paginate(20);
        }
        return view('tampil', compact('data'));
    }


    // Tambah Data
    public function tampiltambah()
    {
        return view('add');
    }

    public function tambaho(Request $request)
    {
        $data = obat::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('/tampil');
    }

    // Edit Data

    public function tampiledit($id)
    {
        $data = obat::find($id);
        return view('edit', compact('data'));
    }

    public function edit(Request $request, $id)
    {
        $data = obat::find($id);
        $data->update($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect('/tampil');
    }


    // delete data
    public function delete($id)
    {
        $data = obat::find($id);
        $data->delete();
        return redirect('/tampil');
    }

    // detail data
    public function detail($id)
    {
        $data = obat::find($id);
        return view('detail', compact('data'));
    }
}
