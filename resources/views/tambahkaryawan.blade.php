@extends('layout')

@section('title', 'Tambah Data Karyawan')

@section('content')
<h4><i class="bi bi-plus-circle"></i> Tambah Data Karyawan</h4>

<form action="/karyawan/store" method="POST" class="row g-4">
    @csrf

    <div class="col-md-6">
        <label for="kodepegawai" class="form-label">Kode Pegawai</label>
        <input type="text" id="kodepegawai" name="kodepegawai" class="form-control form-control-lg" placeholder="Contoh: P0001" maxlength="5" required>
    </div>

    <div class="col-md-6">
        <label for="namalengkap" class="form-label">Nama Lengkap</label>
        <input type="text" id="namalengkap" name="namalengkap" class="form-control form-control-lg" placeholder="Contoh: Budi Santoso" required>
    </div>

    <div class="col-md-6">
        <label for="divisi" class="form-label">Divisi</label>
        <input type="text" id="divisi" name="divisi" class="form-control form-control-lg" placeholder="Contoh: HRD01" maxlength="5" required>
    </div>

    <div class="col-md-6">
        <label for="departemen" class="form-label">Departemen</label>
        <input type="text" id="departemen" name="departemen" class="form-control form-control-lg" placeholder="Contoh: Logistik" maxlength="10" required>
    </div>

    <div class="col-12 d-flex justify-content-end mt-4">
        <a href="/karyawan" class="btn btn-outline-secondary me-3">Batal</a>
        <button type="submit" class="btn btn-primary px-5">💾 Simpan</button>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger mt-4">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</form>
@endsection
