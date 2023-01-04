<?php 
	session_start();
	
	if(isset($_SESSION['user'])) {
		session_unset();
	}
	//var_dump($_SESSION['user']); exit();

	session_destroy();
	header('location: index.php');
?>