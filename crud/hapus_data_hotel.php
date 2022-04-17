<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Pemesanan Hotel</title>
  <!-- Framework -->
  <link rel="stylesheet" href="../assets/css/tampil_admin.css">
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <script src="../assets/js/adminlte.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery-3.6.0.min.js"></script>
</head>

<?php
include "../conn/koneksi.php";
$id_hotel=$_GET['id_hotel'];
$query=mysqli_query($koneksi, "DELETE FROM tbl_hotel WHERE id_hotel='$id_hotel'");
?>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">BERHASIL DIHAPUS!</h4>
  <p>Kamu Sudah berhasil untuk menghapus data Kamar Hotel, buka link dibawah untuk melanjutkan</p>
  <hr>
  <p class="alert-link"><a class="alert-link" href="../admin/fasilitas_hotel.php"> Lanjut sini </a></p>
</div>