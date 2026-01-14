<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}

$username = $_SESSION['username'];
// Hati-hati: Tabel temanmu namanya 'users' (jamak)
$data = $conn->query("SELECT * FROM users WHERE username = '$username'")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pass = $_POST['password'];
    $foto = $_FILES['foto']['name'];

    // Update Password (MD5)
    if (!empty($pass)) {
        $pass_md5 = md5($pass);
        $conn->query("UPDATE users SET password = '$pass_md5' WHERE username = '$username'");
    }

    // Update Foto
    if ($foto != "") {
        $target = "img/" . basename($foto);
        move_uploaded_file($_FILES['foto']['tmp_name'], $target);
        $conn->query("UPDATE users SET foto = '$target' WHERE username = '$username'");
    }
    
    echo "<script>alert('Profil berhasil diupdate!'); window.location='profil.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Profil Doktah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>body { background: #121212; color: white; }</style>
</head>
<body class="container p-5">
    <h2>Profil Administrator (Doctor)</h2>
    <div class="card bg-dark text-white border-secondary p-4 mt-3">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" class="form-control bg-secondary text-white" value="<?= $data['username'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label>Ganti Password</label>
                <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak ingin ganti">
            </div>
            <div class="mb-3">
                <label>Foto Profil</label>
                <input type="file" name="foto" class="form-control bg-secondary text-white">
            </div>
            
            <div class="mb-3">
                <p>Foto Saat Ini:</p>
                <?php if($data['foto']): ?>
                    <img src="<?= $data['foto'] ?>" width="150" class="rounded-circle border border-warning">
                <?php else: ?>
                    <p class="text-muted">Belum ada foto.</p>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
            <a href="admin.php" class="btn btn-outline-light">Kembali</a>
        </form>
    </div>
</body>
</html>