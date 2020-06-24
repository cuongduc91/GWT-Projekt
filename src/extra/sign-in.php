<?php 
include ("extra/connection.php");
if(isset($_POST['sign_in'])){
  $name=htmlentities(mysqli_real_escape_string($con,$_POST['name']));
  $pass=htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));

  $select_user = "select * from user where user_name = '$name'";
}

?>