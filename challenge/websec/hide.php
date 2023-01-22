<h1>Masukan password</h1>
<?php
$flag = "FLGx-3{cross_csrf}";
?>
   <?php
	$password = $_POST['password'];
	if ($password == 'pass') {
		echo $flag;
	} else {
		echo '';
	}
?>
<html> 
<!-- 
$password = $_POST['password'];
	if ($password == 'pass') {
		echo $flag;
	} else {
		echo '';
	} -->
    </html>
