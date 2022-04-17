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
$id_kamar=$_POST['txt_kamar'];
$tipe_kamar=$_POST['txt_tipe'];
$fasilitas_satu=$_POST['txt_fasilitas1'];
$fasilitas_dua=$_POST['txt_fasilitas2'];
$fasilitas_tiga=$_POST['txt_fasilitas3'];
$fasilitas_empat=$_POST['txt_fasilitas4'];
$fasilitas_lima=$_POST['txt_fasilitas5'];
$fasilitas_enam=$_POST['txt_fasilitas6'];
$query = mysqli_query($koneksi, "UPDATE tbl_kamar SET tipe_kamar='$tipe_kamar',fasilitas_satu='$fasilitas_satu',fasilitas_dua='$fasilitas_dua',fasilitas_tiga='$fasilitas_tiga',fasilitas_empat='$fasilitas_empat',fasilitas_lima='$fasilitas_lima',fasilitas_enam='$fasilitas_enam' WHERE id_kamar='$id_kamar'");
?>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">BERHASIL DISIMPAN!</h4>
  <p>Kamu Sudah berhasil untuk mengedit data Kamar Hotel, buka link dibawah untuk melanjutkan</p>
  <hr>
  <p class="alert-link"><a class="alert-link" href="../admin/tampil_admin.php"> Lanjut sini </a></p>
</div>