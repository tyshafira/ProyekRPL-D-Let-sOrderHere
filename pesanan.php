<?php 

	session_start();

	include ('connection.php');
	if(!empty($_POST)){
	
		$id_mejapel = $_SESSION['User'];
		$id_menu = htmlentities(strip_tags($_POST["id_menu"]));
		$bnyk_menu = htmlentities(strip_tags($_POST["jmlh_order"]));

		$cek_pesan1 = "SELECT * FROM `pesan` WHERE id_menu = $id_menu and id_mejapel = $id_mejapel;";
		$query_cek_pesan = mysqli_query($link,$cek_pesan1);
		$row = mysqli_fetch_array($query_cek_pesan);
		 if((mysqli_num_rows($query_cek_pesan) > 0)) {
			$total_order = $row['jumlah_order'] + $bnyk_menu;
			$syntax_pesan = "UPDATE `pesan` SET `jumlah_order`= $total_order WHERE id_menu = $id_menu and id_mejapel = $id_mejapel;";
			$inPesan = mysqli_query($link,$syntax_pesan);

			if($inPesan) {
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
			$syntax_pesan2 = "INSERT INTO `pesan`(`id_mejapel`, `id_pesan`, `id_menu`, `jumlah_order`, `jenis_bayar`) VALUES ('$id_mejapel','','$id_menu','$bnyk_menu','')"; 
			$inPesanan= mysqli_query($link,$syntax_pesan2);

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
		}

	}else {
		die(mysqli_error($link));
	}
 ?>