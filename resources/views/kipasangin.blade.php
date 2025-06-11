@extends('template')

@section('title', 'Data Kipas Angin')

@section('content')

<h4><i class="bi bi-fan"></i> Data Kipas Angin</h4>

<div class="row mb-4">
    <div class="col-md-8">
        <form action="/kipasangin/cari" method="GET" class="d-flex">
            <input type="text" name="cari" class="form-control form-control-lg me-2" placeholder="Cari kipas angin..." value="{{ request('cari') }}">
            <button type="submit" class="btn btn-outline-primary btn-lg"><i class="bi bi-search"></i> Cari</button>
        </form>
    </div>
    <div class="col-md-4 mt-3 text-end">
        <a href="/kipasangin/tambah" class="btn btn-primary btn-lg">
            <i class="bi bi-plus-circle"></i> Tambah Kipas Angin
        </a>
    </div>
</div>

@if ($kipasangin->count() > 0)
<div class="table-responsive">
    <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th class="px-3 py-2">ID</th>
                <th class="px-3 py-2">Merk</th>
                <th class="px-3 py-2">Tersedia</th>
                <th class="px-3 py-2">Berat (kg)</th>
                <th class="px-3 py-2">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kipasangin as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->merkkipasangin }}</td>
                <td>
                    @if ($p->tersedia)
                        <span class="badge bg-success">Ya</span>
                    @else
                        <span class="badge bg-danger">Tidak</span>
                    @endif
                </td>
                <td>{{ number_format($p->berat, 1) }}</td>
                <td>
                    <a href="/kipasangin/edit/{{ $p->id }}" class="btn btn-sm btn-success me-1"><i class="bi bi-pencil-square"></i></a>
                    <a href="/kipasangin/hapus/{{ $p->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                        <i class="bi bi-trash3"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-4">
    {{ $kipasangin->links('pagination::bootstrap-4') }}
</div>
@else
    <div class="alert alert-warning text-center mt-4" role="alert">
        <i class="bi bi-exclamation-circle"></i> Data tidak ditemukan.
    </div>
@endif
@endsection
