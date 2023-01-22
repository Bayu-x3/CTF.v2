<html lang="en" dir="ltr">
  <head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login Admin</div>
      <form action="" method="post">
        <div class="field">
          <input type="username" name="usr"required>
          <label>Username</label>
        </div>
        <div class="field">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
        <div class="field">
          <input type="submit" name="submit" value="Login">
        </div>
      </form>
    </div>
  </body>
</html>
<?php
session_start();
include '../assets/koneksi.php';
$result = mysqli_query($conn,"SELECT * FROM tbl_users");
if (isset($_SESSION['usr'])) {
    header('Location: index.php');
  }
if (isset($_POST['submit'])) {
  $usr = addslashes($_POST['usr']);
  $password = addslashes($_POST['password']);

  $result = mysqli_query($conn,"SELECT * FROM tbl_admin WHERE 
  usr = '$usr'");
  if( mysqli_num_rows($result) === 1) {
        $_SESSION['usr'] = $usr;
          header("Location: index.php");
          exit;
      }
    }
?>