<?php 
$conn = mysqli_connect ("localhost", "root", "", "Perpus");

if ($conn->connect_errno) {
  echo "Koneksi Gagal, silahkan coba lihat DB: " . $conn->connect_error;
  exit();
}

?>