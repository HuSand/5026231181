<!DOCTYPE html>
<html lang="id">
<head>
    <title>@yield('title', 'Dashboard') | 5026231181 : Sandythia Lova Ramadhani Krisnaprana</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta name="robots" content="noindex,nofollow">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        :root {
            --bg-dark: #111827; /* Warna dasar gelap */
            --glow-primary: #a855f7; /* Warna ungu untuk efek glow */
            --glow-secondary: #3b82f6; /* Warna biru untuk efek glow */
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-dark);
            color: #d1d5db; /* Warna teks yang nyaman di latar gelap */

            /* Animasi latar belakang 'gacir' */
            background-image:
                radial-gradient(at 27% 37%, hsla(215, 98%, 61%, 0.1) 0px, transparent 50%),
                radial-gradient(at 97% 21%, hsla(215, 98%, 61%, 0.1) 0px, transparent 50%),
                radial-gradient(at 82% 89%, hsla(215, 98%, 61%, 0.1) 0px, transparent 50%);
        }

        /* EFEK KACA (GLASSMORPHISM) PADA NAVBAR */
        .navbar.glass-nav {
            background: rgba(17, 24, 39, 0.6); /* Transparansi dengan warna dasar */
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.25rem;
            color: #fff !important;
        }

        /* EFEK GLOW PADA NAV-LINK */
        .nav-link {
            font-weight: 600;
            color: #d1d5db !important;
            padding: 10px 15px !important;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
            position: relative;
            z-index: 1;
        }

        .nav-link:hover {
            color: #fff !important;
            transform: translateY(-2px);
            text-shadow: 0 0 10px var(--glow-primary);
        }

        .dropdown-menu.glass-dd {
            background: rgba(31, 41, 55, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 0.5rem;
        }

        .dropdown-item {
            color: #d1d5db;
            font-weight: 500;
            padding: 10px 15px;
            border-radius: 8px;
            transition: all 0.2s ease-in-out;
        }

        .dropdown-item:hover {
            background-color: var(--glow-primary);
            color: #fff;
        }

        main {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        footer {
            margin-top: 60px;
            font-size: 0.9rem;
            color: #9ca3af; /* Warna lebih redup untuk footer */
            text-align: center;
            opacity: 0.7;
        }
    </style>
    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg glass-nav sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">5026231181 : Sandythia Lova R.K.</a>
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
                        <ul class="dropdown-menu dropdown-menu-dark glass-dd">
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
