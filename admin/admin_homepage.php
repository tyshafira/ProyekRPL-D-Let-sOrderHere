<?php
	if(!isset($_COOKIE["username"]))
	{
		header ("location: ../hal_logregis_admin.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>admin homepage</title>
		<link rel="stylesheet" href="css1.css">
	</head>
	
	<body>
	<br>
	 <!--####--MENU NAVIGASI--####-->
	<div class="MainMenu">
		<div class="nav">
		<ul class="topmenu">
			<li><a href="admin_homepage.php">Beranda</a></li>
			<li><a href="blog.html">Daftar Pesanan</a></li>
			<li><a href="categories.html">Informasi Menu</a></li>
			<li><a href="our_product.html">Produk kami</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		<br class="clear">
		</div>
	</div>
		<h2>Wellcome to Admin homepage</h2>
	</body>
	
</html>