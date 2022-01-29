<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pinjams;

class PinjamController extends Controller
{
    //
    public function viewPinjam()
    {
        $pinjam = pinjams::latest()->paginate(2);
        return view('peminjaman.pinjam', ['data' => $pinjam])->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function cariPinjam(Request $request)
    {
        $cari = $request->cari;
        $pinjam = pinjams::where('nama_barang', 'like', "%" . $request->cari . "%")->paginate();

        return view('peminjaman.pinjam', ['data' => $pinjam])->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function cetak()
    {
        $ctkbarang = pinjams::get();
        return view('cetak.cetak-barang', ['data' => $ctkbarang]);
    }

    public function cetakForm()
    {
        return view('cetak.cetak-perbulan');
    }

    public function cetakPerbulan($tgawal, $tgakhir)
    {
        //dd(["Tanggal Awal : " . $tgawal, "Tanggal Akhir : " . $tgakhir]);
        $ctkperbulan = pinjams::whereBetween('tanggal', [$tgawal, $tgakhir])->get();
        return view('cetak.cetak-barang-perbulan', ['data2 =>$ctkperbulan']);
    }

    public function tambah_pinjam()
    {
        return view('peminjaman.tambah_pinjam');
    }

    public function simpan_pinjam(Request $req)
    {
        pinjams::create(
            [

                'user' => $req->user,
                'nama_barang' => $req->nama_barang,
                'kode' => $req->kode,
                'type' => $req->type,
                'banyaknya' => $req->banyaknya,
                'tanggal_t' => $req->tanggal_t,
                'tanggal_p' => $req->tanggal_p,
                'status' => $req->status,
                'keterangan' => $req->keterangan,


            ]
        );
        return redirect()->route('peminjaman')->with('success', 'Data peminjaman barang telah di tambah');
    }

    public function ubah_pinjam($id)
    {
        $pinjam = pinjams::where('id', $id)->first();
        return view('peminjaman.edit_pinjam', ['data' => $pinjam]);
    }

    public function update_pinjam(Request $req)
    {

        $pinjam = pinjams::where('id', $req->id)->update([
            'user' => $req->user,
            'nama_barang' => $req->nama_barang,
            'kode' => $req->kode,
            'type' => $req->type,
            'banyaknya' => $req->banyaknya,
            'tanggal_t' => $req->tanggal_t,
            'tanggal_p' => $req->tanggal_p,
            'status' => $req->status,
            'keterangan' => $req->keterangan,

        ]);
        return redirect()->route('peminjaman')->with('success', 'Data peminjaman barang telah di update');
    }

    public function delete_pinjam($id)
    {
        $pinjam = pinjams::where('id', $id)->delete();
        return redirect()->route('peminjaman')->with('success', 'Data peminjaman barang telah di hapus');
    }
}
