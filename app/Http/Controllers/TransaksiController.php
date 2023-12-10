<?php

namespace App\Http\Controllers;

use App\Models\obat;
use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function tampiltransaksi(Request $request)
    {
        if($request->has('search')){
            $data = obat::where('obat','LIKE','%' .$request->search. '%')->paginate(20)->get();
        }else{
            $data = obat::paginate(20);
        }
        return view('Tampil-transaksi', compact('data'));
    }

    public function addtocart(Request $request, $id)
    {
        $obat = obat::find($id);

        $jumlah = $request->jumlah;
        $harga = $obat->harga;
        $total_harga = $jumlah * $harga;

        $data = transaksi::create([
            'nama_pembeli' => $request->nama_pembeli,
            'alamat' => $request->alamat,
            'noHP' => $request->noHP,
            'jumlah' => $request->jumlah,
            'total_harga' => $total_harga,
            'id_obat' => $request->id,
        ]);

        // $transaksi = transaksi::where('id_obat', $obat->id)->first();
        // if ($transaksi) {
        //     $transaksi->jumlah += 1;
        //     $transaksi->save();
        // } else {
        //     transaksi::create([
        //         'id_obat' => $obat->id,
        //         'nama_pembeli' => $request->nama_pembeli,
        //         'alamat' => $request->alamat,
        //         'noHP' => $request->noHP,
        //         'id_obat' => $obat->id,
        //         'jumlah' => $request->jumlah,
        //         'total_harga' => $obat->harga * 1,
        //     ]);
        // }
        return redirect('/riwayat');
    }

    public function beli($id)
    {
        $data = obat::find($id);
        return view('beli', compact('data'));
    }

    public function riwayat(Request $request)
    {
        if($request->has('search')){
            $data = transaksi::where('nama_pembeli','LIKE', '%' .$request->search. '%')->get();
        }else{
            $data = transaksi::all();
        }
        
        return view('riwayat', compact('data'));
    }

    function multi($id){
        $data = transaksi::find($id);
        $data->delete();
        return redirect('/riwayat');
    }
}
