<?php 

	session_start();

	include ('connection.php');
	if(!empty($_POST)){

		$no_meja = htmlentities(strip_tags($_POST["nomormeja"]));
		$syntax1 = "SELECT * FROM `data_meja` WHERE no_meja = '$no_meja';";

		$login = mysqli_query($link,$syntax1);
		$row = mysqli_fetch_array($login);
			$status = $row['status'];
			$banding = 'Ya';
			$cek_status = strcmp($status,$banding); //cek_status = 0 -> true

			if($cek_status == 0) {
				header("HTTP/1.1 302 Moved Temporarily");
				header("location : index.php?gagalmasuk");
				exit();
			}else {
				if ($login){
					if(mysqli_num_rows($login) == 1){
						$_SESSION['User'] = "$no_meja";
						$syntax = "UPDATE `data_meja` SET `status`='Ya' WHERE id_mejapel = '$no_meja';";
						$query_syntax = mysqli_query($link,$syntax);

							if($query_syntax) {
								//	if(mysqli_num_rows($query_syntax) == 1) {
								header("HTTP/1.1 302 Moved Temporarily");
								header("location: index.php#menu-list");
								exit();
								//}
							}else {
								header("HTTP/1.1 302 Moved Temporarily");
								header("location : index.php?gagallogin");
								exit();
							}	 
					}else {
						header("HTTP/1.1 302 Moved Temporarily");
						header("location : index.php?gagallogin");
						exit();
					} 
				}else {
					die(mysqli_error($link));
				}
			}
	}else {
		die(mysqli_error($link));
	}
?>