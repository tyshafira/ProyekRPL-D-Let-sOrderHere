<?php 

	//session_start();

	include ('connection.php');
	if(!empty($_POST)){
	
		$no_meja = htmlentities(strip_tags($_POST["nomormeja"]));
		$syntax= "SELECT * FROM data_meja where no_meja = '$no_meja'";
		$syntax1 = "SELECT * FROM meja_aktif where no_meja_aktif = '$no_meja'";
		$login= mysqli_query($link,$syntax);
		$tes_login = mysqli_query($link,$syntax1);

		if($tes_login) {
			if(mysqli_num_rows($tes_login) == 1) {
				header("HTTP/1.1 302 Moved Temporarily");
				header("location : index.php?gagalmasuk");
				exit();
			}
			else {
				$id = "";
				$syntax_msk = "INSERT INTO meja_aktif VALUES ('$id','$no_meja')";
				$syntax_meja_aktif = mysqli_query($link,$syntax_msk);
				if ($syntax_meja_aktif){
					if(mysqli_num_rows($login) == 1){
						//$_SESSION['Nama'] = "$nama";
						header("HTTP/1.1 302 Moved Temporarily");
						header("location: index.php#menu-list");
						exit();
					}else {
						header("HTTP/1.1 302 Moved Temporarily");
						header("location : index.php?gagallogin");
						exit();
					} 
				}else {
					die(mysqli_error($link));
				}
			}
		}
		else {
			die(mysqli_error($link));
		}
	}
		


?>