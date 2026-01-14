<?php
include "koneksi.php";
?>

<table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Konfigurasi Pagination
        $batas = 5; // Jumlah data per halaman
        $halaman = isset($_GET['hlm']) ? (int)$_GET['hlm'] : 1;
        $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

        $previous = $halaman - 1;
        $next = $halaman + 1;

        $data = mysqli_query($conn, "SELECT * FROM gallery");
        $jumlah_data = mysqli_num_rows($data);
        $total_halaman = ceil($jumlah_data / $batas);

        // Query Data dengan Limit
        $sql = "SELECT * FROM gallery ORDER BY tanggal DESC LIMIT $halaman_awal, $batas";
        $hasil = mysqli_query($conn, $sql);
        $no = $halaman_awal + 1;

        while ($row = mysqli_fetch_array($hasil)) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['tanggal'] ?></td>
                <td>
                    <img src="img/<?= $row['gambar'] ?>" width="100" class="img-thumbnail">
                </td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $row['id'] ?>">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $row['id'] ?>">Hapus</a>
                </td>
            </tr>

            <div class="modal fade" id="modalEdit<?= $row['id'] ?>" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Gambar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label>Ganti Gambar (Biarkan kosong jika tetap)</label>
                                    <input type="file" name="gambar" class="form-control">
                                    <small class="text-muted">Gambar saat ini: <?= $row['gambar'] ?></small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" name="simpan" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalHapus<?= $row['id'] ?>" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Konfirmasi Hapus</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <form method="post">
                            <input type="hidden" name="id_hapus" value="<?= $row['id'] ?>">
                            <input type="hidden" name="gambar_hapus" value="<?= $row['gambar'] ?>">
                            <div class="modal-body">
                                Yakin ingin menghapus gambar ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" name="hapus" class="btn btn-danger">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        <?php } ?>
    </tbody>
</table>

<nav>
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" <?php if($halaman > 1){ echo "href='javascript:void(0)' onclick='loadData($previous)'"; } ?>>Previous</a>
        </li>
        <?php 
        for($x = 1; $x <= $total_halaman; $x++){
            ?> 
            <li class="page-item <?php if($halaman == $x) echo 'active'; ?>">
                <a class="page-link" href="javascript:void(0)" onclick="loadData(<?php echo $x; ?>)"><?php echo $x; ?></a>
            </li>
            <?php
        }
        ?>
        <li class="page-item">
            <a class="page-link" <?php if($halaman < $total_halaman) { echo "href='javascript:void(0)' onclick='loadData($next)'"; } ?>>Next</a>
        </li>
    </ul>
</nav>