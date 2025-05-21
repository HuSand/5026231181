<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script
        src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body style="background-color: #e2e2e2;">
    <div class="container mx-auto my-5 shadow align-content-lg-center just" style="background-color: white; border-color: black; padding: 20px; border-radius: 14px;">
        <form action="" method="post" onsubmit="return false">
            <h3 class="text-center">Form Pendaftaran</h3>
            <div class="my-2">NRP :</div>
            <input type="text" name="nrp" id="nrp" class="form-control" placeholder="Silahkan diisi digit NRP, harus angka , harus diisi">
            <br>
            <div class="my-2">nama :</div>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Isikan nama peserta yang valid">
            <br>
            <input type="submit" class="btn btn-success my-4 w-100" value="Daftar" onclick="validate()">
        </form>
        <script src="validasi1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </div>
</body>
</html>