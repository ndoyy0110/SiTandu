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
    public function history()
    {
        return view('Mahasiswa.history');
    }
    public function disetujuiTTD()
    {
        return view('Mahasiswa.history.disetujuiTTD');
    }
    public function jadwalUlang()
    {
        return view('Mahasiswa.history.jadwalUlang');
    }
    public function revisi()
    {
        return view('Mahasiswa.history.revisi');
    }
    public function ditolak()
    {
        return view('Mahasiswa.history.ditolak');
    }
    public function menunggu()
    {
        return view('Mahasiswa.history.menunggu');
    }
    public function disetujui()
    {
        return view('Mahasiswa.history.disetujuiJT');
    }
    public function selesaiTrackingJT()
    {
        return view('Mahasiswa.tracking.janjiTemu.selesai');
    }
    public function jadwalUlangTrackingJT()
    {
        return view('Mahasiswa.tracking.janjiTemu.jadwalUlang');
    }
    public function menungguTrackingJT()
    {
        return view('Mahasiswa.tracking.janjiTemu.menunggu');
    }
    public function dibacaTrackingTTD()
    {
        return view('Mahasiswa.tracking.tandaTangan.dibaca');
    }
    public function ditolakTrackingTTD()
    {
        return view('Mahasiswa.tracking.tandaTangan.ditolak');
    }
    public function revisiTrackingTTD()
    {
        return view('Mahasiswa.tracking.tandaTangan.revisi');
    }
    public function selesaiTrackingTTD()
    {
        return view('Mahasiswa.tracking.tandaTangan.selesai');
    }
}
