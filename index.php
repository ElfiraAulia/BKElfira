<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Temu Janji Pasien - Dokter</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 2rem 0;
            text-align: center;
        }

        header h1 {
            font-size: 2.5rem;
        }

        .hero-image {
            background-image: url('assets/images/hospital.jpg');
            height: 350px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .hero-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 123, 255, 0.6);
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }

        .hero-text h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .card img {
            width: 80px;
            margin-bottom: 1rem;
        }

        footer {
            background-color: #f8f9fa;
            color: #6c757d;
            text-align: center;
            padding: 1rem 0;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Sistem Temu Janji Pasien - Dokter</h1>
        <p class="lead">Membantu Anda dalam manajemen temu janji dengan mudah</p>
    </header>

    <!-- Hero Section -->
    <div class="hero-image">
        <div class="hero-text">
            <h2>Selamat Datang di Sistem Temu Janji</h2>
            <p>Mudah, cepat, dan terintegrasi</p>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container py-5">
        <div class="row g-4 text-center">
            <!-- Card Login Pasien -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <img src="assets/images/patient-icon.png" alt="Pasien Icon">
                        <h3 class="card-title">Login Sebagai Pasien</h3>
                        <p class="card-text">Akses sistem temu janji dengan dokter secara mudah.</p>
                        <a href="login_pasien.php" class="btn btn-primary">Login Pasien &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Card Login Dokter -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <img src="assets/images/doctor-icon.png" alt="Dokter Icon">
                        <h3 class="card-title">Login Sebagai Dokter</h3>
                        <p class="card-text">Kelola janji temu dengan pasien Anda dengan efisien.</p>
                        <a href="login_dokter.php" class="btn btn-primary">Login Dokter &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p class="mb-0">&copy; 2024 Sistem Temu Janji Pasien - Dokter. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>