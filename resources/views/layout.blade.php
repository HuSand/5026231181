<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kipas Angin App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            letter-spacing: 0.5px;
        }

        .container-content {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.05);
            margin-top: 30px;
        }

        footer {
            margin-top: 50px;
            text-align: center;
            color: #6c757d;
            font-size: 0.9rem;
        }

        .btn-primary, .btn-success, .btn-danger {
            border-radius: 30px;
            padding-left: 20px;
            padding-right: 20px;
        }

        h4 {
            font-weight: 700;
            color: #111827;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">🌀 KipasAngin Enterprise</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="/kipasangin" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/kipasangin/tambah" class="nav-link">Tambah</a></li>
                <li class="nav-item"><a href="/pegawai" class="nav-link">Pegawai</a></li>
                <li class="nav-item"><a href="/logout" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="container-content">
        @yield('content')
    </div>
</div>

<footer class="mt-5">
    <p>&copy; {{ date('Y') }} Sandy 181 – All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
