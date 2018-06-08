<?php
	if(!isset($_COOKIE["email"]))
	{
		header ("location: ../formLogin/hal_logregis_admin.php");
	}
?>

<?php
	include ("../../connection.php");
	$result87 = mysqli_query($link, "select count(*) from admin where img='$_COOKIE[email]'");
	$data87   = mysqli_fetch_row($result87);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Project RPL</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">

 <!--tes tulisan aja-->
 <link href="https://fonts.googleapis.com/css?family=Kaushan+Scriollapse: collapse; width: 500px; height: 120px;pt|Lobster|Modern+Antiqua|Dancing+Script" rel="stylesheet">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css"  href="css/grs.css">
<link rel="stylesheet" type="text/css"  href="css/update.css">

		<style>
				img {
				border-radius: 50%;
					}
		</style>
	</head>


	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<!-- Navigation
		==========================================-->
	<nav id="menu" class="navbar navbar-default navbar-fixed-top">
	<div class="container"> 
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
		<a  href="adminAccountInformation.php"><img src="img/adminPhoto/<?php if($data87[0]==="1"){ echo $_COOKIE['email'];} else {echo "default_img.png";}?>" style="width:45px" style="float: left;"><?php echo "&nbsp".$_COOKIE["username"] ?></a></div>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="adminHomePage.php" class="page-scroll">Home</a></li>
			<li><a href="adminDaftarPesanan.php" class="page-scroll">Daftar Pesanan</a></li>
			<li><a href="tambahMenu.php" class="page-scroll">Add Menu</a><li>
			<li><a href="adminUpdateMenu.php" class="page-scroll">Delete Menu</a><li>
			<li><a href="../logout.php">Logout</a></li>
		</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<div class="grs">
		<p>&nbsp </p>
	</div>
	<!-- /.container-fluid -->
	</nav>
	<br><br><br><br>
	
	<!-- Header -->
	<header id="header">
	<div class="intro tombol">
	<div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <div class="row">
            <h1 class="logo-name">Hapus Menu</h1>
            
		
	   <?php
       $result = mysqli_query($link, "SELECT * FROM menu");
	   ?>
		
	   <?php
	   $i=0;
	   while ($data = mysqli_fetch_assoc($result) )
       {$i++;
			echo "<i>$i</i>";
			echo "<a>$data[nama_menu]</a>";
			echo "<a>Rp. $data[harga_menu]</a>";
			echo "<button onclick=\"window.location.href = 'proccess.php?idMenu=$data[id_menu]';\">Delete</button><br><br><br><br>";
	   }	
		?>

			</div>
        </div>
      </div>
    </div>
  </div>
 </div>
</header>
	
	<!-- footer -->
	<div id="footer">
	<div class="container text-center">
		<div class="fnav">
		<p>Copyright &copy; 2018 LetOderHere. Designed by <a href="#" rel="nofollow">LetOderHere_template</a></p>
		</div>
	</div>
	</div>
	
	</body>
</html>