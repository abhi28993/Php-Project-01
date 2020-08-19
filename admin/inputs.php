<?php

session_start();
	
if($_SESSION['email']=='')
{
	header('location:index.php');
}
else{

	include 'nav.php';
	include 'head.php';
	?>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Input Forms</h2>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>ADMIN Comment Form :</h4>
								</div>
								<div class="form-body">
								
								<form action="" method="post" enctype="multipart/form-data">
								<label for="">Name</label>
								<input type="text" name="name" id="" class="form-control">
								<label for="">Email</label>
								<input type="text" name="email" class="form-control">
								<label for="">Image</label><br>
								<input type="file" name="image" > 
								<br>
								<label for="">Description</label>
								<textarea name="text" id="" cols="30" rows="10" class="form-control"></textarea>
								<br>
								<button type="submit" class="btn btn-success" name="submit">Add Now</button>
							

</form>
								</div>
							</div>
						</div>
					</div>
					</div>
				<!-- //input-forms -->
			</div>
		</div>
		<?php
include '../database/db.php';
if(isset($_POST['submit']))
{
	extract($_POST);
	$imgname=  $_FILES['image']['name'];
    $imgtmpname=  $_FILES['image']['tmp_name'];
    $newname =uniqid().$imgname;
    $arr= explode(".",$imgname); //convert string into array
     $ext=strtolower(end($arr));  //getting length

    // $ext = strtolower($arr[$l-1]); // getting its extension
    if($ext=="jpg" or $ext == "jpeg" or $ext == "png")
    {
    if(move_uploaded_file($imgtmpname,"images/$newname"))
    {
		$query="INSERT INTO `admin` (`id`,`name`,`email`,`image`,`text`) VALUES (NULL,'$name','$email','$newname','$text')";
		$data=mysqli_query($con,$query);

	}
	
    
}
}



?>
		<!-- footer -->
		<div class="footer">
				<p>© 2020 Test website developed By Abhishek kumar</a></p>
			</div>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
</body>
</html>
<?php
}?>
