<!DOCTYPE html>
<html lang="id">
<head>
    <title>@yield('title', 'Dashboard') 5026231181 : Sandythia Lova Ramadhani Krisnaprana</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta name="robots" content="noindex,nofollow">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        footer {
            margin-top: 60px;
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
        }
    </style>
    @stack('styles')
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

    <main>
        @yield('content')
    </main>

    <footer class="py-4">
        <p>&copy; {{ date('Y') }} – All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
