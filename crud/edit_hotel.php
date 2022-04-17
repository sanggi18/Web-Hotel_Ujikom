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
$id_hotel= $_GET['id_hotel'];
$query=mysqli_query($koneksi, "SELECT * FROM tbl_hotel WHERE id_hotel=$id_hotel");
$data= mysqli_fetch_array($query);
?>
<form action="edit_hotel_aksi.php" method="post">
<div class="wrapper rounded bg-white">
    <div class="h3">Form Pemesanan</div>
    <div class="form">
        <div class="row">
            <div class="col-md-12"> <label>ID Hotel</label> <input type="text" class="form-control" name="txt_hotel" value="<?php echo $data['id_hotel']; ?>" readonly> </div>
            <div class="col-md-12"> <label>Tipe Kamar</label> <input type="text" class="form-control" name="txt_fasilitas" value="<?php echo $data['nama_fasilitas']; ?>"> </div>
            <div class="col-md-12"> <label>Fasilitas 1</label> <input type="text" class="form-control" name="txt_keterangan1" value="<?php echo $data['keterangan_satu']; ?>"> </div>
            <div class="col-md-12"> <label>Fasilitas 2</label> <input type="text" class="form-control" name="txt_keterangan2" value="<?php echo $data['keterangan_dua']; ?>"> </div>
            <div class="col-md-12"> <label>Fasilitas 3</label> <input type="text" class="form-control" name="txt_keterangan3" value="<?php echo $data['keterangan_tiga']; ?>"> </div>
            <div class="col-md-12"> <label>Fasilitas 4</label> <input type="text" class="form-control" name="txt_keterangan4" value="<?php echo $data['keterangan_empat']; ?>"> </div>    
        </div>
            <input type="submit" class="btn btn-primary mt-3"></div>
</div>
    </div>
</div>
</form>