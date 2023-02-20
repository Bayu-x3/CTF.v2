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
        <b><center><h1>WEBSEC CHALLENGE</h1></center></b>
        <br>
        <div class="contentadmin">
            <div>                
               <a href="../websec/chall1.php" style="text-decoration: none;"><button class="btn-content">Level 1 (7 Point)</button></a>
               <a href="../websec/chall2.php" style="text-decoration: none;"><button class="btn-content">Level 2 (12 Point)</button></a>
               <a href="../websec/chall3.php" style="text-decoration: none;"><button class="btn-content">Level 3 (18 Point)</button></a>
        </div>        
        <br>
            <br>
                <br>        
                    <br>
        </div>
    </body>
</html>
