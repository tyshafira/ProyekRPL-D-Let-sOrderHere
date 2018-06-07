<?php 

include('connection.php');
	if(!empty($_POST)){
		$username = htmlentities(strip_tags($_POST["username"]));
		$email = htmlentities (Strip_tags($_POST["email"]));
		$password = htmlentities(strip_tags(hash('sha256', $_POST["password"])));
		$gender = htmlentities (Strip_tags($_POST["gender"])); 
		$password2 = htmlentities(strip_tags(hash('sha256', $_POST["password2"])));

		if($password == $confirm_password){
			$password = htmlentities(strip_tags(hash('sha256', $_POST["password"])));

			$syntax= "INSERT into admin values ('$username','$email','$password','gender',FALSE)";
			$SignUp= mysqli_query($link,$syntax);

			if($SignUp){
				header("HTTP/1.1 302 Moved Temporarily");
				header("location : hal_logregis_admin.php#signin");
				exit();
			}else {
				header("HTTP/1.1 302 Moved Temporarily");
				header("location : index.php?gagallogin");
				exit();
				$error = "Username / password combination incorrect";
			}
		}else{
			header("HTTP/1.1 302 Moved Temporarily");
				header("location : index.php?gagallogin");
				exit();
				$error = "Username / password combination incorrect";
		}
	}else {
		die(mysqli_error($link));
	}



?>