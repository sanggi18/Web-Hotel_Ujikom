<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Pemesanan Hotel</title>
  <!-- Framework -->
  <link rel="stylesheet" href="../assets/css/tampil_admin.css">
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <script src="../assets/js/adminlte.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery-3.6.0.min.js"></script>
</head>

<?php
include "../conn/koneksi.php";
$id_pemesanan= $_GET['id_pemesanan'];
$query=mysqli_query($koneksi, "SELECT * FROM tbl_pemesanan WHERE id_pemesanan=$id_pemesanan");
$data= mysqli_fetch_array($query);
?>
<form action="edit_admin_aksi.php" method="post">
<div class="wrapper rounded bg-white">
    <div class="h3">Form Pemesanan</div>
    <div class="form">
        <div class="row">
            <div class="col-md-12"> <label>ID Pemesanan</label> <input type="text" class="form-control" name="txt_id" value="<?php echo $data['id_pemesanan']; ?>" readonly> </div>
            <div class="col-md-6 mt-md-0 mt-3"> <label>Nama Pemesan</label> <input type="text" class="form-control" name="txt_nama" value="<?php echo $data['nama_pemesan']; ?>" required> </div>
            <div class="col-md-6 mt-md-0 mt-3"> <label>Email</label> <input type="email" class="form-control" name="txt_email" value="<?php echo $data['email']; ?>" required> </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3"> <label>No Handphone</label> <input type="text" class="form-control" name="txt_hp" value="<?php echo $data['no_handphone']; ?>" required> </div>
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