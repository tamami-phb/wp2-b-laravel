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

    public function tambah(Request $req) {
        $mhs = new Mahasiswa;
        $mhs->nim = $req->nim;
        $mhs->nama = $req->nama;
        $mhs->kelas = $req->kelas;
        $mhs->save();
        return $this->getAll();
    }

    public function hapus($nim) {
        $mhs = Mahasiswa::where('nim', $nim)->first();
        $mhs->delete();
        return $this->getAll();
    }

    public function formUbah($nim) {
        $mhs = Mahasiswa::where('nim', $nim)->first();
        return view('form-ubah', [ 'mhs' => $mhs ]);
    }

    public function ubah(Request $req) {
        $mhs = Mahasiswa::where('nim', $req->nim)->first();
        $mhs->nama = $req->nama;
        $mhs->kelas = $req->kelas;
        $mhs->save();
        return $this->getAll();
    }

}
