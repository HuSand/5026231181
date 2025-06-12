@extends('template')

@section('title', 'Data Karyawan')

@push('styles')
<style>
    .table {
        border-collapse: separate;
        border-spacing: 0 10px; /* jarak antar baris */
    }

    .table thead th {
        background: linear-gradient(90deg, #23a6d5, #23d5ab);
        color: #fff;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        border: none;
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .table thead th:first-child { border-radius: 10px 0 0 10px; }
    .table thead th:last-child { border-radius: 0 10px 10px 0; }

    .table tbody tr {
        background: #fff;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        border-radius: 10px;
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }

    .table tbody tr:hover {
        transform: translateY(-5px) scale(1.01);
        box-shadow: 0 8px 30px rgba(0,0,0,0.1);
    }

    .table td, .table th {
        border: none !important;
        vertical-align: middle;
        padding: 20px;
    }

    .table td:first-child { border-radius: 10px 0 0 10px; }
    .table td:last-child { border-radius: 0 10px 10px 0; }

    .btn-delete {
        background: transparent;
        border: 2px solid #e73c7e;
        color: #e73c7e;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .btn-delete:hover {
        background: #e73c7e;
        color: #fff;
        transform: scale(1.1);
    }

    .btn-add-new {
        background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
        border: none;
        border-radius: 50px;
        padding: 15px 40px;
        font-size: 1.2rem;
        font-weight: 700;
        color: #fff;
        box-shadow: 0 10px 20px -5px rgba(37, 117, 252, 0.5);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-add-new:hover {
        color: #fff;
        transform: scale(1.05);
        box-shadow: 0 12px 25px -5px rgba(37, 117, 252, 0.7);
    }

    .pagination .page-item.active .page-link {
        background-color: #23a6d5;
        border-color: #23a6d5;
    }
    .pagination .page-link {
        color: #23a6d5;
    }
</style>
@endpush

@section('content')
<div class="container-fluid p-4 p-md-5">

    <div class="text-center mb-5">
        <h2 class="fw-bolder text-uppercase" style="letter-spacing: 2px; font-size: 2.5rem;">
            Database Karyawan
        </h2>
        <p class="text-muted">Manajemen data profesional untuk tim Anda.</p>
    </div>

    @if($karyawan->count())
        <div class="table-responsive">
            <table class="table align-middle fs-6">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Lengkap</th>
                        <th>Divisi</th>
                        <th>Departemen</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($karyawan as $p)
                    <tr>
                        <td class="fw-bold">{{ $p->kodepegawai }}</td>
                        <td>{{ strtoupper($p->namalengkap) }}</td>
                        <td class="fw-semibold">{{ $p->divisi }}</td>
                        <td>{{ ucwords(strtolower($p->departemen)) }}</td>
                        <td class="text-center">
                            <a href="/karyawan/hapus/{{ $p->kodepegawai }}"
                               class="btn btn-sm btn-delete rounded-pill px-3 py-1"
                               onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash3-fill"></i> Hapus
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        @if ($karyawan->hasPages())
        <div class="d-flex justify-content-center my-4">
            {{ $karyawan->links('pagination::bootstrap-5') }}
        </div>
        @endif

        <div class="text-center mt-5">
            <a href="/karyawan/tambah" class="btn btn-add-new">
                <i class="bi bi-plus-circle-fill"></i> Tambah Karyawan Baru
            </a>
        </div>

    @else
        <div class="text-center py-5">
            <i class="bi bi-cloud-drizzle" style="font-size: 5rem; color: #aaa;"></i>
            <h4 class="mt-3">Belum Ada Data</h4>
            <p class="text-muted mb-4">Mulai dengan menambahkan data karyawan pertama Anda.</p>
            <a href="/karyawan/tambah" class="btn btn-add-new">
                <i class="bi bi-plus-circle-fill"></i> Tambah Karyawan
            </a>
        </div>
    @endif
</div>
@endsection
