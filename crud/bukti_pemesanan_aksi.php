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

<!-- Header -->
<header>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="../index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none ">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <h1 class="display-5 fw-bold lh-1 mb-3">miHoYo Hotel</h1>
          </a>
    
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.php" class="nav-link">Bukti Pemesanan</a></li>
          </ul>
        </header>
      </div>
</header>

<div class="mb-md-5 mt-md-3 pb-5">
<table border="4" align="center" class="table table-bordered">
    <tr>
        <td>ID Pemesanan</td>
        <td>Nama Pemesan</td>
        <td>Email</td>
        <td>No Handphone</td>
        <td>Tipe Kamar</td>
        <td>Tanggal Check-in</td>
        <td>Tanggal Check-out</td>
        <td>Jumlah Kamar</td>
    </tr>
    <?php
    include "../conn/koneksi.php";
    $query=mysqli_query($koneksi, "SELECT * FROM tbl_pemesanan ORDER BY id_pemesanan DESC LIMIT 1");
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
        echo "</tr>";
    }
    ?>
</table>
<script>
        window.print();
    </script>