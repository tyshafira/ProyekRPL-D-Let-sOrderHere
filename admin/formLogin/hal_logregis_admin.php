<?php
	include("../../connection.php");
?>

<?php
	//chek that user have submit/login
	if(isset($_POST["submit"]))
	{ 
		//take password and email
		$email    = $_POST["email"];
		$password = $_POST["password"];
		
		//make a variable to show error message
		$error_msg ="";
		
		//check wheter email and password haved inputed
		if(empty($email) || $password==="")
		{	$error_msg="please input email and password!";
		}
		
		//check email and password
		else
		{	
			//check avaibility user on database;
			$hasil_query = mysqli_query($link, "select * from admin where email=\"$email\" && password=\"$password\"");
			$data        = mysqli_num_rows($hasil_query);
			
			//chek result query
			if($data !=1)
			{	$error_msg="email or password incorrect";
			}
			
			//get information of email and username
			$admin = mysqli_fetch_row($hasil_query);
		}
		
		//validation's successfull
		if($error_msg==="")
		{
			//create cookies
			setcookie("email","$admin[1]", time()+3600,"/");
			setcookie("username","$admin[0]",time() + 3600,"/");
			
			//redirect to header
			header("location: ../adminData/adminHomePage.php");
			
		}
			  
	}
	
	//not yet submit or first time open page
	else
	{
		$error_msg="";
		$email="";
		$password="";
	}
?>

<?php
	if(isset($_POST["submit2"]))
	{
		$nama      = $_POST["nama"];
		$email     = $_POST["email"];
		$password  = $_POST["password"];
		$password2 = $_POST["password2"];
		$gender    = $_POST["gender"];
		
		//make error variable
		$error_msg2="";
		
		if($nama!=="" && $email!=="" && $password!=="" && $password2!=="")
		{
			if($password==$password2)
			{
				//insert data into database
				$angka = mysqli_query($link,"insert into admin values (\"$nama\",\"$email\",\"$password\",\"$gender\")");
				
				//checking avaibility email
				if($angka==0)
				{
					$error_msg2="email yang anda masukan sudah ada yang menggunakan!";
				}
				
				if($error_msg2==="")
				{
					//get username
					$hasil_query = mysqli_query($link, "select * from admin where email=\"$email\" && password=\"$password\"");
					$admin       = mysqli_fetch_row($hasil_query);
					
					//create cookies
					setcookie("email","$admin[1]", time()+3600,"/");
					setcookie("username","$admin[0]",time() + 3600,"/");
					//redirect
					header ("location: ../adminData/adminHomePage.php");
				}
			}
			
			else{
				$error_msg2="konfirmasi password tidak sesuai";
			}
		}
		
		else{
			$error_msg2="isikan seluruh form";
		}
		
	}
	
	else{
			$error_msg2="";
	}
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login &amp; Register Templates</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/msg.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Please</strong> Login <strong>or</strong> Register Forms</h1>
                            <div class="description">
                            	<p>
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter email and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
									
									<div class="error_msg">
									<?php
									if($error_msg!=="")
									{echo $error_msg;
									}
									?>
									</div>
									
									<!-- form login -->
				                    <form role="form" action="hal_logregis_admin.php" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-email">Username</label>
				                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" name="submit" class="btn">Sign in!</button>
				                    </form>
									<!-- end of form login -->
									
			                    </div>
		                    </div>
		                
		                	<div class="social-login">
	                        	<h3>...or login with:</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-2" href="#">
		                        		<i class="fa fa-facebook"></i> Facebook
		                        	</a>
		                        	<a class="btn btn-link-2" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
		                        	<a class="btn btn-link-2" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a>
	                        	</div>
	                        </div>
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box" action="#">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
									
									<!-- error message -->
									<div class="error_msg">
									<?php
									if($error_msg2!=="")
									{echo $error_msg2;
									}
									?>
									</div>
									
									<!-- form sign up -->
				                    <form role="form" action="hal_logregis_admin.php" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">nama</label>
				                        	<input type="text" name="nama" placeholder="Masukkan Nama Anda..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="email" placeholder="Masukkan Email..." class="form-email form-control" id="form-email">
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="gender" placeholder="Masukkan gender..." class="form-email form-control" id="form-email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-first-name">Email</label>
				                        	<input type="password" name="password" placeholder="Masukkan Password..." class="form-last-name form-control" id="form-first-name">
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-email">password</label>
				                        	<input type="password" name="password2" placeholder="Masukkan Lagi Password..." class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        
				                        <button type="submit" name="submit2" class="btn">Sign me up!</button>
				                    </form>
									<!-- end of sign up -->
									
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Made by Anli Zaimi at <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a> 
        					having a lot of fun. <i class="fa fa-smile-o"></i></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>