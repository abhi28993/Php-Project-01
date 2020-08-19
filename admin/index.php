<?php

session_start();


include '../database/db.php';
if(isset($_POST['login']))
{
	extract($_POST);

	$query="SELECT * FROM `test` WHERE `email`='$email' and `password`='$password'";
	$data=mysqli_query($con,$query);
	$res=mysqli_fetch_array($data);
	if($res['email']==$email and $res['password']==$password)
	{
		$_SESSION['email']=$res['email'];
			
		if(isset($_POST['rememberme']))
		{
			
			setcookie("emailcookie","$email",time()+86000);
			setcookie("passwordcookie","$password",time()+86000);
			header('location:dashboard.php');
		}
		else{
			header('location:dashboard.php');
		}
    
	}
}


?>
<!DOCTYPE html>
<head>
<title>TestAdmin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
</head>
<body class="signup-body">
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Admin Login</h2>
				</div>
				<form action="." method="post">
				<label for="">Enter Email</label>
					<input type="text" name="email" value="<?php
					if(isset($_COOKIE['emailcookie']))
					{
						echo $_COOKIE['emailcookie'];
					}
					
					
					
					?>" >
					<label for="">Enter Password</label>
					<input type="password" name="password" value="<?php
					
					if(isset($_COOKIE['passwordcookie']))
					{
						echo $_COOKIE['passwordcookie'];
					}
					
					
					
					?>" >
					<br>
						<input type="checkbox" name="rememberme">   Remember Me
					
					<input type="submit" class="register" value="Login" name="login">
				</form>
				<div class="signin-text">
					<div class="text-left">
						<p><a href="#"> Forgot Password? </a></p>
					</div>
					
					

					
					<div class="clearfix"> </div>
				</div>
				<h5>- OR -</h5>
				<div class="footer-icons">
					<ul>
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="twitter facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter chrome"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="twitter dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<a href="../index.php">Back To Home</a>
			</div>
			
			<!-- footer -->
			<div class="copyright">
				<p>© 2020 Test website developed By Abhishek kumar</a></p>
			</div>
			<!-- //footer -->
			
		</div>
	<script src="js/proton.js"></script>
</body>
</html>
