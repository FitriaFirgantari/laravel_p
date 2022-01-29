<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\habispakai;

class HabisPakaiController extends Controller
{
    //
    public function viewhabispakai()
    {
        $h_pakai = habispakai::latest()->paginate(2);
        return view('inventaris.habispakai', ['data' => $h_pakai])->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function cariHabis(Request $request)
    {
        $cari = $request->cari;
        $h_pakai = habispakai::where('nama_barang', 'like', "%" . $request->cari . "%")->paginate();

        return view('inventaris.habispakai', ['data' => $h_pakai])->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function cetak()
    {
        $ctkbarang = habispakai::get();
        return view('cetak.cetak-form', ['data' => $ctkbarang]);
    }

    public function cetakForm()
    {
        return view('cetak.cetak-perbulan');
    }

    public function cetakPerbulan($tgawal, $tgakhir)
    {
        //dd(["Tanggal Awal : " . $tgawal, "Tanggal Akhir : " . $tgakhir]);
        $ctkperbulan = habispakai::whereBetween('tanggal', [$tgawal, $tgakhir])->get();
        return view('cetak.cetak-barang-perbulan', ['data2 =>$ctkperbulan']);
    }

    public function tambah_h()
    {
        return view('inventaris.tambah_h');
    }

    public function simpan_h(Request $req)
    {
        habispakai::create(
            [

                'nama_barang' => $req->nama_barang,
                'kode' => $req->kode,
                'tanggal' => $req->tanggal,
                'type' => $req->type,
                'stock' => $req->stock,
                'posisi' => $req->posisi,
                'harga' => $req->harga,
                'gambar' => $req->gambar,
                'status' => $req->status,
                'keterangan' => $req->keterangan,


            ]
        );
        return redirect()->route('habispakai')->with('success', 'Data inventaris barang habis pakai telah di tambah');
    }

    public function ubah_h($id)
    {
        $h_pakai = habispakai::where('id', $id)->first();
        return view('inventaris.edit_h', ['data' => $h_pakai]);
    }

    public function update_h(Request $req)
    {

        $h_pakai = habispakai::where('id', $req->id)->update([
            'nama_barang' => $req->nama_barang,
            'kode' => $req->kode,
            'tanggal' => $req->tanggal,
            'type' => $req->type,
            'stock' => $req->stock,
            'posisi' => $req->posisi,
            'harga' => $req->harga,
            'gambar' => $req->gambar,
            'status' => $req->status,
            'keterangan' => $req->keterangan,

        ]);
        return redirect()->route('habispakai')->with('success', 'Data inventaris barang habis pakai telah di update');
    }

    public function delete_h($id)
    {
        $h_pakai = habispakai::where('id', $id)->delete();
        return redirect()->route('habispakai')->with('success', 'Data inventaris barang habis pakai telah di hapus');
    }
}
