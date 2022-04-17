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
<form action="tambah_fasilitas_hotel_aksi.php" method="post">
<div class="wrapper rounded bg-white">
    <div class="h3">Form Pemesanan</div>
    <div class="form">
        <div class="row">
        <div class="col-md-12"> <label>ID Kamar</label> <input type="text" class="form-control" name="txt_hotel" readonly> </div>
            <div class="col-md-12"> <label>Nama Fasilitas</label> <input type="text" class="form-control" name="txt_fasilitas"> </div>
            <div class="col-md-12"> <label>Keterangan 1</label> <input type="text" class="form-control" name="txt_keterangan1"> </div>
            <div class="col-md-12"> <label>Keterangan 2</label> <input type="text" class="form-control" name="txt_keterangan2"> </div>
            <div class="col-md-12"> <label>Keterangan 3</label> <input type="text" class="form-control" name="txt_keterangan3"> </div>
            <div class="col-md-12"> <label>Keterangan 4</label> <input type="text" class="form-control" name="txt_keterangan4"> </div>    
            </select> </div>
            <input type="submit" class="btn btn-primary mt-3"></div>
        </div>
    </div>
</div>
</form>
</body>