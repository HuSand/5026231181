<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Frontend Navigation</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* Animasi transisi warna beige ke putih bolak balik */
    @keyframes beigeWhitePulse {
      0%, 100% {
        background-color: #f3e9d2; /* beige */
      }
      50% {
        background-color: #ffffff; /* putih */
      }
    }

    body {
      height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      animation: beigeWhitePulse 8s ease-in-out infinite;
      scroll-behavior: smooth;
      color: #2c2c2c;
      transition: background-color 1.5s ease-in-out;
    }
    .container {
      max-width: 400px;
      text-align: center;
      background: rgba(255, 255, 240, 0.85);
      padding: 30px 25px;
      border-radius: 15px;
      box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      border: 1px solid rgba(0, 0, 0, 0.08);
      color: #2c2c2c;
    }
    h1 {
      font-weight: 700;
      margin-bottom: 2rem;
      color: #2c2c2c;
      letter-spacing: 1.2px;
      text-shadow: 0 0 4px rgba(255, 255, 255, 0.6);
    }
    .btn-custom {
      width: 100%;
      margin-bottom: 15px;
      font-weight: 600;
      border-radius: 30px;
      transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
      opacity: 0;
      animation: fadeInUp 0.6s forwards;
      border: 2px solid #a1866f;
      color: #4a3c29;
      background-color: #f3e9d2;
    }
    .btn-custom:hover {
      background-color: #a1866f;
      color: #f5f0e6;
      transform: scale(1.05);
      box-shadow: 0 0 12px 3px rgba(161, 134, 111, 0.7);
    }
    .btn-custom:nth-child(1) { animation-delay: 0.2s; }
    .btn-custom:nth-child(2) { animation-delay: 0.4s; }
    .btn-custom:nth-child(3) { animation-delay: 0.6s; }
    .btn-custom:nth-child(4) { animation-delay: 0.8s; }
    .btn-custom:nth-child(5) { animation-delay: 1.0s; }
    .btn-custom:nth-child(6) { animation-delay: 1.2s; }
    .btn-custom:nth-child(7) { animation-delay: 1.2s; }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Menu Navigasi Frontend</h1>
    <a href="{{ url('/linktree') }}" class="btn btn-custom">Linktree Page</a>
    <a href="{{ url('/pertemuan2') }}" class="btn btn-custom">Pertemuan 2</a>
    <a href="{{ url('/pertemuan3') }}" class="btn btn-custom">Pertemuan 3</a>
    <a href="{{ url('/pertemuan4') }}" class="btn btn-custom">Pertemuan 4</a>
    <a href="{{ url('/validasi1') }}" class="btn btn-custom">Validasi 1</a>
    <a href="{{ url('/js1') }}" class="btn btn-custom">Java Script 1</a>
    <a href="{{ url('/welcome') }}" class="btn btn-custom">Welcome Page</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
