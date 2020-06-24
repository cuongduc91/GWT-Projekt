<?php

include ("extra/connection.php");

if(isset($_POST['sign_up'])){
  $name=htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
  $pass=htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));
  $re_pass=htmlentities(mysqli_real_escape_string($con,$_POST['user_repass']));
  $email=htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
  if ($name == '') {
    echo "<script>alert('Please enter your name!')</script>";
    echo "<script>window.open('sign-up.php','_self')</script>";
    exit();
  }
  if(strlen($pass)<8){
    echo"<script>alert('Password should be minimum 8 characters!')</script>";
    echo "<script>window.open('sign-up.php','_self')</script>";
    exit();
  }
  if(!preg_match("#[A-Z]+#", $pass)){
    echo"<script>alert('Password should have at least 1 capital letter !')</script>";
    echo "<script>window.open('sign-up.php','_self')</script>";
    exit();
  }
  if($pass != $re_pass){
    echo"<script>alert('Your second password does not match with the initial one!')</script>";
    echo "<script>window.open('sign-up.php','_self')</script>";
    exit();
  }
  $check_mail = "select * from user where user_email = '$email'";
  $run_email = mysqli_query($con,$check_mail);
  $row_available = mysqli_num_rows($run_email);
  if($row_available==1){
    echo "<script>alert('Email has already existed, please try another!')</script>";
    echo "<script>window.open('sign-up.php','_self')</script>";
    exit();
  }
  $name_ = strtolower($name);
  $check_name = "select * from user where user_name = '$name_'";
  $run_user_name = mysqli_query($con, $check_name);
  $row_name_available = mysqli_num_rows($run_user_name);
  if($row_name_available==1){
    echo "<script>alert('User name has already existed, please try another!')</script>";
    echo "<script>window.open('sign-up.php','_self')</script>";
    exit();
  }
  $insert_user = "insert into mobileshop.user(user_name, user_pass,user_email) values ('$name','$pass','$email')";
  $query=mysqli_query($con,$insert_user);
  if($query){
    echo "<script>alert('Congratulations $name, your account has been created successfully.')</script>";
    echo "<script>window.open('index.php','_self')</script>";
  } else {

    echo "<script>alert('Registration failed, try again!')</script>";
    echo "<script>window.open('sign-up.php','_self')</script>";
  }
}
?>
