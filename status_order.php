<?php 
	session_start();

	include ('connection.php');

	if(isset($_SESSION['status_order']) && $_SESSION['status_order'] == 0) {
		$_SESSION['status_order'] = 1;
	}

	header("Location:index.php");

?>