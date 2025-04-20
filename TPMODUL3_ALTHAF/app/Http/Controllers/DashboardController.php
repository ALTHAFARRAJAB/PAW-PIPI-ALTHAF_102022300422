<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama = 'Althaf'; 
        $jam = date('H');
        $waktu = date('H:i');

        
        if ($jam >= 5 && $jam < 12) {
            $salam = 'Selamat pagi';
        } elseif ($jam >= 12 && $jam < 15) {
            $salam = 'Selamat siang';
        } elseif ($jam >= 15 && $jam < 18) {
            $salam = 'Selamat sore';
        } else {
            $salam = 'Selamat malam';
        }

        $tanggal = $this->getTanggal(); 

        
        return view('dashboard', compact('nama', 'waktu', 'salam', 'tanggal'));
    }

    private function getTanggal()
    {
        return date('d-m-Y');
    }
}
