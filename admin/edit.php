<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php

include '../database/db.php';

    $pid=$_GET['pid'];
    $query="SELECT * FROM `admin` WHERE `id`= '$pid'";
    $data=mysqli_query($con,$query);
    $res=mysqli_fetch_array($data);


?>
<h1><center>Update Now</center></h1>
<form action="" method="post" enctype="multipart/form-data">
<label for="">Name</label>
<input type="text" name="name" value="<?php echo $res['name']; ?>" class="form-control"><br>
<label for="">Email</label>
<input type="text" name="email" value="<?php echo $res['email']; ?>"class="form-control"><br>
<label for="">Image</label>
<input type="file" name="image" ><br>

<label for="">Comment</label>
<textarea name="text"  id="" cols="30" rows="10"class="form-control"><?php echo $res['text']; ?></textarea><br>
<input type="submit" name="submit" value="submit" class="form-control btn btn-success">
</form>

<?php

if(isset($_POST['submit']))
{
    extract($_POST);
    print_r($_POST);
    $imgname=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    $newname=uniqid().$imgname;
    $imageext= explode(".",$imgname);
    $ext=strtolower(end($imageext));
    if($ext=="jpg" or $ext=="jpeg" or $ext=="png" or $ext=="svg" or $ext=="gif")
    {
        if(move_uploaded_file($tempname,"images/$newname"))
        {
            $query="UPDATE `admin` SET `name`='$name' , `email`='$email' , `image`='$newname' , `text`='$text' WHERE `id`='$pid'";
            $data=mysqli_query($con,$query);
            header('location:output.php');
         
        }
    }

}


?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>