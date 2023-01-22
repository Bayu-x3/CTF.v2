<?php
session_start();
include '../assets/koneksi.php';
$result = mysqli_query($conn,"SELECT * FROM tbl_users");
if (!isset($_SESSION['usr'])) {
    header('Location: login.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script type="text/javascript">
</script>  
</head>
<body>
    <div class="container">
    <div class="col-sm-12">

    <center>
        <h1>Welcome Admin</h1>
        <h2>List User</h2>
        <form method='POST'>    
        <table class="table table-bordered">
<tr>
    <th>No</th>
    <th>Username</th>
    <th>Password</th>
    <th>Point</th>
    <th class="text-center">Action</th>
</tr>
<?php $i = 1; ?>
<?php while( $row = mysqli_fetch_assoc($result) ): ?>
<tr>
    <td><?= $i ?></td>    
    <td><?= $row["username"]; ?></td>      
    <td><?= $row["password"]; ?></td> 
    <td><?= $row["poin"]; ?></td> 
    <td class="text-center"><a class="btn btn-danger" href="hapus.php?id=<?php echo $row['id'];?>">Delete</a></td>    
</tr>
<?php $i++; ?>
<?php endwhile; ?>
        </table>
        <br>
            <button class="btn btn-primary" name="logout">Logout</button>
        </form>
</center>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</div>
</body>
</html>

<?php
    if(isset($_POST['logout'])){
        session_destroy();
        header('Location:login.php');
    }
?>