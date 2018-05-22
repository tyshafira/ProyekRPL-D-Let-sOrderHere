<?php

require_once("connection.php");

if(isset($_POST['TambahMenu'])){

    // filter data yang diinputkan
    //$id_menu = filter_input(INPUT_POST, 'id_menu', FILTER_SANITIZE_STRING);
    $nama_menu = filter_input(INPUT_POST, 'nama_menu', FILTER_SANITIZE_STRING);
    $jenis_menu = filter_input(INPUT_POST, 'jenis_menu', FILTER_SANITIZE_NUMBER_INT);
    $deskripsi = filter_input(INPUT_POST, 'deskripsi', FILTER_SANITIZE_STRING);
    $harga_menu = filter_input(INPUT_POST, 'harga_menu', FILTER_SANITIZE_NUMBER_INT);
    // enkripsi password
    //$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    //$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO menu (nama_menu, jenis_menu, deskripsi, harga_menu) 
            VALUES (:nama_menu, :jenis_menu, :deskripsi, :harga_menu)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        //":id_menu" => $id_menu,
        ":nama_menu" => $nama_menu,
        ":jenis_menu" => $jenis_menu,
        ":deskripsi" => $deskripsi,
        ":harga_menu" => $harga_menu
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Menu</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="adminHomePage.php">Laman Admin</a>

        <h4>Tambah Menu Baru</h4>
        <!-- <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
 -->
        <form action="" method="POST">

            
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


            <input type="submit" class="btn btn-success btn-block" name="TambahMenu" value="Tambah" />

        </form>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="img/" />
        </div>

    </div>
</div>

</body>
</html>