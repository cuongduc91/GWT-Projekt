<?php

include ("extra/connection.php");

  if(isset($_POST['sign_up'])) {
    

    $name=$_POST['user_name'];
    $pass=$_POST['user_pass'];
    $re_pass=$_POST['user_repass'];
    $email=$_POST['user_email'];
    
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
      echo"<script>alert('Your second password does not match the initial one!')</script>";
      echo "<script>window.open('sign-up.php','_self')</script>";
      exit();
    }
    $check_mail_sql = "select * from mobileshop.user where user_email = :email ";
    $check_mail_stmt = $con->prepare($check_mail_sql);
    $check_mail_stmt->bindParam(':email', $email);
    $check_mail_stmt->execute();
    $row_available=$check_mail_stmt->rowCount();

    if($row_available==1){
      echo "<script>alert('Email has already existed, please try another!')</script>";
      echo "<script>window.open('sign-up.php','_self')</script>";
      exit();
    }
    $name_ = strtolower($name);
    $check_name_sql = "select * from mobileshop.user where user_name = :name";
    $check_name_stmt = $con->prepare($check_name_sql);
    $check_name_stmt->bindParam(':name', $name);
    $check_name_stmt->execute();
    $row_name_available=$check_name_stmt->rowCount();
    if($row_name_available==1){
      echo "<script>alert('User name has already existed, please try another!')</script>";
      echo "<script>window.open('sign-up.php','_self')</script>";
      exit();
    }

    $statement = $con->prepare("insert into mobileshop.user (user_name, user_pass, user_email) values (:name, :pass, :email)");
  }

?>
