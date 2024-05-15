<?php

  require '../project/dbkoneksi.php';

  if ( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // Cek username
    if( mysqli_num_rows($result) === 1) {
      // Cekpassword
      $row = mysqli_fetch_assoc($result);

      if(password_verify($password, $row["password"])) {
        echo "<script>alert('benar');</script>";
       header("Location: ../Puskesmas/index.php");
        exit;
      }
    }
    $error = true;

  }

//   // Register
//   if(isset($_POST["register"])) {

//     if (registrasi($_POST) > 0 ){
//         echo "<script>
//             alert('user baru telah ditambahkan');
//         </script>";
//     } else {
//         echo mysqli_error($conn);
//     }   
// };

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login AlfiaraMedicalCenter</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Puskesmas/dist/css/adminlte.min.css">
  <style>
    body {
      background-image : url(../assets/img/bg-rs.jpg)!important;
      background-position: -30px -50px;
    }
    .card-body, .card {
      border-radius : 15px;
      box-shadow: 0px 0px 3px black;
      
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../index.html" style="color:white; text-shadow:0px 0px 3px green"><b>Alfiara</b>MedicalCenter</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
        
          <!-- /.col -->
          <div class="col-12">
            <?php if(isset($error)) { ?>
              <p style="font-size:14px; color:red; font-style:italic;">username/Password yang anda masukkan salah</p>
            <?php } ?>
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
        
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../Puskesmas/dist/js/adminlte.min.js"></script>

</body>
</html>