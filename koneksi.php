<?php
$namaserver = "localhost";
$username = "root";
$password = "";
$database = "db_akademik";
// Buat Koneksi
$conn = new mysqli($namaserver, $username, $password, $database);
// Periksa Koneksi
if ($conn->connect_error) {
 die("Koneksi Gagal: " . $kon->connect_error);
}
// echo "Koneksi Berhasil";
?>