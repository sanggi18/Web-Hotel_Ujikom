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
$txt_nama=$_POST['txt_nama'];
$txt_email=$_POST['txt_email'];
$txt_hp=$_POST['txt_hp'];
$txt_tipe=$_POST['txt_tipe'];
$txt_cekin=$_POST['txt_cekin'];
$txt_cekout=$_POST['txt_cekout'];
$txt_jumlah=$_POST['txt_jumlah'];
$query=mysqli_query($koneksi, "INSERT INTO tbl_pemesanan (nama_pemesan,email,no_handphone,tipe_kamar,tgl_cekin,tgl_cekout,jumlah_kamar) VALUES ('$txt_nama','$txt_email','$txt_hp','$txt_tipe','$txt_cekin','$txt_cekout','$txt_jumlah')");
?>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">BERHASIL !</h4>
  <p>Kamu Sudah berhasil untuk menginput data Pemesanan Hotel, buka link dibawah untuk melanjutan mencetak bukti</p>
  <hr>
  <p class="alert-link"><a class="alert-link" href="bukti_pemesanan.php"> Lanjut sini </a></p>
</div>