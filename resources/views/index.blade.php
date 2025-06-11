@extends('template')

@section('title', 'Data Pegawai')

@section('content')
<h4><i class="bi bi-people-fill"></i> Data Pegawai</h4>

<div class="row mb-4">
    <div class="col-md-8">
        <form action="/pegawai/cari" method="GET" class="d-flex">
            <input type="text" name="cari" class="form-control form-control-lg me-2" placeholder="Cari pegawai..." value="{{ request('cari') }}">
            <button type="submit" class="btn btn-outline-primary btn-lg"><i class="bi bi-search"></i> Cari</button>
        </form>
    </div>
    <div class="col-md-4 text-end">
        <a href="/pegawai/tambah" class="btn btn-primary btn-lg">
            <i class="bi bi-plus-circle"></i> Tambah Pegawai
        </a>
    </div>
</div>

@if ($pegawai->count() > 0)
<div class="table-responsive">
    <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-sm btn-success me-1">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-4">
    {{ $pegawai->links('pagination::bootstrap-4') }}
</div>
@else
    <div class="alert alert-warning text-center mt-4">
        <i class="bi bi-exclamation-circle"></i> Tidak ada data pegawai ditemukan.
    </div>
@endif
@endsection
