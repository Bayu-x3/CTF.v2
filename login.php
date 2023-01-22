<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Users Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login Form</div>
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
          <input type="submit" name="submit" value="Login">
        </div>
        <div class="signup-link">Tidak memiliki akun? <a href="registrasi.php">Daftar Sekarang</a></div>
      </form>
    </div>
  </body>
</html>
 
<?php
session_start();
include 'assets/functions.php';
include 'assets/style.php';
echo "<script>
swal('DI BACA!!!', 'Halaman ini adalah halaman khusus untuk Users login, jika anda tidak memiliki akun, sikahkan daftar terlebih dahulu, jika sudah memiliki akun silahkan Login saja', 'info');
</script>";
$isLoggedIn = isset($_SESSION['username']);
if ($isLoggedIn) {
    header('Location: index.php');
}
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query($conn,"SELECT * FROM tbl_users WHERE 
  username = '$username'");

  if( mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if( password_verify($password, $row["password"])) {
        $_SESSION['username'] = $username;
          header("Location: index.php");
          exit;
      }
  }else {
    echo "<script>
swal('Wrong Usermame / Password!!', 'Masukan Username dan Password dengan benar!!', 'error');
</script>";
  }
}
?>