<?php
	session_start();
	if(isset($_SESSION['name'])) {
		include('index.php');
	}
	print_r($_SESSION);
?>