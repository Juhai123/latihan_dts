<?php
// definisikan koneksi ke database local
$server = "localhost";
$username = "root";
$password = "";
$database = "latihan";

// Koneksi dan memilih database di server
$koneksi = mysqli_connect($server, $username, $password, $database);

//cek koneksi
// if (mysqli_connect_errno()) {
//   echo "Koneksi database mysqli gagal!! : " . mysqli_connect_error();
// }
?>