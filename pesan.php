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
  <link rel="stylesheet" href="assets/css/pesan.css">
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
            <li class="nav-item"><a href="kamar.php" class="nav-link">Kamar</a></li>
            <li class="nav-item"><a href="fasilitas.php" class="nav-link">Fasilitas</a></li>
            <li class="nav-item"><a href="pesan.php" class="nav-link active" aria-current="page">Pesan</a></li>
          </ul>
        </header>
      </div>
</header>
<body>
<form action="crud/pesan_aksi.php" method="post">
<div class="wrapper rounded bg-white">
    <div class="h3">Form Pemesanan</div>
    <div class="form">
        <div class="row">
            <div class="col-md-12"> <label>ID Pemesanan</label> <input type="text" class="form-control" name="txt_id" readonly> </div>
            <div class="col-md-6 mt-md-0 mt-3"> <label>Nama Pemesan</label> <input type="text" class="form-control" name="txt_nama" required> </div>
            <div class="col-md-6 mt-md-0 mt-3"> <label>Email</label> <input type="email" class="form-control" name="txt_email" required> </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3"> <label>No Handphone</label> <input type="text" class="form-control" name="txt_hp" required> </div>
            <div class="col-md-6 mt-md-0 mt-3"> <label>Tipe Kamar</label>
                <div class="d-flex align-items-center mt-2"> <label class="option"> <input type="radio" name="txt_tipe" value="Superior">Superior <span class="checkmark"></span> </label> <label class="option ms-4"> <input type="radio" name="txt_tipe" value="Deluxe">Deluxe <span class="checkmark"></span> </label> </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-6 mt-md-0 mt-3"> <label>Tanggal Check-in</label> <input type="date" class="form-control" name="txt_cekin" required> </div>
        <div class="col-md-6 mt-md-0 mt-3"> <label>Tanggal Check-out</label> <input type="date" class="form-control" name="txt_cekout" required> </div>
        </div>
        <div class=" my-md-2 my-3"> <label>Jumlah Kamar</label> <select id="sub" name="txt_jumlah" required>
                <option value="" selected hidden>-- Pilihan --</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select> </div>
            <input type="submit" class="btn btn-primary mt-3"></div>
</div>
    </div>
</div>
</form>
</body>