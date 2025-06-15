<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangDBController extends Controller
{
    public function indexkeranjang()
    {
        // mengambil data dari table keranjang (pagination)
        $keranjangs = DB::table('keranjang')->paginate(10);

        // mengirim data ke view keranjang.blade.php
        return view('keranjang', ['keranjangs' => $keranjangs]);
    }

    public function tambahkeranjang()
    {
        // menampilkan form tambah keranjang
        return view('tambahkeranjang');
    }

    public function storekeranjang(Request $request)
    {
        // simpan data baru ke keranjang
        DB::table('keranjang')->insert([
            'kodebarang' => $request->kodebarang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);

        return redirect('/keranjang');
    }

    public function editkeranjang($kodebarang)
    {
        // ambil data keranjang untuk diedit
        $keranjang = DB::table('keranjang')->where('kodebarang', $kodebarang)->first();

        return view('editkeranjang', ['keranjang' => $keranjang]);
    }

    public function updatekeranjang(Request $request)
    {
        // update data keranjang
        DB::table('keranjang')
            ->where('kodebarang', $request->kodebarang)
            ->update([
                'jumlah' => $request->jumlah,
                'harga' => $request->harga
            ]);

        return redirect('/keranjang');
    }

    public function hapuskeranjang($kodebarang)
    {
        // hapus data keranjang
        DB::table('keranjang')->where('kodebarang', $kodebarang)->delete();

        return redirect('/keranjang');
    }
}
