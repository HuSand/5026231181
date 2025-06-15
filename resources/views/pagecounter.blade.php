@extends('template')

{{-- Perbaikan: Mengganti judul halaman sesuai referensi --}}
@section('title', '5026231181 - Sandythia Lova Ramadhani Krisnaprana')

@push('styles')
<style>
    .counter-container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 60vh; /* Mengisi tinggi layar */
    }
    .counter-card {
        background: #fff;
        padding: 3rem 4rem;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        text-align: center;
        border: 1px solid #eee;
    }
    .counter-label {
        font-size: 1.5rem;
        font-weight: 600;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 1rem;
    }
    .counter-number {
        font-size: 10rem;
        font-weight: 800;
        /* Memberi warna gradien pada angka agar senada dengan tema tombol */
        background: linear-gradient(45deg, #6a11cb 0%, #2575fc 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1;
    }
    .counter-note {
        margin-top: 1.5rem;
        color: #adb5bd;
        font-style: italic;
    }
</style>
@endpush

@section('content')
<div class="counter-container">
    <div class="counter-card">
        <p class="counter-label">Anda Pengunjung ke:</p>

        {{-- Menampilkan angka counter dari controller --}}
        <div class="counter-number">
            {{ $Jumlah }}
        </div>

        <p class="counter-note">Jumlah akan bertambah 1 setiap kali halaman di-refresh.</p>
    </div>
</div>
@endsection
