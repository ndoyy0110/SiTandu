<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function home()
    {
        return view('Mahasiswa.home');
    }
    public function janjiTemu()
    {
        return view('Mahasiswa.janjiTemu');
    }
    public function tandaTangan()
    {
        return view('Mahasiswa.tandaTangan');
    }
    public function tracking()
    {
        return view('Mahasiswa.tracking');
    }
    public function permintaanTTD()
    {
        return view('Mahasiswa.permintaanTTD');
    }
    public function permintaanJT()
    {
        return view('Mahasiswa.permintaanJT');
    }
}
