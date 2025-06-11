<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KipasanginDBController extends Controller
{
    public function index()
    {
        $kipasangin = DB::table('kipasangin')->paginate(10);
        return view('kipasangin', ['kipasangin' => $kipasangin]);
    }

    public function tambah()
    {
        return view('tambahkipasangin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merkkipasangin' => 'required|string|max:255',
            'hargakipasangin' => 'required|numeric|min:0|max:999999999',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric|min:0|max:999.9'
        ]);

        DB::table('kipasangin')->insert([
            'merkkipasangin' => $request->merkkipasangin,
            'hargakipasangin' => $request->hargakipasangin,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/kipasangin')->with('success', 'Data berhasil ditambahkan!');
    }


    public function edit($id)
    {
        $kipasangin = DB::table('kipasangin')->where('id', $id)->first();
        return view('editkipasangin', ['kipasangin' => $kipasangin]);
    }

    public function update(Request $request)
    {
        DB::table('kipasangin')->where('id', $request->id)->update([
            'merkkipasangin' => $request->merkkipasangin,
            'hargakipasangin' => $request->hargakipasangin,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/kipasangin');
    }

    public function hapus($id)
    {
        DB::table('kipasangin')->where('id', $id)->delete();
        return redirect('/kipasangin');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $kipasangin = DB::table('kipasangin')
            ->where('merkkipasangin', 'like', "%" . $cari . "%")
            ->paginate(10);

        return view('kipasangin', ['kipasangin' => $kipasangin]);
    }
}
