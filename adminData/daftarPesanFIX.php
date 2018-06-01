<?php
  if(!isset($_COOKIE["email"]))
  {
    header ("location: ../formLogin/hal_logregis_admin.php");
  }

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

 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">

 <!--tes tulisan aja-->
 <link href="https://fonts.googleapis.com/css?family=Kaushan+Scriollapse: collapse; width: 500px; height: 120px;pt|Lobster|Modern+Antiqua|Dancing+Script" rel="stylesheet">


<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css"  href="css/grs.css">

<!-- current page style -->
<style>
  table {border-collapse: collapse; width: 500px; height: 120px;}
  tr, td {border: 1px;}
table, th, td {
    border: 1px solid black;
}
th, td {
    padding: 5px;
    text-align: left;
    background-color: white;
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
      <a class="navbar-brand page-scroll" href="adminSetting.php"><i class="fa fa-play fa-rotate-270"></i> <?php echo $_COOKIE["username"]; ?></a> </div>
    
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
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <div class="row">
            <h1 class="">Daftar Pesanan</h1>

            <div class="col-sm-12">
              <?php
                    $sql = 'SELECT DISTINCT id_mejapel FROM pesan';
                    $result = $link->query($sql);

                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        $sql_meja = 'SELECT * FROM data_meja WHERE id_mejapel = ' . $row['id_mejapel'];
                        $q_meja = $link->query($sql_meja);
                        $meja = $q_meja->fetch_assoc();

                        $sql_pesan = 'SELECT id_menu, jumlah_order FROM pesan WHERE id_mejapel = ' . $meja['id_mejapel'];
                        $q_pesan = $link->query($sql_pesan);
                        ?>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="media d-block mb-4 text-center ftco-media ftco-animate">
                            <div class="media-body p-md-5 p-4">

                              <h5 class="mt-0 h4">Meja <?php echo $meja['no_meja']; ?></h5>
                              <p class="mb-4">
                                <table style="width:100%">
                                  <thead>
                                    <tr>
                                      <th>ID MENU</th>
                                      <th>JUMLAH</th>
                                    </tr>
                                  </thead>
                                  <?php 
                                    while($pesan = $q_pesan->fetch_assoc()){
                                      echo "<tr>";
                                      echo "<td>" . $pesan['id_menu'] . "</td>";
                                      echo "<td>" . $pesan['jumlah_order'] . "</td>";
                                      echo "</tr>";
                                    }
                                  ?> 
                                </table>
                              </p>
                              <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Bayar</a></p>
                            </div>
                          </div>
                        </div>

                        <?php
                      }

                    } 
                    else {
                        echo "<p>Tidak ada data</p>";
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
      <p>Copyright &copy; 2016 LetOderHere. Designed by <a href="#" rel="nofollow">LetOderHere_template</a></p>
    </div>
  </div>
</div>

</body>
</html>