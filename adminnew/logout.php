<?php
	//delete cookies
	setcookie("email",null,time()-60,"/");
	setcookie("username",null,time()-60,"/");
	
	//redirect to home
	header ("location: ../index.php");
	
 ?>