<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KipasAngin Enterprise')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Custom Style -->
    <style>
        body {
            background-color: #f1f5f9;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar-brand {
            font-weight: 900;
            font-size: 1.8rem;
            letter-spacing: 0.8px;
            color: #facc15 !important;
        }

        .navbar-dark .nav-link {
            color: #f3f4f6 !important;
            font-weight: 500;
        }

        .navbar-dark .nav-link:hover {
            color: #facc15 !important;
        }

        .container-content {
            background: #ffffff;
            border-radius: 16px;
            padding: 35px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.04);
            margin-top: 40px;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        footer {
            margin-top: 60px;
            text-align: center;
            color: #6b7280;
            font-size: 0.9rem;
        }

        h4 {
            font-weight: 800;
            color: #1f2937;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 12px;
            margin-bottom: 30px;
        }

        .btn-primary, .btn-success, .btn-danger {
            border-radius: 999px;
            padding-left: 24px;
            padding-right: 24px;
            font-weight: 600;
        }

        .table th {
            background-color: #1e293b;
            color: white;
        }

        .badge {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="bi bi-wind"></i> KipasAngin Enterprise
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="/kipasangin" class="nav-link"><i class="bi bi-house-door"></i> Home</a></li>
                <li class="nav-item"><a href="/pegawai" class="nav-link"><i class="bi bi-person-lines-fill"></i> Pegawai</a></li>
                <li class="nav-item"><a href="/logout" class="nav-link"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Content -->
<div class="container">
    <div class="container-content">
        @yield('content')
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; {{ date('Y') }} <strong>Sandy 181</strong> – All rights reserved. <br>
        Built with 💨 by Laravel + Bootstrap
    </p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
