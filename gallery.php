<?php
session_start();
include "koneksi.php";

// Cek Login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// LOGIC: SIMPAN / EDIT / HAPUS
if (isset($_POST['simpan'])) {
    $tanggal = date("Y-m-d H:i:s");
    $gambar = $_FILES['gambar']['name'];
    $dir = "img/"; // Pastikan folder 'img/' ada
    $tmp = $_FILES['gambar']['tmp_name'];

    // Cek jika ini EDIT (ada ID) atau TAMBAH (tidak ada ID)
    if (isset($_POST['id']) && $_POST['id'] != '') {
        // --- PROSES EDIT ---
        $id = $_POST['id'];
        
        // Jika upload gambar baru
        if ($gambar != "") {
            // Hapus gambar lama
            $q_lama = mysqli_query($conn, "SELECT gambar FROM gallery WHERE id = $id");
            $data_lama = mysqli_fetch_array($q_lama);
            if (file_exists($dir . $data_lama['gambar'])) {
                unlink($dir . $data_lama['gambar']);
            }
            // Upload baru
            move_uploaded_file($tmp, $dir . $gambar);
            $simpan = mysqli_query($conn, "UPDATE gallery SET gambar = '$gambar', tanggal = '$tanggal' WHERE id = '$id'");
        } else {
            // Jika tidak ganti gambar, update tanggal saja (opsional)
            $simpan = mysqli_query($conn, "UPDATE gallery SET tanggal = '$tanggal' WHERE id = '$id'");
        }
    } else {
        // --- PROSES TAMBAH BARU ---
        if ($gambar != "") {
            move_uploaded_file($tmp, $dir . $gambar);
            $simpan = mysqli_query($conn, "INSERT INTO gallery (gambar, tanggal) VALUES ('$gambar', '$tanggal')");
        }
    }

    if ($simpan) {
        echo "<script>alert('Data Berhasil Disimpan'); document.location='gallery.php';</script>";
    } else {
        echo "<script>alert('Gagal Simpan'); document.location='gallery.php';</script>";
    }
}

if (isset($_POST['hapus'])) {
    $id = $_POST['id_hapus'];
    $gambar = $_POST['gambar_hapus'];
    
    if (file_exists("img/" . $gambar)) {
        unlink("img/" . $gambar);
    }
    
    $hapus = mysqli_query($conn, "DELETE FROM gallery WHERE id = '$id'");
    if ($hapus) {
        echo "<script>alert('Data Berhasil Dihapus'); document.location='gallery.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Kelola Gallery - Rhodes Island</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="p-5">
    <div class="container">
        <h2 class="mb-4">Manajemen Gallery</h2>
        <div class="d-flex justify-content-between mb-3">
            <a href="admin.php" class="btn btn-secondary">Kembali ke Dashboard</a>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
                <i class="bi bi-plus-circle"></i> Tambah Gambar
            </button>
        </div>

        <div id="tampil_data"></div>

    </div>

    <div class="modal fade" id="modalTambah" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Gambar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Pilih Gambar</label>
                            <input type="file" name="gambar" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            loadData();
        });

        function loadData(page){
            $.ajax({
                url: 'gallery_data.php',
                type: 'get',
                data: {hlm: page},
                success: function(data){
                    $('#tampil_data').html(data);
                }
            });
        }
        
        // Fungsi untuk menangani pagination klik
        $(document).on('click', '.halaman', function(){
            var page = $(this).attr("id");
            loadData(page);
        });
    </script>
</body>
</html>