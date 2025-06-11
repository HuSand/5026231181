@extends('layoutkipasangin')

@section('title', 'Tambah Kipas Angin')

@section('content')
<h4><i class="bi bi-plus-circle"></i> Tambah Data Kipas Angin</h4>

<form action="/kipasangin/store" method="POST" class="row g-4">
    @csrf

    <div class="col-md-6">
        <label for="merkkipasangin" class="form-label">Merk Kipas Angin</label>
        <input type="text" id="merkkipasangin" name="merkkipasangin" class="form-control form-control-lg" placeholder="Contoh: Maspion Turbo" required>
    </div>

    <div class="col-md-6">
        <label for="hargakipasangin" class="form-label">Harga (Rp)</label>
        <input type="number" id="hargakipasangin" name="hargakipasangin" class="form-control form-control-lg" placeholder="Contoh: 250000" required>
    </div>

    <div class="col-md-6">
        <label for="tersedia" class="form-label">Tersedia</label>
        <select id="tersedia" name="tersedia" class="form-select form-select-lg">
            <option value="1">✔ Ya</option>
            <option value="0">✘ Tidak</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="berat" class="form-label">Berat (kg)</label>
        <input type="number" id="berat" name="berat" class="form-control form-control-lg" step="0.1" placeholder="Contoh: 2.5" required>
    </div>

    <div class="col-12 d-flex justify-content-end mt-4">
        <a href="/kipasangin" class="btn btn-outline-secondary me-3">Batal</a>
        <button type="submit" class="btn btn-primary px-5">💾 Simpan</button>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</form>
@endsection
