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
	if(isset($_POST["submit"]))
	{
		$nama_folder="img/adminPhoto";
		$tmp = $_FILES["file_upload"]["tmp_name"];
		$nama_file = $_COOKIE['email'];
		move_uploaded_file($tmp, "$nama_folder/$nama_file");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Settings</title>
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
		<link rel="stylesheet" type="text/css"  href="css/akunSettings.css">
		
		<!-- new -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="../formLogin/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../formLogin/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../formLogin/assets/css/form-elements.css">
        <link rel="stylesheet" href="../formLogin/assets/css/style.css">
        <link rel="stylesheet" href="../formLogin/assets/css/msg.css">
		<link rel="stylesheet" href="css/grs.css">
		
		<link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../formLogin/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../formLogin/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../formLogin/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../formLogin/assets/ico/apple-touch-icon-57-precomposed.png">
	
	</head>
	
	<body>
				
		<!-- Navigation
			==========================================-->
		<nav id="menu" class="navbar navbar-default navbar-fixed-top">
		<div class="container"> 
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand page-scroll" href="adminAccountInformation.php"><img src="img/adminPhoto/<?php echo $_COOKIE['email'];?>" height=30 style="float: left;"><?php echo "&nbsp".$_COOKIE["username"] ?></a> </div>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="adminHomePage.php" class="page-scroll">Home</a></li>
				<li><a href="#about" class="page-scroll">Daftar Pesanan</a></li>
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
		<div class="intro2">
		<br>
		<div class="col-sm-5">
            
			<!-- admin navigation menu -->
	        <br>
			<br>
			<div class="akunSetting">
			<ul>
			    <a title="informasi" href="adminAccountInformation.php">Informasi Akun Anda </a>
			    <a title="select" href="adminChangePhoto.php">Edit Your Photo </a>
			    <a title="password" href="adminChangePassword.php">Change Password </a>
			</ul>
			</div>
			
			<!-- end of admin navigation -->
			
			<div class="form-box" action="#">
               <div class="form-top">
	               <div class="form-top-left">
	                   	<h3>Ubah Photo</h3>
	               </div>
	               <div class="form-top-right">
	                   	<i class="fa fa-photo"></i>
	               </div>
	           </div>
	           <div class="form-bottom">
				
				<!-- form change password -->
				
				    <form role="form" action="adminChangePhoto.php" enctype="multipart/form-data" method="post" class="registration-form">
				       <img src="img/adminPhoto/<?php echo $_COOKIE['email'];?>" height=200>
					   <div class="form-group">
				                   	<label class="sr-only" for="form-password">password</label>
				                   	<input type="file" name="file_upload" class="btn" value=10000000>
				       </div>
					
				                   <button type="submit" name="submit" class="btn">Ubah Photo!</button>
				    </form>
				<!-- end of change password -->
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