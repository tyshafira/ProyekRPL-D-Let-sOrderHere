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

		// if ($login){
		// 	if(mysqli_num_rows($login) == 1){
		// 		$_SESSION['User'] = "$no_meja";
		// 		$syntax = "UPDATE `data_meja` SET `status`='Ya' WHERE id_mejapel = '$no_meja';";
		// 		$query_syntax = mysqli_query($link,$syntax);

		// 		if($query_syntax) {
		// 		//	if(mysqli_num_rows($query_syntax) == 1) {
		// 			header("HTTP/1.1 302 Moved Temporarily");
		// 			header("location: index.php#menu-list");
		// 			exit();
		// 			//}
		// 		}
		// 		}else {
		// 			header("HTTP/1.1 302 Moved Temporarily");
		// 			header("location : index.php?gagallogin");
		// 			exit();
		// 		} 
		// }else {
		// 	die(mysqli_error($link));
		// }
	}else {
		die(mysqli_error($link));
	}
	
		// $no_meja = htmlentities(strip_tags($_POST["nomormeja"]));
		// $syntax= "SELECT * FROM data_meja where no_meja = '$no_meja'";
		// $syntax1 = "SELECT * FROM meja_aktif where no_meja_aktif = '$no_meja'";
		// $login = mysqli_query($link,$syntax);
		// $tes_login = mysqli_query($link,$syntax1);

		// if($tes_login) {
		// 	if(mysqli_num_rows($tes_login) == 1) {
		// 		header("HTTP/1.1 302 Moved Temporarily");
		// 		header("location : index.php?gagalmasuk");
		// 		exit();
		// 	}
		// 	else {
		// 		$id = "";
		// 		$syntax_msk = "INSERT INTO meja_aktif VALUES ('$id','$no_meja')";
		// 		$syntax_meja_aktif = mysqli_query($link,$syntax_msk);
		// 		if ($syntax_meja_aktif){
		// 			if(mysqli_num_rows($login) == 1){
		// 				$_SESSION['User'] = "$no_meja";
		// 				header("HTTP/1.1 302 Moved Temporarily");
		// 				header("location: index.php#menu-list");
		// 				exit();
		// 			}else {
		// 				header("HTTP/1.1 302 Moved Temporarily");
		// 				header("location : index.php?gagallogin");
		// 				exit();
		// 			} 
		// 		}else {
		// 			die(mysqli_error($link));
		// 		}
		// 	}
		// }
		// else {
		// 	die(mysqli_error($link));
		// }
?>