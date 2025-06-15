@extends('template')

@section('title', 'Beli Barang')

@push('styles')
<style>
    .form-container {
        background: #fff;
        padding: 2.5rem;
        border-radius: 15px;
        box-shadow: 0 4px 30px rgba(0,0,0,0.08);
    }

    .form-label {
        font-weight: 600;
    }

    .btn-action-outline {
        background: transparent;
        border: 2px solid #888;
        color: #888;
        border-radius: 50px;
        padding: 10px 25px;
        font-weight: 700;
        transition: all 0.3s ease;
    }
    .btn-action-outline:hover {
        background: #888;
        color: #fff;
    }

    .btn-confirm {
        background: linear-gradient(90deg, #1dd1a1 0%, #10ac84 100%);
        border: none;
        border-radius: 50px;
        padding: 12px 40px;
        font-size: 1.1rem;
        font-weight: 700;
        color: #fff;
        box-shadow: 0 10px 20px -5px rgba(29, 209, 161, 0.5);
        transition: all 0.3s ease;
    }
    .btn-confirm:hover {
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 12px 25px -5px rgba(29, 209, 161, 0.7);
    }
</style>
@endpush

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bolder text-uppercase mb-0">Beli Barang</h2>
                <a href="/keranjang" class="btn btn-action-outline">
                    <i class="bi bi-arrow-left-circle-fill me-2"></i>Kembali
                </a>
            </div>

            <div class="form-container">
                <form action="/keranjang/update" method="post">
                    {{ csrf_field() }}

                    {{-- Menggunakan struktur form horizontal Bootstrap 5 --}}
                    <div class="row mb-4 align-items-center">
                        <label for="KodeBarang" class="col-md-3 col-form-label form-label">Kode Barang</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-lg" id="KodeBarang" name="KodeBarang" placeholder="Masukkan Kode Barang" required>
                        </div>
                    </div>

                    <div class="row mb-4 align-items-center">
                        <label for="Jumlah" class="col-md-3 col-form-label form-label">Jumlah Pembelian</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control form-control-lg" id="Jumlah" name="Jumlah" placeholder="Masukkan Jumlah Pembelian" required min="1" value="1">
                        </div>
                    </div>

                    <div class="row mb-4 align-items-center">
                        <label for="Harga" class="col-md-3 col-form-label form-label">Harga per Item</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control form-control-lg" id="Harga" name="Harga" placeholder="Masukkan Harga per Item" required min="0">
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-confirm">
                                <i class="bi bi-check-circle-fill me-2"></i>Confirm
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
