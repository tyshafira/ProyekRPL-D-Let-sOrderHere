<?php 

	session_start();

	include ('connection.php');
	if(!empty($_POST)){
	
		$no_meja = htmlentities(strip_tags($_POST["nomormeja"]));
		$syntax= "SELECT * FROM data_meja where no_meja = '$no_meja'";
		$login= mysqli_query($link,$syntax);
		if ($login){

			if(mysqli_num_rows($login) == 1){

			//$_SESSION['Nama'] = "$nama";
			header("HTTP/1.1 302 Moved Temporarily");
			header("location: index.php#menu-list");
			exit();

			} else {
				header("HTTP/1.1 302 Moved Temporarily");
				header("location : index.php?gagallogin");
				exit();
			}
		}else {
			die(mysqli_error($link));
		}
	}


?>