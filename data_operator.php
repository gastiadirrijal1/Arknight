<?php
session_start();

// 1. Cek Login (Copy dari admin.php agar aman)
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// 2. Panggil file koneksi database
include 'koneksi.php';

// 3. Ambil data dari tabel operator
$query = "SELECT * FROM operator";
$result = mysqli_query($koneksi, $query);

// Cek jika query error
if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Operator - Rhodes Island</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        body { background-color: #121212; color: white; font-family: 'Roboto', sans-serif; }
        .navbar { border-bottom: 2px solid #E60000; }
        .table-dark { --bs-table-bg: #2C2C2C; --bs-table-border-color: #444; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="admin.php"><i class="bi bi-shield-fill text-danger me-2"></i>RHODES SYSTEM</a>
            <div class="ms-auto">
                <a href="admin.php" class="btn btn-outline-light btn-sm me-2">Kembali ke Dashboard</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="mb-4 text-warning"><i class="bi bi-people-fill"></i> Data Operator</h2>
        
        <div class="card bg-dark border-secondary">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-dark table-hover table-bordered">
                        <thead>
                            <tr class="text-center text-danger">
                                <th>No</th>
                                <th>Nama Operator</th>
                                <th>Kelas (Role)</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // 4. Looping data (Read Data)
                            if (mysqli_num_rows($result) > 0) {
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $no++; ?></td>
                                <td><?php echo htmlspecialchars($row['nama_operator']); ?></td>
                                <td><span class="badge bg-secondary"><?php echo htmlspecialchars($row['kelas']); ?></span></td>
                                <td><?php echo htmlspecialchars($row['deskripsi']); ?></td>
                                <td class="text-center">
                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                                    <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?');"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <?php 
                                } 
                                
                            } else {
                                echo "<tr><td colspan='5' class='text-center'>Belum ada data operator.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>