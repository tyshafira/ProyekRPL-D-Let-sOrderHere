
<!DOCTYPE html>

<?php 
include "connection.php"
?>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Let's Order Here</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>-->
</head>

<body>
	<!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            
            <a href="#event">History</a>
            <a href="#menu-list">Menu</a>
            <a href="#">Your Order</a>
            <a href="#">Admin</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">Let's Order Here</h1>
            <h2>Enjoy your lifestyle & have fun with your coffee.</h2>
            <h4>Silahkan login dengan input nomor meja Anda!</h4>
            <p><a href="https://free-template.co/" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal" data-target="#myModal">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->

<!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h">History</h1>
            </div>
              <div class="col-md-12" style="padding-bottom:60px;">
              <div class="item active left">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <?php 
                  $syntax="SELECT nama_menu, deskripsi, gambar FROM menu Limit 16";
                  $data= mysqli_query($link, $syntax);
                  if ($data){
                  $cnt=0;
                  while ($row=mysqli_fetch_assoc($data)){
                  $nama_menu=$row["nama_menu"];
                  $deskripsi=$row["deskripsi"];
                  $gambar=$row["gambar"];
                ?>

            <div class="item<?php if($cnt==0){ echo " active";} $cnt++; ?>">   <!-- untuk yg php myadminnya -->
              <div class="col-md-6 col-sm-6 left-images box_content">
                <img src="img/<?php echo $gambar; ?>" class="img-responsive ">
                  </div>
                    <div class="col-md-6 col-sm-6 details-text">
                      <div class="content-holder">
                       <h2><?php echo $nama_menu; ?></h2>
                        <p><?php echo $deskripsi; ?></p>

                            <address>
                              <strong>Tempat: </strong>
                              Jalan T. Iskandar Muda No.13-14, Iemasen Ulee Kareng, Ulee Kareng, Ceurih, Ulee Kareng, Kota Banda Aceh, Aceh 24411
                              <br>
                              <strong>Waktu: </strong>
                              07:30pm
                            </address>
                            
                 <!--<a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>-->
                </div>
              </div>
            </div>

                  <?php 
                     }
                    }
                  ?>  

             <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
           </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!--/ event -->


  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Menu List</h1>
          <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
            <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p>
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
      
            <li><a class="filter" data-filter=".makanan">Makanan</a></li>
            <li><a class="filter" data-filter=".minuman">Minuman</a></li>
            <li><a class="filter" data-filter=".coffee">Coffee</a></li>
            
          </ul>
        </div>

    
        <div id="menu-wrapper">
    
       <?php
       $result = mysqli_query($link, "SELECT * FROM menu WHERE jenis_menu=1");

    while ($data = mysqli_fetch_assoc($result) )
       {
          echo "<div class=\"makanan menu-restaurant\">";
           echo "<span class=\"clearfix\">";
              echo "<a class=\"menu-title\" href=\"#\" data-meal-img=\"assets/img/restaurant/rib.jpg\">$data[nama_menu]</a>";
              echo "<span style=\"left: 166px; right: 44px;\" class=\"menu-line\"></span>";
              echo "<span class=\"menu-price\">$data[harga_menu]</span>";
           echo  "</span>";
            echo "<span class=\"menu-subtitle\">Neque porro quisquam est qui dolorem</span>";
       
      

        echo "<div class=\"col-md-12  text-right\" id=\"menu-flters\">";
          echo "<ul>";
            echo "<li><a class=\"filter\" data-filter=\".tambah\">Add</a></li>" ; 
          echo "</ul>";
         echo "</div>";
            echo "</div>";
        }

        $result = mysqli_query($link, "SELECT * FROM menu WHERE jenis_menu=2");

    while ($data = mysqli_fetch_assoc($result) )
       {
          echo "<div class=\"minuman menu-restaurant\">";
           echo "<span class=\"clearfix\">";
              echo "<a class=\"menu-title\" href=\"#\" data-meal-img=\"assets/img/restaurant/rib.jpg\">$data[nama_menu]</a>";
              echo "<span style=\"left: 166px; right: 44px;\" class=\"menu-line\"></span>";
              echo "<span class=\"menu-price\">$data[harga_menu]</span>";
           echo  "</span>";
            echo "<span class=\"menu-subtitle\">Neque porro quisquam est qui dolorem</span>";
       
      

        echo "<div class=\"col-md-12  text-right\" id=\"menu-flters\">";
          echo "<ul>";
            echo "<li><a class=\"filter\" data-filter=\".tambah\">Add</a></li>" ; 
          echo "</ul>";
         echo "</div>";
            echo "</div>";
        }
        ?>
          
      
      </div>
    </div>
  </section>
  <!--/ menu -->

  <!-- Modal login -->
    <div class="modal fade" id="myModal">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3>Input Nomor Meja</h3>
					</div>
					<div class="modal-body">
						<form action="login.php" id="meja" method="post">
							<div class="form-group text-center">
								<label for="nomenu">Meja</label>
								<select id="nomeja" name="nomormeja" class="form-control">
									<option value=null disabled selected>Nomor Meja</option>
									<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option>
								</select>
							</div>
							<div class="form-group text-center">
								<button type="submit" class="btn btn-primary" name="submit">Pilih</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	<!-- End Modal login -->	



  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

  <?php
      if(isset($_GET["gagallogin"])){
        echo "<script>
          alert('data yang dimasukkan salah');

        </script>";
      } 
    ?>

    <?php
      if(isset($_GET["gagalmasuk"])){
        echo "<script>
          alert('data yang diinputkan sedang digunakan!');

        </script>";
      } 
    ?>

</body>
</html>