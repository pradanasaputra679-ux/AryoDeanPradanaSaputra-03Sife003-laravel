<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Aryo Dean Pradana Saputra',
            'nim' => '251011700269',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'UNPAM',
            'status' => 'Aktif'
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}