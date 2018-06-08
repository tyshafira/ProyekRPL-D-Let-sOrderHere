<?php

include ("../../connection.php");
$result87 = mysqli_query($link, "select count(*) from admin where img='$_COOKIE[email]'");
  $data87   = mysqli_fetch_row($result87);

if(isset($_POST['tambahMenu'])){

	$nama_menu =$_POST ['nama_menu'];
	$jenis_menu =$_POST ['jenis_menu'];
	$deskripsi =$_POST ['deskripsi'];
	$harga_menu =$_POST ['harga_menu'];
	$gambar =$_POST ['gambar'];


    // menyiapkan query
    $query = "INSERT INTO menu ( nama_menu, jenis_menu, deskripsi, harga_menu, gambar) 
            VALUES ( '$nama_menu', $jenis_menu, '$deskripsi', $harga_menu, '$gambar')";
	
    //$stmt = $link->prepare($sql);
	$result = mysqli_query($link, $query);

    if($result) header("Location: adminHomePage.php");
	else{ echo $result;
		  echo $nama_menu."<br>";
		  echo $jenis_menu."<br>";
		  echo $deskripsi."<br>";
		  echo $harga_menu."<br>";
		  echo $gambar."<br>";
	return;}
	mysqli_close($link);
}

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
      <a  href="adminAccountInformation.php"><img src="img/adminPhoto/<?php if($data87[0]==="1"){ echo $_COOKIE['email'];} else {echo "default_img.png";}?>" style="width:45px" style="float: left;"><?php echo "&nbsp".$_COOKIE["username"] ?></a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="adminHomePage.php" class="page-scroll">Home</a></li>
        <li><a href="adminjoinmodal.php" class="page-scroll">Daftar Pesanan</a></li>
        <li><a href="tambahMenu.php" class="page-scroll">Add Menu</a><li>
        <li><a href="adminUpdateMenu.php" class="page-scroll">delete Menu</a><li>
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
          <div class="row">
            <h1 class="logo-name">Tambah Menu</h1>
            
<body class="bg-light">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="adminHomePage.php">Laman Admin</a>
   <form action="tambahMenu.php" method="POST">

            
			
            <div class="form-group">
                <label for="nama_menu">Nama Menu</label>
                <input class="form-control" type="text" name="nama_menu" placeholder="nama menu" />
            </div>

            <div class="form-group">
                <label for="jenis_menu">Jenis Menu</label>
                <input class="form-control" type="number" name="jenis_menu" placeholder="jenis menu" />
            </div>

           <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input class="form-control" type="text" name="deskripsi" placeholder="deskripsi" />
            </div>

            <div class="form-group">
                <label for="harga_menu">Harga Menu</label>
                <input class="form-control" type="number" name="harga_menu" placeholder="harga menu" />
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input class="form-control" type="file" name="gambar" />
            </div>


            <input type="submit" class="btn btn-success btn-block" name="tambahMenu" value="Tambah" />

        </form>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="img/" />
        </div>

    </div>
</div>
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
      <p>Copyright &copy; 2016 LetOderHere. Designed by <a href="#" rel="nofollow">LetOderHere_template</a></p>
    </div>
  </div>
</div>

</body>
</html>