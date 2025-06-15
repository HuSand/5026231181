@extends('template')

@section('title', 'Keranjang Belanja')

@push('styles')
<style>
    /* ... (CSS lain tetap sama) ... */
    .table {
        border-collapse: separate;
        border-spacing: 0 15px;
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
        text-align: center;
    }
    .table thead th:first-child { border-radius: 10px 0 0 10px; text-align: left; }
    .table thead th:last-child { border-radius: 0 10px 10px 0; }
    .table tbody tr {
        background: #fff;
        box-shadow: 0 4px 20px rgba(0,0,0,0.07);
        border-radius: 10px;
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }
    .table tbody tr:hover {
        transform: translateY(-5px) scale(1.01);
        box-shadow: 0 8px 30px rgba(0,0,0,0.12);
    }
    .table td, .table th {
        border: none !important;
        vertical-align: middle;
        padding: 20px;
        text-align: center;
    }
    .table td:first-child { border-radius: 10px 0 0 10px; text-align: left; }
    .table td:last-child { border-radius: 0 10px 10px 0; }
    .btn-buy {
        background: transparent;
        border: 2px solid #28a745;
        color: #28a745;
        transition: all 0.3s ease;
        font-weight: 600;
    }
    .btn-buy:hover {
        background: #28a745;
        color: #fff;
        transform: scale(1.1);
    }
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
    .pagination .page-item .page-link {
        color: #6a11cb;
        border-radius: 0.5rem;
        margin: 0 3px;
        border: 1px solid #ddd;
    }
    .pagination .page-item.active .page-link {
        background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
        border-color: transparent;
        color: #fff;
        box-shadow: 0 5px 15px rgba(37, 117, 252, 0.4);
    }
    .pagination .page-item:disabled .page-link {
        color: #ccc;
    }
    .add-item-form {
        background: #f8f9fa;
        padding: 2rem;
        border: 1px solid #e9ecef;
        border-radius: 15px;
        margin-bottom: 3rem;
    }

    /* PENAMBAHAN: Style untuk tombol baru "Tambah Barang" */
    .btn-action-outline {
        background: transparent;
        border: 2px solid #6a11cb;
        color: #6a11cb;
        border-radius: 50px;
        padding: 10px 25px;
        font-weight: 700;
        transition: all 0.3s ease;
    }
    .btn-action-outline:hover {
        background: #6a11cb;
        color: #fff;
        transform: translateY(-2px);
    }
</style>
@endpush

@section('content')
<div class="container-fluid p-4 p-md-5">

    <div class="d-flex justify-content-between align-items-center mb-2">
        <h2 class="fw-bolder text-uppercase mb-0">Keranjang Belanja</h2>
        <a href="/keranjang/tambah" class="btn btn-action-outline">
            <i class="bi bi-plus-circle-fill me-2"></i>Tambah Barang
        </a>
    </div>
    <p class="text-muted mb-5">Periksa kembali item Anda sebelum melanjutkan ke pembayaran.</p>

    {{-- <div class="add-item-form">
        <h5 class="fw-bold mb-3 text-center">Atau Tambah Cepat di Sini</h5>
        <form action="/keranjang/store" method="POST" class="row g-3 align-items-end">
            @csrf
            <div class="col-md-5">
                <label for="kodebarang" class="form-label fw-semibold">Kode Barang</label>
                <input type="text" class="form-control form-control-lg" id="kodebarang" name="kodebarang" required placeholder="Contoh: B001">
            </div>
            <div class="col-md-4">
                <label for="jumlah" class="form-label fw-semibold">Jumlah</label>
                <input type="number" class="form-control form-control-lg" id="jumlah" name="jumlah" required min="1" value="1">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-add-new w-100" style="padding: 12px 20px; font-size: 1rem;"><i class="bi bi-cart-plus-fill me-2"></i>Tambah</button>
            </div>
        </form>
    </div> --}}

    @if($keranjangs->count())
        <div class="table-responsive">
            <table class="table align-middle fs-6">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Jumlah</th>
                        <th>Harga per Item</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($keranjangs as $keranjang)
                    <tr>
                        <td class="fw-bold">{{ $keranjang->kodebarang }}</td>
                        <td>{{ $keranjang->jumlah }}</td>
                        <td>Rp {{ number_format($keranjang->harga, 0, ',', '.') }}</td>
                        <td class="fw-bold">Rp {{ number_format($keranjang->jumlah * $keranjang->harga, 0, ',', '.') }}</td>
                        <td>
                            <a href="/keranjang/tambah/{{ $keranjang->kodebarang }}" class="btn btn-sm btn-buy rounded-pill px-3">
                                <i class="bi bi-bag-check-fill"></i> Beli
                            </a>
                            <a href="/keranjang/hapus/{{ $keranjang->kodebarang }}" class="btn btn-sm btn-delete rounded-pill px-3">
                                <i class="bi bi-trash3-fill"></i> Batal
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        @if ($keranjangs->hasPages())
        <div class="d-flex justify-content-center my-4">
            {{ $keranjangs->links('pagination::bootstrap-5') }}
        </div>
        @endif

        <div class="text-center mt-5">
            <a href="/" class="btn btn-add-new">
                <i class="bi bi-wallet-fill me-2"></i> Lanjut ke Pembayaran
            </a>
        </div>

    @else
        <div class="text-center py-5">
            <i class="bi bi-cart-x" style="font-size: 5rem; color: #aaa;"></i>
            <h4 class="mt-3">Keranjang Anda Kosong</h4>
            <p class="text-muted mb-4">Ayo, cari barang favoritmu sekarang!</p>
        </div>
    @endif
</div>
@endsection
