<?php
	//delete cookies
	setcookie("username",null,time()-60);
	setcookie("nama",null,time()-60);
	
	//redirect to home
	header ("location: ../index.php");
	
 ?>