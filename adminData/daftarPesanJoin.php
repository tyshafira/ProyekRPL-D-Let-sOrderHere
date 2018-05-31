<?php
  if(!isset($_COOKIE["email"]))
  {
    header ("location: ../formLogin/hal_logregis_admin.php");
  }

  include ("../../connection.php");

  if (isset($_GET['notif']) && $_GET['notif'] == 1) {
    echo "<script>alert('Pesanan Berhasil Dibayar.');</script>";
  }

  if (isset($_POST['harga_yang_dibayar'])) {
    $id_meja = $_POST['id_meja'];
    $total_harga = $_POST['total_harga'];
    $jenis_pembayaran = $_POST['jenis_pembayaran'];

    $sql = "insert into rekap_struk(id_mejapel, jenis_bayar) values($id_meja, $jenis_pembayaran)";
    $result = $link->query($sql);

    $sql = "delete from pesan where id_mejapel = $id_meja";
    $result = $link->query($sql);

    header("Location:adminjoinmodal.php?notif=1");
  }

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

  .rcorners2 {
    border-radius: 15px / 50px;
    background: #FFFFFF;
    padding: auto; 
    width: auto;
    height: auto; 
}
.rcorners3 {
    border-radius: 50%;
    background: #808080;
    padding: auto; 
    width: auto;
    height: auto;
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

                        $sql_pesan = 'SELECT pesan.id_menu, pesan.jumlah_order, menu.nama_menu FROM pesan JOIN menu ON pesan.id_menu = menu.id_menu WHERE id_mejapel = ' . $meja['id_mejapel'];
                        $q_pesan = $link->query($sql_pesan);
                        ?>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="media d-block mb-4 text-center ftco-media ftco-animate">
                            <div class="media-body p-md-5 p-4">
                              <div class="rcorners3">
                              <h5 class="mt-0 h4">Meja <?php echo $meja['no_meja']; ?></h5>
                              <p class="mb-4">
                                <table style="width:100%">
                                  <thead>
                                    <tr>
                                      <th>ID MENU</th>
                                      <th>NAMA MENU</th>
                                      <th>JUMLAH</th>
                                    </tr>
                                  </thead>
                                  <?php 
                                    while($pesan = $q_pesan->fetch_assoc()){
                                      echo "<tr>";
                                      echo "<td>" . $pesan['id_menu'] . "</td>";
                                      echo "<td>" . $pesan['nama_menu'] . "</td>";
                                      echo "<td>" . $pesan['jumlah_order'] . "</td>";
                                      echo "</tr>";
                                    }
                                  ?> 
                                </table>
                              </p>
                              <p class="mb-0"><a class="tombol-bayar btn btn-primary btn-sm" data-id-meja="<?php echo $meja['no_meja']; ?>">Bayar</a></p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php
                      }
                    } 
                    else {
                        echo "<p>Tidak ada data pesanan</p>";
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

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Struct</h4>
        </div>
        <div class="modal-body">
          <table id="data-pesanan" class="table table-striped">
            <thead>
              <tr>
              <td>No</td>
              <td>Nama Menu</td>
              <td>Qty</td>
              <td>Harga Satuan</td>
            </tr>
            </thead>
            <tbody></tbody>
          </table>
          <div id="total-harga" data-total-harga="0"></div>
          <div class="row">
            <div class="col-md-offset-8 col-md-4">
              <input type="hidden" name="id_meja">
              <input type="hidden" name="total_harga">

               <!-- <div class="form-inline"> -->
                <div class="form-group">
                  <label for="exampleInputEmail2">Jenis Pembayaran</label>
                  <div class="clearfix"></div>
                  <select name="jenis_pembayaran" class="form-control" required>
                    <option value="1">Tunai</option>
                    <option value="2">Kredit</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName2">Harga Yang Dibayar</label>
                  <div class="clearfix"></div>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Rp</span>
                    <input type="text" name="harga_yang_dibayar" onkeyup="updateKembalian()" class="form-control" id="exampleInputName2" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail2">Kembalian</label>
                  <div class="clearfix"></div>
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Rp</span>
                    <input type="text" name="kembalian" class="form-control" id="exampleInputEmail2" disabled value="0">
                  </div>
                </div>
              <!-- </div> -->
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
          <button type="submit" class="btn btn-primary">Bayar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://tacoding.comrade-dev.com/assets/js/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
  $('.tombol-bayar').click(function(){
    var id_meja = $(this).data('id-meja');
    $('input[name=id_meja]').val(id_meja);
    $.post("adminGetDataPesanan.php", {id_meja: id_meja}, function(result){
      var totalHarga = 0;
       $("#data-pesanan tbody").children().remove();
      $.each(result, function( key, value) {
        var dataBaru = '';
        dataBaru += '<tr>';
        dataBaru += '<td>'+(key+1)+'.</td>';
        dataBaru += '<td>'+value.nama_menu+'</td>';
        dataBaru += '<td>'+value.jumlah_order+'</td>';
        dataBaru += '<td>'+value.harga_menu+'</td>';
        dataBaru += '</tr>';

         totalHarga += parseInt(value.harga_menu) * parseInt(value.jumlah_order);
        $("#data-pesanan tbody").append(dataBaru);
      });

      var dataBaru = '';
        dataBaru += '<tr>';
        dataBaru += '<td style="text-align:right" colspan="3">Total Harga</td>';
        dataBaru += '<td>'+totalHarga+'</td>';
        dataBaru += '</tr>';
</body>
</html>