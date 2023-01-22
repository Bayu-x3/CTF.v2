<?php
   session_start();
   require 'assets/functions.php';
   require 'assets/header.php';
   if (!isset($_SESSION['username'])) {
     header('Location: login.php');
   }
$username = $_SESSION['username'];
$query = "SELECT * FROM tbl_users WHERE username='$username'";
$result = mysqli_query($conn, $query);
$data = mysqli_query($conn,"SELECT * FROM tbl_users");
?>
<?php while( $row = mysqli_fetch_assoc($result) ): ?>
       
        <html>      
      <center>
              <div class="col-sm-12" >
    <div class="card">
      <div class="card-body">
        <center>
        <h3 style=" color: black;">Welcome To CTF <?php echo $_SESSION['username']?></h3>
        <h3 style="color: black;">Information User</h3>
<table class="table table-striped">
  <thead>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Point:</th>
      <td><?= $row["poin"]; ?></td>
    </tr>
    <tr>
      <th scope="row">Ip Address:</th>
      <td><?php echo get_client_ip(); ?></td>
    </tr>
    <tr>
      <th scope="row">Sistem Operasi:</th>
      <td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
    </tr>
    <tr>
      <th scope="row">Browser:</th>
      <td><?php echo get_client_browser(); ?></td>
    </tr>
    <tr>
        <th scope="row">RealTime</th>
        <td>
</center>
</center><?php 
    $tanggal = mktime(date('m'), date("d"), date('Y'));
    echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
    date_default_timezone_set("Asia/Jakarta");
    $jam = date ("H:i:s");
    echo " | Pukul : <b> " . $jam . " " ." </b> ";
    $a = date ("H");
    if (($a>=6) && ($a<=11)) {
        echo " <b>, Selamat Pagi !! </b>";
    }else if(($a>=11) && ($a<=15)){
        echo " , Selamat  Siang !! ";
    }elseif(($a>15) && ($a<=18)){
        echo ", Selamat Sore !!";
    }else{
        echo ", <b> Selamat Malam</b>";
    }
  endwhile;
 ?></td>
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>
<br>
        </center>      
        <b><center><h1>Pilih Tipe</h1></center></b>
        <div class="contentadmin">          
               <a href="challenge/cryptography"><button class="btn-content">Cryptography</button></a>
               <a href="challenge/forensic"><button class="btn-content">Forensic</button></a>
               <a href="challenge/websec"><button class="btn-content">Web Security</button></a>
        </div>        
        <br>
        <form action="" method="post">
        <b><center><h1>Logout</h1></center></b>
        <div class="contentadmin">          
               <button class="btn-content" name="logout">Klik ini</button></a>
        </div></form>
        <br>
            <br>
                <br>        
                    <br>
        </div>
    </body>
</html>
<?php
    if(isset($_POST['logout'])){
        session_destroy();
echo "<script>
window.location = 'login.php';
</script>";
    }
?>