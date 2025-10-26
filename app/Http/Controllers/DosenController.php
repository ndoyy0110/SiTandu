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
}
