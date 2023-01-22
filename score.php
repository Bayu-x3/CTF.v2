<?php
   session_start();
   require 'assets/functions.php';
   $result = mysqli_query($conn,"SELECT * FROM tbl_users ORDER BY poin DESC");
   require 'assets/headBoard.php';
   if (!isset($_SESSION['username'])) {
     header('Location: login.php');
   }
?>
   <body>
   <div class="col-sm-12" >
    <div class="card">
      <div class="card-body">
<table class="table table-striped">
<tr>
    <th>No</th>
    <center><th>Username</th></center>
    <th>Point</th>
</tr>
<?php $i = 1; ?>
<?php while( $row = mysqli_fetch_assoc($result) ): ?>
<tr>
    <td><?= $i ?></td>    
    <td><?= $row["username"]; ?></td>     
    <td><?= $row["poin"]; ?></td> 
 </tr>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

<?php $i++; ?>
<?php endwhile; ?>
        </table>