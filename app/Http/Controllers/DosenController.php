<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function home()
    {
        return view('Dosen.home');
    }
    public function janjiTemu()
    {
        return view('Dosen.janjiTemu');
    }
    public function tandaTangan()
    {
        return view('Dosen.tandaTangan');
    }
    public function jadwalMendatang()
    {
        return view('Dosen.jadwalMendatang');
    }
    public function history()
    {
        return view('Dosen.history');
    }
    public function progres()
    {
        return view('Dosen.history.progres');
    }
    public function jadwalUlang()
    {
        return view('Dosen.history.jadwalUlang');
    }
        public function revisi()
    {
        return view('Dosen.history.revisi');
    }
        public function ditolak()
    {
        return view('Dosen.history.ditolak');
    }
}
