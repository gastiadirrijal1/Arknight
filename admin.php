<?php
session_start();
include "koneksi.php";

// Cek login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// 1. Ambil data User (Perhatikan tabel 'users')
$u_user = $_SESSION['username'];
$user = $conn->query("SELECT * FROM users WHERE username='$u_user'")->fetch_assoc();

// 2. Hitung Artikel
$jml_artikel = $conn->query("SELECT count(*) as total FROM artikel")->fetch_assoc()['total'];

// 3. Hitung Gallery (Cek kalau tabel belum ada biar ga error fatal)
$q_gal = $conn->query("SELECT count(*) as total FROM gallery");
$jml_gallery = ($q_gal) ? $q_gal->fetch_assoc()['total'] : 0;
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
        .welcome-section {
            padding: 40px 0;
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('bg.jpg'); /* Pastikan ada bg.jpg atau hapus baris ini */
            background-size: cover;
            border-bottom: 2px solid #E60000;
        }
        .profile-pic {
            width: 120px; height: 120px; object-fit: cover;
            border: 4px solid #E60000;
            box-shadow: 0 0 15px rgba(230, 0, 0, 0.5);
        }
        .stat-card {
            background-color: #2C2C2C;
            border: 1px solid #444;
            transition: 0.3s;
        }
        .stat-card:hover { transform: translateY(-5px); border-color: #E60000; }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark bg-black py-3">
        <div class="container">
            <span class="navbar-brand fw-bold mb-0 h1"><i class="bi bi-hexagon-fill text-danger"></i> RHODES ISLAND</span>
            <a href="logout.php" class="btn btn-outline-danger btn-sm">LOGOUT</a>
        </div>
    </nav>

    <section class="welcome-section text-center">
        <div class="container">
            <?php if (!empty($user['foto']) && file_exists($user['foto'])): ?>
                <img src="<?= $user['foto'] ?>" class="rounded-circle profile-pic mb-3">
            <?php else: ?>
                <img src="https://via.placeholder.com/120" class="rounded-circle profile-pic mb-3">
            <?php endif; ?>
            
            <h2 class="fw-bold">Doctor <?= $user['username'] ?></h2>
            <p class="text">Access Level: Administrator</p>
            <a href="profil.php" class="btn btn-sm btn-outline-warning mt-2"><i class="bi bi-gear"></i> Edit Profil</a>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h4 class="mb-4 border-start border-4 border-danger ps-3">Dashboard Overview</h4>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="stat-card p-4 rounded d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="fw-bold display-4 text-danger"><?= $jml_artikel ?></h3>
                            <span class="text text-uppercase">Total Artikel</span>
                        </div>
                        <i class="bi bi-file-earmark-text fs-1 text-secondary"></i>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="stat-card p-4 rounded d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="fw-bold display-4 text-info"><?= $jml_gallery ?></h3>
                            <span class="text text-uppercase">Total Gallery</span>
                        </div>
                        <i class="bi bi-images fs-1 text-secondary"></i>
                    </div>
                </div>
            </div>

            <div class="row mt-5 g-3">
                <div class="col-md-4">
                    <a href="kelola_artikel.php" class="btn btn-dark w-100 py-3 border border-secondary">
                        <i class="bi bi-pencil-square mb-2 d-block fs-4 text-danger"></i> Kelola Artikel
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="kelola_gallery.php" class="btn btn-dark w-100 py-3 border border-secondary">
                        <i class="bi bi-collection mb-2 d-block fs-4 text-info"></i> Kelola Gallery
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="index.php" class="btn btn-dark w-100 py-3 border border-secondary">
                        <i class="bi bi-globe mb-2 d-block fs-4 text-success"></i> Lihat Website
                    </a>
                </div>
            </div>

        </div>
    </section>

    <footer class="text-center py-4 text-muted small border-top border-dark mt-5">
        &copy; 2025 Rhodes Island Neural Network.
    </footer>

</body>
</html>