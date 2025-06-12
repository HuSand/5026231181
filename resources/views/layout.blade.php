<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Tugas')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8fafc;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .container-content {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.05);
            margin-top: 30px;
            min-height: 70vh;
        }
        h4.page-title {
            font-weight: 700;
            color: #111827;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }
        footer {
            margin-top: 50px;
            text-align: center;
            color: #6c757d;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">5026231181 : Sandythia Lova Ramadhani Krisnaprana</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#" class="nav-link">Front-End</a></li>
                <li class="nav-item"><a href="/karyawan" class="nav-link">Pegawai</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Tugas CRUD</a></li>
                <li class="nav-item"><a href="#" class="nav-link">EAS</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Latihan
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Latihan 1</a></li>
                        <li><a class="dropdown-item" href="#">Latihan 2</a></li>
                        <li><a class="dropdown-item" href="#">Latihan 3</a></li>
                    </ul>
                </li>
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
    <p>&copy; {{ date('Y') }} – All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
