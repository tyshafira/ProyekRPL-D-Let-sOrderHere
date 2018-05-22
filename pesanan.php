<?php 

	session_start();

	include ('connection.php');
	if(!empty($_POST)){
	
		$id_mejapel = $_SESSION['User'];
		$id_menu = htmlentities(strip_tags($_POST["id_menu"]));
		$bnyk_menu = htmlentities(strip_tags($_POST["jmlh_order"]));
		$syntax_pesan = "INSERT INTO `pesan`(`id_mejapel`, `id_pesan`, `id_menu`, `jumlah_order`, `jenis_bayar`) VALUES ('$id_mejapel','','$id_menu','$bnyk_menu','')"; 
		$inPesanan= mysqli_query($link,$syntax_pesan);

		if($inPesanan){
			header("HTTP/1.1 302 Moved Temporarily");
			header("location : index.php#menu-list");
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