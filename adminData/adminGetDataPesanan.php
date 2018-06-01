<?php 
	if (!isset($_POST['id_meja'])) {
		http_response_code(404);
		die();
	}

	include ("../../connection.php");

	$id_meja = htmlentities(strip_tags($_POST['id_meja']));

	$sql = "SELECT pesan . * , menu.nama_menu, menu.harga_menu from pesan JOIN menu ON pesan.id_menu = menu.id_menu where id_mejapel = $id_meja";
    $result = $link->query($sql);	

    $data = [];
    while ($row = $result->fetch_assoc()) {
    	array_push($data, $row);
    }

    echo json_encode($data);
?>