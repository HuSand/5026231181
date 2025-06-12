<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanDBController extends controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan') -> paginate(10);
        return view('karyawan', ['karyawan' => $karyawan]);
    }

    public function tambah()
    {
        return view('tambahkaryawan');
    }

    public function store(Request $request)
    {

        $request->validate([
            'kodepegawai' => 'required|string|size:5',
            'namalengkap' => 'required|string|max:50',
            'divisi' => 'required|string|size:5',
            'departemen' => 'required|string|max:10',
        ]);

        DB::table('karyawan') -> insert([
            'kodepegwai' => $request -> kodepegawai,
            'namalengkap' => $request -> namalengkap,
            'divisi' => $request -> divisi,
            'departemen' => $request -> departemen
        ]);

        return redirect('/karyawan') -> with('success', 'Data berhasil ditambahkan');
    }

    public function hapus($id)
    {
        DB::table('karyawan')->where('kodepegawai', $id)->delete();
        return redirect('/karyawan');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $karyawan = DB::table('karyawan')
            ->where('namalengkap', 'like', "%{$cari}%")
            ->paginate(10);

        return view('karyawan', ['karyawan' => $karyawan]);
    }

        /* —— MUTATORS: saat disimpan —— */
    public function setNamalengkapAttribute($value)
    {
        $this->attributes['namalengkap'] = Str::upper($value);
    }
    public function setDepartemenAttribute($value)
    {
        $this->attributes['departemen'] = Str::lower($value);
    }

    /* —— ACCESSORS: saat di-ambil —— */
    public function getNamalengkapAttribute($value)
    {
        return Str::upper($value);   // jaga-jaga kalau ada data “nakal”
    }
    public function getDepartemenAttribute($value)
    {
        return Str::lower($value);
    }

}
