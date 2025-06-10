<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuTulisController extends Controller
{
    public function index()
    {
        $bukutulis = DB::table('bukutulis')->paginate(10);

        // mengirim data bukutulis ke view index
        return view('indexbukutulis',['bukutulis' => $bukutulis]);
    }

    // method untuk menampilkan view form tambah bukutulis
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahbukutulis');
    }

    // method untuk insert data ke table bukutulis
    public function store(Request $request)
    {
        // insert data ke table bukutulis
        DB::table('bukutulis')->insert([
            'merkbukutulis' => $request->merkbukutulis,
            'hargabukutulis' => $request->hargabukutulis,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman bukutulis
        return redirect('/bukutulis');
    }

    // method untuk edit data bukutulis
    public function edit($ID)
    {
        // mengambil data bukutulis berdasarkan ID yang dipilih
        $bukutulis = DB::table('bukutulis')
        ->where('ID', $ID)
        ->get();

        // passing data bukutulis yang didapat ke view editbukutulis.blade.php
        return view('editbukutulis',['bukutulis' => $bukutulis]);
    }

    // update data bukutulis
    public function update(Request $request)
    {
        // update data bukutulis
        DB::table('bukutulis')->where('ID', $request->id)->update([
            'merkbukutulis' => $request->merkbukutulis,
            'hargabukutulis' => $request->hargabukutulis,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman bukutulis
        return redirect('/bukutulis');
    }

    // method untuk hapus data bukutulis
    public function hapus($ID)
    {
        // menghapus data bukutulis berdasarkan ID yang dipilih
        DB::table('bukutulis')->where('ID', $ID)->delete();

        // alihkan halaman ke halaman bukutulis
        return redirect('/bukutulis');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table bukutulis sesuai pencarian data
        $bukutulis = DB::table('bukutulis')
        ->where('merkbukutulis','like',"%".$cari."%")
        ->paginate();

        // mengirim data bukutulis ke view index
        return view('indexbukutulis',['bukutulis' => $bukutulis]);
    }
}
