<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == 'admin' && $password == 'pass') {
		echo 'FLGx-3{wordpress_def}';
	} else {
		echo 'Salah';
	}
?>
