<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('content.dashboard');
    }

    public function dbarang()
    {
        return view('content.dbarang');
    }

    public function dinven()
    {
        return view('content.dinven');
    }

    public function dpeminjaman()
    {
        return view('content.dpeminjaman');
    }

    public function dpengadaan()
    {
        return view('content.dpengadaan');
    }

    public function tbhdbrg()
    {
        return view('content.tbhdbrg');
    }

    public function habispakai()
    {
        return view('inventaris.habispakai');
    }

    public function thabispakai()
    {
        return view('inventaris.thabispakai');
    }



    public function register()
    {
        return view('content.register');
    }
}
