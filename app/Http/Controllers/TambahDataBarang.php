<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barangs;

class TambahDataBarang extends Controller
{
    public function viewtambahbarang()
    {
        $barang = barangs::latest()->paginate(5);
        return view('content.dbarang', ['data' => $barang])->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function cariBarang(Request $request)
    {
        $cari = $request->cari;
        $barang = barangs::where('nama_barang', 'like', "%" . $request->cari . "%")->paginate();

        return view('content.dbarang', ['data' => $barang])->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function cetakBarang()
    {
        $ctkbarang = barangs::get();
        return view('cetak.cetak-barang', ['data' => $ctkbarang]);
    }

    public function tambahBarang()
    {
        return view('content.tbhdbrg');
    }

    public function simpanBarang(Request $req)
    {
        barangs::create(
            [

                'nama_barang' => $req->nama_barang,
                'kode' => $req->kode,
                'tanggal' => $req->tanggal,
                'type' => $req->type,
                'stock' => $req->stock,
                'upload' => $req->upload,
                'harga' => $req->harga,
                'status' => $req->status,


            ]
        );



        return redirect()->route('tambahbarang')->with('success', 'Data barang telah di tambah');
    }

    public function ubahBarang($id)
    {
        $barang = barangs::where('id', $id)->first();
        return view('content.editbarang', ['data' => $barang]);
    }

    public function updateBarang(Request $req)
    {

        $barang = barangs::where('id', $req->id)->update([
            'nama_barang' => $req->nama_barang,
            'kode' => $req->kode,
            'tanggal' => $req->tanggal,
            'type' => $req->type,
            'stock' => $req->stock,
            'upload' => $req->upload,
            'harga' => $req->harga,
            'status' => $req->status,

        ]);
        return redirect()->route('tambahbarang')->with('success', 'Data barang telah di update');
    }

    public function deleteBarang($id)
    {
        $barang = barangs::where('id', $id)->delete();
        return redirect()->route('tambahbarang')->with('success', 'Data barang telah di hapus');
    }
}
