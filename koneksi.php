<?php
$host       = "localhost";
$user       = "ensawirm_arknight";
$pass       = "admin123690";
$database   = "ensawirm_arknight";

$conn = mysqli_connect($host, $user, $pass, $database);


if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>