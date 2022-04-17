<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Pemesanan Hotel</title>
  <!-- Framework -->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <script src="../assets/js/adminlte.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery-3.6.0.min.js"></script>
</head>

<?php
include "../conn/koneksi.php";
$id_hotel=$_POST['txt_hotel'];
$nama_fasilitas=$_POST['txt_fasilitas'];
$keterangan_satu=$_POST['txt_keterangan1'];
$keterangan_dua=$_POST['txt_keterangan2'];
$keterangan_tiga=$_POST['txt_keterangan3'];
$keterangan_empat=$_POST['txt_keterangan4'];
$query=mysqli_query($koneksi, "INSERT INTO tbl_hotel (nama_fasilitas,keterangan_satu,keterangan_dua,keterangan_tiga,keterangan_empat) VALUES ('$nama_fasilitas','$keterangan_satu','$keterangan_dua','$keterangan_tiga','$keterangan_empat')");
?>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">BERHASIL !</h4>
  <p>Kamu Sudah berhasil untuk menginput data Pemesanan Hotel, buka link dibawah untuk melanjutan mencetak bukti</p>
  <hr>
  <p class="alert-link"><a class="alert-link" href="../admin/fasilitas_hotel.php"> Lanjut sini </a></p>
</div>