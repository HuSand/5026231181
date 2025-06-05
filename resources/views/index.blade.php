@include('template')

<h3>Data Pegawai</h3>

<p>Cari Data Pegawai :</p>
<form action="/pegawai/cari" method="GET">
    <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
</form>

<a href="/pegawai/tambah" class="btn btn-primary">+ Tambah Pegawai Baru</a>

<br /><br />

<!-- Bootstrap Table with minimalistic design and custom padding -->
<table class="table table-bordered table-hover text-center">
    <thead>
        <tr>
            <th class="px-3 py-2">Nama</th>
            <th class="px-3 py-2">Jabatan</th>
            <th class="px-3 py-2">Umur</th>
            <th class="px-3 py-2">Alamat</th>
            <th class="px-3 py-2">Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pegawai as $p)
            <tr>
                <td class="px-3 py-2">{{ $p->pegawai_nama }}</td>
                <td class="px-3 py-2">{{ $p->pegawai_jabatan }}</td>
                <td class="px-3 py-2">{{ $p->pegawai_umur }}</td>
                <td class="px-3 py-2">{{ $p->pegawai_alamat }}</td>
                <td class="px-3 py-2">
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success">Edit</a>
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Pagination using Bootstrap -->
<div class="d-flex justify-content-center">
    {{ $pegawai->links('pagination::bootstrap-4') }}
</div>
