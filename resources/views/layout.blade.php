<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kipas Angin App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7f6;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #2575fc !important;
        }

        .nav-link {
            font-weight: 600;
            color: #555 !important;
            margin: 0 10px;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #2575fc !important;
        }

        .container-content {
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.07);
            margin-top: 40px;
            margin-bottom: 40px;
        }

        h4.page-title {
            font-weight: 700;
            color: #333;
            border-bottom: 3px solid #2575fc;
            padding-bottom: 15px;
            margin-bottom: 35px;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
            border: none;
            border-radius: 8px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(37, 117, 252, 0.4);
        }
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(37, 117, 252, 0.6);
        }
        .btn-outline-secondary {
            border-radius: 8px;
            padding: 12px 30px;
            font-weight: 600;
        }

        footer {
            margin-top: 50px;
            text-align: center;
            color: #999;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">🌀 KipasAngin Enterprise</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="/karyawan" class="nav-link">Data Karyawan</a></li>
                <li class="nav-item"><a href="/karyawan/tambah" class="nav-link">Tambah Karyawan</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="container-content">
        @yield('content')
    </div>
</div>

<footer class="py-4">
    <p>&copy; {{ date('Y') }} Sandy 181 – All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
