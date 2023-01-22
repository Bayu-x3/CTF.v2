<?php
include '../assets/koneksi.php';

$id = $_GET['id'];

$del = mysqli_query($conn,"DELETE FROM tbl_users WHERE id = '$id' ");

if(mysqli_affected_rows($conn) > 0) {
 echo "<script>
 alert('Data berhasil di hapus');
 document.location.href= 'index.php';
 </script>";
} else {
 echo "<script>
 alert('Gagal');
 document.location.href= 'index.php';
 </script>";
}
?>