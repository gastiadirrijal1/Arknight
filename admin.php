<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Center - Rhodes Island</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        body { background-color: #121212; color: white; font-family: 'Roboto', sans-serif; }
        .navbar { border-bottom: 2px solid #E60000; }
        .welcome-section {
            padding: 50px 0;
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('bg.jpg');
            background-size: cover;
            border-bottom: 1px solid #333;
        }
        .card { background-color: #2C2C2C; border: 1px solid #444; color: white; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><i class="bi bi-shield-fill text-danger me-2"></i>RHODES SYSTEM</a>
            <div class="ms-auto">
                <span class="text-white me-3">Doctor <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></span>
                <a href="logout.php" class="btn btn-outline-danger btn-sm"><i class="bi bi-power"></i> Logout</a>
            </div>
        </div>
    </nav>

    <section class="welcome-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">CONTROL CENTER</h1>
            <p class="lead text-muted">Selamat datang kembali, Doctor. Sistem siap menerima perintah.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card p-3 h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-people-fill display-4 text-warning mb-3"></i>
                            <h4>Data Operator</h4>
                            <p class="text-muted small">Kelola data operator Rhodes Island.</p>
                            <a href="index.php#gallery" class="btn btn-sm btn-light w-100">Lihat Data</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-file-earmark-text-fill display-4 text-info mb-3"></i>
                            <h4>Laporan Misi</h4>
                            <p class="text-muted small">Baca laporan taktis terbaru.</p>
                            <a href="index.php#reports" class="btn btn-sm btn-light w-100">Baca Laporan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-gear-wide-connected display-4 text-danger mb-3"></i>
                            <h4>Kelola Artikel</h4>
                            <p class="text-muted small">Kelola konten artikel di situs web.</p>
                             <a href="kelola_artikel.php" class="btn btn-sm btn-light w-100">Kelola Artikel</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-5 text-center">
                 <a href="index.html" class="btn btn-outline-light">Kembali ke Halaman Utama (Public)</a>
            </div>
        </div>
    </section>

</body>
</html>