<?php

session_start();

if($_SESSION['email']=='')
{
	header('location:index.php');
}
else{
	include 'nav.php';
	

?>
<?php
include '../database/db.php';
if(isset($_POST['submit']))
{
	extract($_POST);
	$query="SELECT * FROM `test` WHERE `email`='$email'";
	$data=mysqli_query($con,$query);
	$res=mysqli_fetch_array($data);
	if(strlen($_POST['name'])<5)
	{
          echo "At least 5 Character required";
	}
	elseif($_POST['password']!==$_POST['cpassword'])
	{
     echo "password mismatch";
	}
	elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		echo "enter correct format of email";

	}
	elseif($res['email']==$email)
	{
		echo "email id alredy exist";
	}
	else{
		$query="INSERT INTO `test` (`id`,`name`,`password`,`email`,`phone`) VALUES (NULL,'$name','$password','$email','$phone')";
		$data=mysqli_query($con,$query);
		@$res=mysqli_fetch_assoc($data);
		
		
	}
		
	}



?>

<!DOCTYPE html>
<head>
<title>Admin Panel</title>
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
					<h2>Sign Up Create New Admins</h2>
				</div>
				<form method="post">
					<input type="text" name="name" placeholder="Username" required="" >
					<input type="text" name="password" placeholder="Password" required="" >
					<input type="password" name="cpassword" placeholder="Confirm password" required="" >
					<input type="email" name="email" placeholder="Email" required="">
					<input type="tel" name="phone" placeholder="Phone" required="">
					<input type="submit" name="submit" class="register" value="Sign Up" required="">
				</form>
				<a href="index.php">Back To Home</a>
			</div>
			
			<!-- footer -->
			<div class="footer">
				<p>© 2020 Test website developed By Abhishek kumar</a></p>
			</div>
			<!-- //footer -->
			
		</div>
	<script src="js/proton.js"></script>
</body>
</html>
<?php

}?>