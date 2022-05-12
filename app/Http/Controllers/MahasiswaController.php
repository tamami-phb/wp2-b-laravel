<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function getAll() {
        $mhs = Mahasiswa::all();
        return view('list-mahasiswa', [ 'data' => $mhs ]);
    }
}
