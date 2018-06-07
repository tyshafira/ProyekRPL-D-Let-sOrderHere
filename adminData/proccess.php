<?php
	if(!isset($_COOKIE["email"]))
	{
		header ("location: ../formLogin/hal_logregis_admin.php");
	}
?>

<?php
	include ("../../connection.php");
?>

<?php
	$idMenu = $_GET['idMenu'];
	echo $idMenu;
	mysqli_query($link,"delete from menu where id_menu=$idMenu");
	
	header('location: adminUpdateMenu.php');
?>

