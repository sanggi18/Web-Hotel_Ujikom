<?php
  include "conn/koneksi.php";
  ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Pemesanan Hotel</title>
  <!-- Framework -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/adminlte.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
</head>

<!-- Header -->
<header>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none ">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <h1 class="display-5 fw-bold lh-1 mb-3">miHoYo Hotel</h1>
          </a>
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="kamar.php" class="nav-link active" aria-current="page">Kamar</a></li>
            <li class="nav-item"><a href="fasilitas.php" class="nav-link">Fasilitas</a></li>
            <li class="nav-item"><a href="pesan.php" class="nav-link">Pesan</a></li>
          </ul>
        </header>
      </div>
</header>
<br>
<!-- Heroes -->
<div class="heroes"></div>
  <div class="container my-5">
    <div class="row flex-lg-row align-items-center g-5 py-5 rounded-3 border shadow-lg">
      <div class="col-10 col-lg-6">
        <img src="https://telegra.ph/file/d9b92ebfc16d8c6912b18.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Superior Hotel</h1>
        <p class="lead"> Fasilitas Kamar :</p>
        <?php
              include "conn/koneksi.php";
              $query=mysqli_query($koneksi, "SELECT * FROM tbl_kamar WHERE id_kamar ='1' ");
              while ($data=mysqli_fetch_array($query)){
              echo "<li> $data[fasilitas_satu] </li>";
              echo "<li> $data[fasilitas_dua] </li>";
              echo "<li> $data[fasilitas_tiga] </li>";
              echo "<li> $data[fasilitas_empat] </li>";
              echo "<li> $data[fasilitas_lima] </li>";
              }
              ?>
              <p></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="pesan.php" class="btn btn-primary btn-lg px-4 me-md-2">Pesan Sekarang</a>
        </div>
      </div>
    </div>
  </div>
<br>
  <div class="heroes"></div>
  <div class="container my-5">
    <div class="row flex-lg-row-reverse g-5 py-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://telegra.ph/file/829f980b9b3d9655cf9ea.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Deluxe Hotel</h1>
        <p class="lead"> Fasilitas :</p>
        <?php
              include "conn/koneksi.php";
              $query=mysqli_query($koneksi, "SELECT * FROM tbl_kamar WHERE id_kamar ='2' ");
              while ($data=mysqli_fetch_array($query)){
                echo "<li> $data[fasilitas_satu] </li>";
                echo "<li> $data[fasilitas_dua] </li>";
                echo "<li> $data[fasilitas_tiga] </li>";
                echo "<li> $data[fasilitas_empat] </li>";
                echo "<li> $data[fasilitas_lima] </li>";
                echo "<li> $data[fasilitas_enam] </li>";
              }
              ?>
              <p></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="pesan.php" class="btn btn-primary btn-lg px-4 me-md-2">Pesan Sekarang</a>
        </div>
      </div>
    </div>
  </div>