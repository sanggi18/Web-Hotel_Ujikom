<?php
session_start();
if(!isset($_SESSION['username'])) {
	header("Location:../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Pemesanan Hotel</title>
  <!-- Framework -->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/button.css">
  <script src="../assets/js/adminlte.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery-3.6.0.min.js"></script>
</head>

<!-- Header -->
<header>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="../index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none ">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <h1 class="display-5 fw-bold lh-1 mb-3">miHoYo Hotel</h1>
          </a>
          <h2>ADMIN&emsp;</h2>
          <ul class="nav nav-pills"> <h2></h2>
            <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Kamar</a></li>
            <li class="nav-item"><a href="fasilitas_kamar.php" class="nav-link">Fasilitas Kamar</a></li>
            <li class="nav-item"><a href="fasilitas_hotel.php" class="nav-link">Fasilitas Hotel</a></li>
          </ul>
        </header>
      </div>
</header>

<div align="center">
  <h5>Welcome Page Admin |  <a href="../logout.php">Logout</a>  |  <a href="../index.php">Lihat Halaman Hotel</a></h5>
  <br>
  <br>
<main>
  <h2>DATA KAMAR</h2>

<div class="mb-md-5 mt-md-3 pb-5">
<table border="3" class="table table-bordered">
  <thead class="table table-dark">
    <tr>
        <td>ID Pemesanan</td>
        <td>Nama Pemesan</td>
        <td>Email</td>
        <td>No Handphone</td>
        <td>Tipe Kamar</td>
        <td>Tanggal Check-in</td>
        <td>Tanggal Check-out</td>
        <td>Jumlah Kamar</td>
        <td>Aksi</td>
    </tr>
</thead>
    <?php
    include '../conn/koneksi.php';
    $query=mysqli_query($koneksi, "SELECT * FROM tbl_pemesanan");
    while ($data=mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td> $data[id_pemesanan] </td>";
        echo "<td> $data[nama_pemesan] </td>";
        echo "<td> $data[email] </td>";
        echo "<td> $data[no_handphone] </td>";
        echo "<td> $data[tipe_kamar] </td>";
        echo "<td> $data[tgl_cekin] </td>";
        echo "<td> $data[tgl_cekout] </td>";
        echo "<td> $data[jumlah_kamar] </td>";
        echo "<td>";
        echo "<a href='../crud/edit_admin.php?id_pemesanan=$data[id_pemesanan]'> Edit</a> |";
        echo "<a href='../crud/hapus_data_admin.php?id_pemesanan=$data[id_pemesanan]'> Hapus</a> ";
        echo "</td>";
    }
    ?>
</table>
<div class="container">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a href="../pesan_admin.php" class="button button5">+</a>
</div>
</div>
</main>