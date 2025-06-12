<!DOCTYPE html>
<html lang="id">

<head>
    <title>@yield('title', 'Dashboard') – Sandythia Lova R.K.</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta name="robots" content="noindex,nofollow">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            color: #333;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .main-container {
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Align to top */
            min-height: 100vh;
            padding: 40px 15px;
        }

        .content-wrapper {
            width: 100%;
            max-width: 1200px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .header-info {
            text-align: center;
            padding: 20px;
            border-bottom: 1px solid #eee;
        }

        .header-info h1 {
            font-weight: 800;
            color: #1e293b;
            font-size: 1.5rem;
        }

        .header-info p {
            color: #555;
            font-weight: 600;
            margin-bottom: 0;
        }

        footer {
            text-align: center;
            padding: 20px;
            font-size: 0.9rem;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
            margin-top: 40px;
        }

        @stack('styles')

    </style>
</head>

<body>
    <div class="main-container">
        <div class="content-wrapper">
            <div class="header-info">
                <h1>Sandythia Lova R.K.</h1>
                <p>NRP: 5026231181</p>
            </div>

            <main>
                @yield('content')
            </main>
        </div>
    </div>

    <footer>
        &copy; {{ date('Y') }} – All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
