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
    <script src="js1.js"></script>
    <div class="container">
        <div class="card" style="background-color: white; border-color: black;">
            <button type="button" class="btn btn-primary" id="myButton" onclick="hello()">klik disini</button>
        </div>
        <div class>
            <p>
                <h3>Kalkulator</h3>
                Bilangan 1 :
                <input type="text" class="input-group" id="bil1" placeholder="Masukkan Bilangan 1">
                <br>
                Bilangan 2 :
                <input type="text" class="input-group" id="bil2" placeholder="Masukkan Bilangan 2">
                <br>
                Hasil Penjumlahan :
                <br>
                <span id="result" class="my-4"></span>
                <br>
                <button type="button" class="bt`n btn-primary w-100" id="calculateButton" onclick="calculateSum()">Hitung</button>
            </p>
        </div>
    </div>
    

</body>
</html>