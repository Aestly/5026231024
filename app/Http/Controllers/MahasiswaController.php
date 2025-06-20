<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        // mengambil data dari table mahasiswa
        $mahasiswa = DB::table('mahasiswa')->paginate(15);

        // mengirim data mahasiswa ke view index
        return view('indexmahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    // method untuk menampilkan view form tambah mahasiswa
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahmahasiswa');
    }

    // method untuk insert data ke table mahasiswa
    public function store(Request $request)
    {
        // insert data ke table mahasiswa
        DB::table('mahasiswa')->insert([
            'nrp' => $request->nrp,
            'nama' => $request->nama,
            'ipk' => $request->ipk,
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    // method untuk edit data mahasiswa
    public function edit($NRP)
    {
        // mengambil data mahasiswa berdasarkan NRP yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('nrp', $NRP)->get();
        // passing data mahasiswa yang didapat ke view editmahasiswa.blade.php
        return view('editmahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    // update data mahasiswa
    public function update(Request $request)
    {
        // update data mahasiswa
        DB::table('mahasiswa')->where('nrp', $request->nrp)->update([
            'nama' => $request->nama,
            'ipk' => $request->ipk,
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    // method untuk hapus data mahasiswa
    public function hapus($NRP)
    {
        // menghapus data mahasiswa berdasarkan NRP yang dipilih
        DB::table('mahasiswa')->where('nrp', $NRP)->delete();

        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    // method untuk mencari mahasiswa
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table mahasiswa sesuai pencarian data
        $mahasiswa = DB::table('mahasiswa')
            ->where('nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data mahasiswa ke view index
        return view('indexmahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
