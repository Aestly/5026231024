<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    public function counter1()
    {
        DB::table('counter1')->where('id', 1)->increment('jumlah');

        $jumlah = DB::table('counter1')->where('id',1)->value('jumlah');

        return view('counter1', ['jumlah' => $jumlah]);
    }
}
