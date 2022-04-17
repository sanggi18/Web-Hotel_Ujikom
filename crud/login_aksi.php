<link rel="stylesheet" href="assets/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/adminlte.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
<?php
	include '../conn/koneksi.php';
 
	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	$login = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password='$password'");
	$cek = mysqli_num_rows($login);
	 
	if($cek > 0){

          
	$data = mysqli_fetch_assoc($login);

        if($data['level']=="1"){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "1";
		header("location:../admin/");

	}else if($data['level']=="2"){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "2";
            header("location:../resepsionis/tampil_resepsionis.php");
        }else{

		echo "<p align='center'>Login Gagal ! <a href='login.php'> kembali </a> </p>";
}
    }
	else{
		echo "Login Gagal ! <a href='../login.php'> kembali </a>";
}
?>