<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Pemesanan Hotel</title>
  <!-- Framework -->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/pesan.css">
  <script src="../assets/js/adminlte.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery-3.6.0.min.js"></script>
</head>

<body>
<form action="tambah_fasilitas_kamar_aksi.php" method="post">
<div class="wrapper rounded bg-white">
    <div class="h3">Form Pemesanan</div>
    <div class="form">
        <div class="row">
            <div class="col-md-12"> <label>ID Kamar</label> <input type="text" class="form-control" name="txt_kamar" readonly> </div>
            <div class="col-md-12"> <label>Tipe Kamar</label> <input type="text" class="form-control" name="txt_tipe"> </div>
            <div class="col-md-12"> <label>Fasilitas 1</label> <input type="text" class="form-control" name="txt_fasilitas1"> </div>
            <div class="col-md-12"> <label>Fasilitas 2</label> <input type="text" class="form-control" name="txt_fasilitas2"> </div>
            <div class="col-md-12"> <label>Fasilitas 3</label> <input type="text" class="form-control" name="txt_fasilitas3"> </div>
            <div class="col-md-12"> <label>Fasilitas 4</label> <input type="text" class="form-control" name="txt_fasilitas4"> </div>
            <div class="col-md-12"> <label>Fasilitas 5</label> <input type="text" class="form-control" name="txt_fasilitas5"> </div>
            <div class="col-md-12"> <label>Fasilitas 6</label> <input type="text" class="form-control" name="txt_fasilitas6"> </div>
            </select> </div>
            <input type="submit" class="btn btn-primary mt-3"></div>
        </div>
    </div>
</div>
</form>
</body>