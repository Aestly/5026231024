<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function nilai()
    {
        // mengambil data dari table mahasiswa
        $nilai = DB::table('nilai')->paginate(15);

        // mengirim data mahasiswa ke view index
        return view('indexnilai', ['nilai' => $nilai]);
    }

    // method untuk menampilkan view form tambah mahasiswa
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahnilai');
    }
    // konversi nilai angka ke huruf /problemmm
    public function nilaihuruf($nilaiAngka) {
        if ($nilaiAngka <= 40) {
            return 'D';
        } elseif ($nilaiAngka <= 60) {
            return 'C';
        } elseif ($nilaiAngka <= 80) {
            return 'B';
        } else {
            return 'A';
        }
    }
    // method untuk insert data ke table mahasiswa
    public function store(Request $request)
    {
        // insert data ke table mahasiswa
        DB::table('nilai')->insert([
            'id' => $request->id,
            'normorinduksiswa' => $request->normorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks,
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/eas');
    }

}
