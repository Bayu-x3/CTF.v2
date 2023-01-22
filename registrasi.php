<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Users Register</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Regis Form</div>
      <form action="" method="post">
        <div class="field">
          <input type="username" name="username"required>
          <label>Username</label>
        </div>
        <div class="field">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
        <div class="field">
          <input type="submit" name="submit" value="Regis">
        </div>
        <div class="signup-link">Sudah memiliki akun? <a href="login.php">Login Sekarang</a></div>
      </form>
    </div>
  </body>
</html>
<?php 
require 'assets/functions.php';
require 'assets/style.php';
if(isset($_POST["submit"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('Success Regis');
        window.location = 'login.php';
        </script>";
        
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $query = "UPDATE tbl_users SET poin = + 0 WHERE username = '$username'";
        $update_poin = mysqli_query($conn, $query);
    } else {
      echo "<script>
      swal('Failed to regis!!', 'Tolong periksa lagi', 'error');
      </script>";
    }
}
