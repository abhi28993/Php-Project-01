<?php
 include '../database/db.php';
 $pid=$_GET['pid'];

   $query="DELETE FROM `admin` WHERE `id`='$pid'";
   $data=mysqli_query($con,$query);
   header('location:output.php');



?>