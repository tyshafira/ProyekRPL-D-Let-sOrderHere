<?php 

	session_start();


	include ('connection.php');

	if(!empty($_POST)) {

		$mejaPel = $_SESSION['User'];
		$jenis = htmlentities(strip_tags($_POST["metode"]));
		$upJenis = "UPDATE `pesan` SET `jenis_bayar`='$jenis' WHERE id_mejapel = '$mejaPel';";
		$syntax_upJenis = mysqli_query($link,$upJenis);

		if($syntax_upJenis) {
		 	header("HTTP/1.1 302 Moved Temporarily");
			header("location : index.php?logOut");
			exit();
		}else {
			die(mysqli_error($link));
			header("HTTP/1.1 302 Moved Temporarily");
			header("location : index.php?gagallogin");
			exit();
		}

	}else {
		die(mysqli_error($link));
	}


	include ('connection.php');

	if(!empty($_POST)) {

		$mejaPel = $_SESSION['User'];
		$jenis = htmlentities(strip_tags($_POST["metode"]));
		$upJenis = "UPDATE `pesan` SET `jenis_bayar`='$jenis' WHERE id_mejapel = '$mejaPel';";
		$syntax_upJenis = mysqli_query($link,$upJenis);

		if($syntax_upJenis) {
		 	header("HTTP/1.1 302 Moved Temporarily");
			header("location : index.php?logOut");
			exit();
		}else {
			die(mysqli_error($link));
			header("HTTP/1.1 302 Moved Temporarily");
			header("location : index.php?gagallogin");
			exit();
		}
	}else {
		die(mysqli_error($link));
	}
 ?>