<?php 
include ("extra/connection.php");
if(isset($_POST['sign_in'])){
  $name=htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
  $pass=htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));
  $select_user = "select * from user where user_name = '$name' and user_pass='$pass'";
  $query = mysqli_query($con,$select_user);
  $check_user = mysqli_num_rows($query);
  if($check_user==1){
    echo "<script>window.open('account.php','_self')</script>";
  } else {
    echo "<script>window.open('not-found.php','_self')</script>";
  }
}

?>