<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PageCounterDBController extends Controller
{
    public function index()
    {
        // Update jumlah: tambah 1
        DB::table('pagecounter')->where('ID', 1)->increment('Jumlah');

        // Ambil data jumlah terbaru
        $counter = DB::table('pagecounter')->where('id', 1)->first();

        // Tampilkan ke view
        return view('pagecounter', ['Jumlah' => $counter->Jumlah]);
    }
}
