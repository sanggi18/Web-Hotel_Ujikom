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
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.php" class="nav-link">Kamar</a></li>
            <li class="nav-item"><a href="fasilitas_kamar.php" class="nav-link active" aria-current="page">Fasilitas Kamar</a></li>
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
<main>
  <h2>FASILITAS KAMAR</h2>

<div class="mb-md-5 mt-md-3 pb-5">
<table border="3" class="table table-bordered">
  <thead class="table table-dark">
    <tr>
        <td>ID Kamar</td>
        <td>Tipe Kamar</td>
        <td>Fasilitas 1</td>
        <td>Fasilitas 2</td>
        <td>Fasilitas 3</td>
        <td>Fasilitas 4</td>
        <td>Fasilitas 5</td>
        <td>Fasilitas 6</td>
        <td>Aksi</td>
    </tr>
  </thead>
    <?php
    include '../conn/koneksi.php';
    $query=mysqli_query($koneksi, "SELECT * FROM tbl_kamar");
    while ($data=mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td> $data[id_kamar] </td>";
        echo "<td> $data[tipe_kamar] </td>";
        echo "<td> $data[fasilitas_satu] </td>";
        echo "<td> $data[fasilitas_dua] </td>";
        echo "<td> $data[fasilitas_tiga] </td>";
        echo "<td> $data[fasilitas_empat] </td>";
        echo "<td> $data[fasilitas_lima] </td>";
        echo "<td> $data[fasilitas_enam] </td>";
        echo "<td>";
        echo "<a href='../crud/edit_kamar.php?id_kamar=$data[id_kamar]'>Edit</a> |";
        echo "<a href='../crud/hapus_data_kamar.php?id_kamar=$data[id_kamar]'> Hapus</a> ";
        echo "</td>";
    }
    ?>
</table>
<div class="container">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a href="../crud/tambah_fasilitas_kamar.php" class="button button5">+</a>
</div>
</div>
</main>