@extends('layout')

@section('title', 'Edit Kipas Angin')

@section('content')
<h4><i class="bi bi-pencil-square"></i> Edit Data Kipas Angin</h4>

<a href="/kipasangin" class="btn btn-outline-secondary mb-4">
    <i class="bi bi-arrow-left-circle"></i> Kembali
</a>

<form action="/kipasangin/update" method="POST" class="row g-4">
    @csrf
    <input type="hidden" name="id" value="{{ $kipasangin->id }}">

    <div class="col-md-6">
        <label for="merkkipasangin" class="form-label">Merk Kipas Angin</label>
        <input type="text" name="merkkipasangin" id="merkkipasangin" class="form-control" required value="{{ $kipasangin->merkkipasangin }}">
    </div>

    <div class="col-md-6">
        <label for="hargakipasangin" class="form-label">Harga (Rp)</label>
        <input type="number" name="hargakipasangin" id="hargakipasangin" class="form-control" required value="{{ $kipasangin->hargakipasangin }}">
    </div>

    <div class="col-md-6">
        <label for="tersedia" class="form-label">Tersedia</label>
        <select name="tersedia" id="tersedia" class="form-select">
            <option value="1" {{ $kipasangin->tersedia == 1 ? 'selected' : '' }}>Ya</option>
            <option value="0" {{ $kipasangin->tersedia == 0 ? 'selected' : '' }}>Tidak</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="berat" class="form-label">Berat (kg)</label>
        <input type="number" step="0.1" name="berat" id="berat" class="form-control" required value="{{ $kipasangin->berat }}">
    </div>

    <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary px-4">
            <i class="bi bi-save"></i> Simpan
        </button>
    </div>
</form>
@endsection
