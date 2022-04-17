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
  <script src="../assets/js/adminlte.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery-3.6.0.min.js"></script>
</head>

<div align="center">
	<h2> Welcome | <a href="../logout.php">Logout</a><br><br></h2>

<main>
<div class="px-3 py-2 border-bottom mb-3">
	<div class="d-flex flex-wrap justify-content-center">
    	<form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
    		Cari <input type="text" class="form-group" name="nama_pemesan"> <input type="submit" value="cari">
    	</form>
    <div class="text-end">
	<form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
    	Cari <input type="date" name="tanggal_checkin"> <input type="submit" value="filter">
    </form>
	</div>
	</div>
</div>

<div class="mb-md-5 mt-md-3 pb-5">
<table border="3" class="table table-bordered">
<thead class="table table-dark">
		<td>ID PESANAN</td>
		<td>NAMA PEMESAN</td>
		<td>EMAIL</td>
		<td>NO HANDPHONE</td>
		<td>TIPE KAMAR</td>
		<td>TANGGAL CHECKIN</td>
		<td>TANGGAL CHECKOUT</td>
		<td>JUMLAH KAMAR</td>
	</tr>
</thead>
		<?php 
		if(isset($_GET['nama_pemesan'])){
		$nama_pemesan=$_GET['nama_pemesan'];
		include"../conn/koneksi.php";
		$query=mysqli_query($koneksi,"SELECT * FROM tbl_pemesanan WHERE nama_pemesan LIKE '%$nama_pemesan%'");
		while ($data=mysqli_fetch_array($query)) {
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
		}		
		elseif(isset($_GET['tanggal_checkin'])){
		$filter_tgl=$_GET['tanggal_checkin'];
		include"../conn/koneksi.php";
		$query=mysqli_query($koneksi,"SELECT * FROM tbl_pemesanan WHERE tgl_cekin='$filter_tgl'");
		while ($data=mysqli_fetch_array($query)) {
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
		}		
		else{
		include "../conn/koneksi.php";
		$query=mysqli_query($koneksi,"SELECT * FROM tbl_pemesanan");
		while ($data=mysqli_fetch_array($query)) {
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
		}
		
?>

</table>
</div>
<br>
</body>
</html>