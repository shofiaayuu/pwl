<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view ('profile')
            ->with('name', 'Shofiatul Ayu Anikaningrum')
            ->with('nama', 'Shofia')
            ->with('nim', '2141720048')
            ->with('kelas', 'TI-2B')
            ->with('absen', '24')
            ->with('prodi', 'D-IV Teknik Informatika')
            ->with('jurusan', 'Teknologi Informasi')
            ->with('univ', 'Politeknik Negeri Malang');
    }
}
