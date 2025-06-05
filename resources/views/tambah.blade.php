<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-2">
                 <label class="control-label">Nama </label>
            </div>
            <div class="col-6">
            </div>
        </div>
        <input type="text" name="nama" required="required"> <br />

        <div class="row">
            <div class="col-2">
                 <label class="control-label">Jabatan </label>
            </div>
            <div class="col-6">
            </div>
        </div>
        <input type="text" name="jabatan" required="required"> <br />

        <div class="row">
            <div class="col-2">
                 <label class="control-label">Umur </label>
            </div>
            <div class="col-6">
            </div>
        </div>
        <input type="number" name="umur" required="required"> <br />

        <div class="row">
            <div class="col-2">
                 <label class="control-label">Alamat </label>
            </div>
            <div class="col-6">
            </div>
        </div>
        <textarea name="alamat" required="required"></textarea> <br />


        <input type="submit" value="Simpan Data">
    </form>

</body>

</html>
