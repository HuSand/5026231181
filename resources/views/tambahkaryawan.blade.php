@extends('layout')

@section('title', 'Tambah Data Karyawan')

@section('content')
<h4 class="page-title"><i class="bi bi-person-plus-fill me-2"></i> Tambah Data Karyawan</h4>

<style>
    .form-label {
        font-weight: 600;
        color: #555;
    }
    .form-control-lg {
        border-radius: 8px;
        border: 1px solid #ddd;
        transition: border-color 0.3s, box-shadow 0.3s;
    }
    .form-control-lg:focus {
        border-color: #2575fc;
        box-shadow: 0 0 0 4px rgba(37, 117, 252, 0.15);
    }
</style>

<form action="/karyawan/store" method="POST" class="row g-4 mt-2">
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

    <div class="col-12 d-flex justify-content-end align-items-center mt-4 pt-3 border-top">
        <a href="/karyawan" class="btn btn-outline-secondary me-3">Batal</a>
        <button type="submit" class="btn btn-primary">💾 Simpan Data</button>
    </div>

    @if ($errors->any())
    <div class="col-12 mt-4">
        <div class="alert alert-danger">
            <h5 class="alert-heading"><i class="bi bi-exclamation-triangle-fill"></i> Terjadi Kesalahan!</h5>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

</form>
@endsection
