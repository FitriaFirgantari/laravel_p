<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\thabispakai;

class TidakHabisPakai extends Controller
{
    public function viewInventaris()
    {
        $t_pakai = thabispakai::latest()->paginate(5);
        return view('inventaris.thabispakai', ['data' => $t_pakai])->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function cariTidak(Request $request)
    {
        $cari = $request->cari;
        $t_pakai = thabispakai::where('nama_barang', 'like', "%" . $request->cari . "%")->paginate();

        return view('inventaris.thabispakai', ['data' => $t_pakai])->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function cetak()
    {
        $ctkbarang = thabispakai::get();
        return view('cetak.cetak-barang', ['data' => $ctkbarang]);
    }

    public function cetakForm()
    {
        return view('cetak.cetak-perbulan');
    }

    public function cetakPerbulan($tgawal, $tgakhir)
    {
        //dd(["Tanggal Awal : " . $tgawal, "Tanggal Akhir : " . $tgakhir]);
        $ctkperbulan = thabispakai::whereBetween('tanggal', [$tgawal, $tgakhir])->get();
        return view('cetak.cetak-barang-perbulan', ['data2 =>$ctkperbulan']);
    }

    public function tambah()
    {
        return view('inventaris.tambah_th');
    }

    public function simpan(Request $req)
    {
        thabispakai::create(
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
        return redirect()->route('tambahinventaris')->with('success', 'Data inventaris barang telah di tambah');
    }

    public function ubah($id)
    {
        $t_pakai = thabispakai::where('id', $id)->first();
        return view('inventaris.edit_th', ['data' => $t_pakai]);
    }

    public function update(Request $req)
    {

        $t_pakai = thabispakai::where('id', $req->id)->update([
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
        return redirect()->route('tambahinventaris')->with('success', 'Data inventaris barang telah di update');
    }

    public function delete($id)
    {
        $t_pakai = thabispakai::where('id', $id)->delete();
        return redirect()->route('tambahinventaris')->with('success', 'Data inventaris barang telah di hapus');
    }
}
