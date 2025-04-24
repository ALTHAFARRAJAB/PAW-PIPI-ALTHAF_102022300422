<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa =  (object) [
            'nama' => 'Muhammad Althaf Arrajab',
            'nim' => '10202022300422',
            'email' => 'malthafarrajab@gmail.com',
            'jurusan' => 'Sistem Informasi',
            'fakultas' => 'Rekayasa Industri',
            'foto' => 'althaf.jpg' 
        ];

        return view('profil', compact('mahasiswa'));
    }
}


