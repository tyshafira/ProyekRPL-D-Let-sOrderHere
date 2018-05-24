<?php
	if(!isset($_COOKIE["email"]))
	{
		header ("location: ../formLogin/hal_logregis_admin.php");
	}
?>

<?php
	include ("../../connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Spectrum</title>
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


<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css"  href="css/grs.css">
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="adminSetting.php"><i class="fa fa-play fa-rotate-270"></i> <?php echo $_COOKIE["username"]; ?></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="adminHomePage.php" class="page-scroll">Home</a></li>
        <li><a href="daftarPesanJoin.php" class="page-scroll">Daftar Pesanan</a></li>
        <li><a href="#portfolio" class="page-scroll">Update Menu</a></li>
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

<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <p>Wellcome Admin</p>
          <p>Manage it • settings • Your Future</p>
      </div>
    </div>
  </div>
</header>

<!-- footer -->
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2016 LetOderHere. Designed by <a href="#" rel="nofollow">LetOderHere_template</a></p>
    </div>
  </div>
</div>

</body>
</html>