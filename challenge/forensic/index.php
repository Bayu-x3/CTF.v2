<?php
session_start();
include '../../assets/functions.php';
$isLoggedIn = isset($_SESSION['username']);
if(!$isLoggedIn){
    header('Location:../../login.php');
}
?>  
<?php
 include '../../assets/headChall.php';
 ?>
        <b><center><h1>FORENSIC CHALLENGE</h1></center></b>
        <br>
        <div class="contentadmin">
            <div>                
               <a href="../forensic/chall1.php" style="text-decoration: none;"><button class="btn-content">Level 1 (5 Point)</button></a>
               <a href="../forensic/chall2.php" style="text-decoration: none;"><button class="btn-content">Level 2 (10 Point)</button></a>
               <a href="../forensic/chall3.php" style="text-decoration: none;"><button class="btn-content">Level 3 (17 Point)</button></a>
        </div>        
        <br>
            <br>
                <br>        
                    <br>
        </div>
    </body>
</html>
