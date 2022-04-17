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

<!-- Header -->
<header>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none ">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <h1 class="display-5 fw-bold lh-1 mb-3">miHoYo Hotel</h1>
          </a>
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="login.php" class="nav-link">Login Page</a></li>
          </ul>
        </header>
      </div>
</header>

<form action="crud/login_aksi.php" method="post">
<div class="container py-5 h-100 ">
<div class="row d-flex justify-content-center align-items-center h-100 ">
<div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
<div class="rounded border shadow-lg">
<div class="card-body p-5 text-center">
              <div class="mb-md-5 mt-md-3 pb-5">
                <h2 class="fw-bold mb-4 text-uppercase">Login</h2>
                <div class="form-outline form-black mb-4">
                <label class="form-label">Username</label>
                  <input type="text" name="username" class="form-control form-control-lg">
                </div>
                <div class="form-outline form-white mb-4">
                  <label class="form-label">Password</label>
                  <input type="password" name="password" class="form-control form-control-lg">
                  </div>
                  <input type="submit" class="btn btn-outline-primary btn-lg px-5" value="Login">
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>