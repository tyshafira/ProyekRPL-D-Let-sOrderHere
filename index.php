<?php 
include 'connection.php';
session_start();
?>

<?php
      //logout
    if(isset($_GET['logOut'])) {
      $meja_pel = (int)$_SESSION['User'];
      $del_mejaAktif = "UPDATE `data_meja` SET `status`='Tidak' WHERE id_mejapel = '$meja_pel';";
      $syntax_del = mysqli_query($link,$del_mejaAktif);
      if($syntax_del){
          session_destroy();
          unset($_SESSION['User']);
          header('location : index.php');
      }
      else{
          die(mysqli_error($link));
      }
    }  
?>


<!DOCTYPE html>
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
            <!--<a href="#myorder">Your Order</a>-->
            <?php
            if(isset($_SESSION['User'])){
              echo "<a href=\"#myorder\">Your Order</a>";
            }

            ?>
            <a href="admin/formLogin/hal_logregis_admin.php">Admin</a>
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
            <!--<li><a class="filter" data-filter=".coffee">Coffee</a></li>-->
            <p>Selesai Order? <a href="index.php#myorder">Klik disini!</a></p>

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
            echo "<li><a class=\"filter btn-addorder\" idMenu=\"$data[id_menu]\" nmMenu=\"$data[nama_menu]\" data-filter=\".tambah\" data-toggle=\"modal\" data-target=\"#modal_menu\">Add</a></li>" ; 
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
            echo "<li><a class=\"filter btn-addorder\" idMenu=\"$data[id_menu]\" nmMenu=\"$data[nama_menu]\" data-filter=\".tambah\" data-toggle=\"modal\" data-target=\"#modal_menu\">Add</a></li>" ; 
          echo "</ul>";
         echo "</div>";
            echo "</div>";
        }
        ?>
          
      
      </div>
    </div>
  </section>
  <!--/ menu -->

  <!-- myorder -->
  <?php if (isset($_SESSION['User'])) : ?>
  <section id="myorder" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">Your Order</h1>
          <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
            <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p>
        </div>
      </div>
      <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Opening Hours</h4>
              <p class="light-blue regular alt-p"> Monday to Friday 09.00 - 24:00</p>
              <p class="light-blue regular alt-p">
                Friday and Sunday 08:00 - 03.00
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8">
          <form action="" method="post" role="form" class="contactForm">
            <div id="sendmessage">Your request has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
                      <div class="form-group label-floating is-empty">
                        <?php $mejaSkrg = $_SESSION['User']; ?>
                        <h3 id="mejaAktif" class="header-b"><b><?php echo "Meja Nomor $mejaSkrg"; ?></b></h3>
                        <div class="validation"></div>
                      </div>
                    </div>

            <!--- Proses Penarikan data pemesanan-->
            <?php 
              $meja = $_SESSION['User'];
              $ambil = "SELECT m.nama_menu, p.jumlah_order, m.harga_menu from menu m join pesan p where m.id_menu = p.id_menu and p.id_mejapel = '$meja';";
                $query = mysqli_query($link,$ambil);

            ?>
            <div class="col-md-12 contact-form">
              <div class="form-group label-floating is-empty">
                <table class="table table-striped">
                    <thead>
                      <th class="text-center">Nama Menu</th>
                      <th class="text-center">Jumlah Pesanan</th>
                      <th class="text-center">Harga Menu</th>
                    </thead>
                    <tbody>
                      <?php if(mysqli_num_rows($query)) {?>
                        <?php while($row = mysqli_fetch_array($query)) {?>
                          <tr>
                            <td class="text-center"><?php echo $row['nama_menu'] ?></td>
                            <td class="text-center"><?php echo $row['jumlah_order'] ?></td>
                            <td class="text-center"><?php echo $row['harga_menu'] ?></td>
                          </tr>
                        <?php } ?>
                      <?php } ?>
                    </tbody>
                  </table>
                  <!-- end proses --> 
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
                <button class="contacts-btn" data-toggle="modal" data-target="#myconfirm">Order Now!</button>
                        <button class="contacts-btn" data-toggle="modal" data-target="#mypayment">FINISH</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <!-- / myorder -->

  <!-- footer -->
  <footer class="footer text-center">
          <div class="footer-top">
            <div class="row">
              <div class="col-md-offset-3 col-md-6 text-center">
                <div class="widget">
                  <h4 class="widget-title">Let's Order Here</h4>
                  <address>123 Iskandar Road<br>Aceh, Kode Pos 23117</address>
                  <div class="social-list">
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </div>
                  <p class="copyright clear-float">
                    © Let's Order Here Theme. All Rights Reserved
                    <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

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

  <!-- Modal menu -->
    <div class="modal fade" id="modal_menu">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3>Input Banyak Menu</h3>
          </div>
          <div class="modal-body">
            <form action="pesanan.php" id="menu_popUp" method="post">
              <div class="form-group text-center">
                <!--<label for="pmenu">Menu...</label>-->
                <label for="pilih_menu" id="titleMenu"></label>
                <input type="hidden" name="id_menu" id="add_menu_input" value="0">
                <input type="number" name="jmlh_order" placeholder="Banyak Menu" id="pilih_menu" min="1" required>
              </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" name="submit">Add To Order</button>
                <p>Selesai Order? <a href="index.php#">Klik disini!</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <!-- End Modal  -->  

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

  <script>
    $(document).ready(function(){
      $(".btn-addorder").click(function(){
        <?php
        if(!isset($_SESSION['User'])){
          echo "alert('Silahkan Login dahulu sebelum memesan!');";
          echo "location.replace('index.php');";
        }
        ?>
        var idMenu = $(this).attr("idMenu");
        var namaMenu = $(this).attr("nmMenu");
        $("#add_menu_input").attr("value", idMenu);
        $("#titleMenu").html(namaMenu);
      });
    });
  </script>

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