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
$id_kamar= $_GET['id_kamar'];
$query=mysqli_query($koneksi, "SELECT * FROM tbl_kamar WHERE id_kamar=$id_kamar");
$data= mysqli_fetch_array($query);
?>
<form action="edit_kamar_aksi.php" method="post">
<div class="wrapper rounded bg-white">
    <div class="h3">Form Pemesanan</div>
    <div class="form">
        <div class="row">
            <div class="col-md-12"> <label>ID Kamar</label> <input type="text" class="form-control" name="txt_kamar" value="<?php echo $data['id_kamar']; ?>" readonly> </div>
            <div class="col-md-12"> <label>Tipe Kamar</label> <input type="text" class="form-control" name="txt_tipe" value="<?php echo $data['tipe_kamar']; ?>"> </div>
            <div class="col-md-12"> <label>Fasilitas 1</label> <input type="text" class="form-control" name="txt_fasilitas1" value="<?php echo $data['fasilitas_satu']; ?>"> </div>
            <div class="col-md-12"> <label>Fasilitas 2</label> <input type="text" class="form-control" name="txt_fasilitas2" value="<?php echo $data['fasilitas_dua']; ?>"> </div>
            <div class="col-md-12"> <label>Fasilitas 3</label> <input type="text" class="form-control" name="txt_fasilitas3" value="<?php echo $data['fasilitas_tiga']; ?>"> </div>
            <div class="col-md-12"> <label>Fasilitas 4</label> <input type="text" class="form-control" name="txt_fasilitas4" value="<?php echo $data['fasilitas_empat']; ?>"> </div>
            <div class="col-md-12"> <label>Fasilitas 5</label> <input type="text" class="form-control" name="txt_fasilitas5" value="<?php echo $data['fasilitas_lima']; ?>"> </div>
            <div class="col-md-12"> <label>Fasilitas 6</label> <input type="text" class="form-control" name="txt_fasilitas6" value="<?php echo $data['fasilitas_enam']; ?>"> </div>       
        </div>
            <input type="submit" class="btn btn-primary mt-3"></div>
</div>
    </div>
</div>
</form>