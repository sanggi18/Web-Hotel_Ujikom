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
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
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
          <li class="nav-item"><a href="kamar.php" class="nav-link">Kamar</a></li>
          <li class="nav-item"><a href="fasilitas.php" class="nav-link active" aria-current="page">Fasilitas</a></li>
          <li class="nav-item"><a href="pesan.php" class="nav-link">Pesan</a></li>
        </ul>
      </header>
    </div>
</header>

<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="col-md-12">
      <div class="card">
      <div class="card-body">
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="assets/img/1.jpg" height="450">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/img/2.jpg" height="450">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/img/3.jpg" height="450">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
      </div>
      </div>
     </div>
  </div>
</div>



<div class="album py-5 bg-light">
    <div class="container">

<div class="col-md-12">
  <div class="card-body">
    <h2 class="text-left">Fasilitas Hotel</h2><br>
  </div>
</div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/fasilitas/kolam_renang.jpg" class="bd-placeholder-img card-img-top">
            <div class="card-body">
              <?php
              include "conn/koneksi.php";
              $query=mysqli_query($koneksi, "SELECT * FROM tbl_hotel WHERE id_hotel ='1' ");
              while ($data=mysqli_fetch_array($query)){
                echo "<td> $data[nama_fasilitas]</td>";
                echo "<br>";
                echo "<li> $data[keterangan_satu] </li>";
                echo "<li> $data[keterangan_dua] </li>";
                echo "<li> $data[keterangan_tiga] </li>";
                echo "<li> $data[keterangan_empat] </li>";
              }
              ?>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/fasilitas/taman.jpg" class="bd-placeholder-img card-img-top">
            <div class="card-body">
            <?php
              include "conn/koneksi.php";
              $query=mysqli_query($koneksi, "SELECT * FROM tbl_hotel WHERE id_hotel ='2' ");
              while ($data=mysqli_fetch_array($query)){
                echo "<td> $data[nama_fasilitas]</td>";
                echo "<br>";
                echo "<li> $data[keterangan_satu] </li>";
                echo "<li> $data[keterangan_dua] </li>";
                echo "<li> $data[keterangan_tiga] </li>";
                echo "<li> $data[keterangan_empat] </li>";
              }
              ?>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/fasilitas/tempat_makan.jpg" class="bd-placeholder-img card-img-top">
            <div class="card-body">
            <?php
              include "conn/koneksi.php";
              $query=mysqli_query($koneksi, "SELECT * FROM tbl_hotel WHERE id_hotel ='3' ");
              while ($data=mysqli_fetch_array($query)){
                echo "<td> $data[nama_fasilitas]</td>";
                echo "<br>";
                echo "<li> $data[keterangan_satu] </li>";
                echo "<li> $data[keterangan_dua] </li>";
                echo "<li> $data[keterangan_tiga] </li>";
                echo "<li> $data[keterangan_empat] </li>";
              }
              ?>
              <div class="d-flex justify-content-between align-items-center">
            </div>
          </div>
        </div>
</div>
