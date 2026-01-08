<?php
$host       = "localhost";
$user       = "tgimyid_arknight";
$pass       = "admin123690";
$database   = "tgimyid_arknight";

$conn = mysqli_connect($host, $user, $pass, $database);


if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>