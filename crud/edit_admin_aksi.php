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
$id_pemesanan=$_POST['txt_id'];
$nama_pemesan=$_POST['txt_nama'];
$email=$_POST['txt_email'];
$no_handphone=$_POST['txt_hp'];
$tipe_kamar=$_POST['txt_tipe'];
$tgl_cekin=$_POST['txt_cekin'];
$tgl_cekout=$_POST['txt_cekout'];
$jumlah_kamar=$_POST['txt_jumlah'];
$query = mysqli_query($koneksi, "UPDATE tbl_pemesanan SET nama_pemesan='$nama_pemesan',email='$email',no_handphone='$no_handphone',tipe_kamar='$tipe_kamar',tgl_cekin='$tgl_cekin',tgl_cekout='$tgl_cekout',jumlah_kamar='$jumlah_kamar' WHERE id_pemesanan='$id_pemesanan'");
?>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">BERHASIL DISIMPAN!</h4>
  <p>Kamu Sudah berhasil untuk mengedit data Pemesanan Hotel, buka link dibawah untuk melanjutkan</p>
  <hr>
  <p class="alert-link"><a class="alert-link" href="../admin/tampil_admin.php"> Lanjut sini </a></p>
</div>