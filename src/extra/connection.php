<?php
  // $con = new mysqli("db","root",getenv("MYSQL_ROOT_PASSWORD"),"mobileshop");
  // if($con->connect_error) {
  //   echo '<script type="text/javascript">alert("Database error");</script>';
  // } 
    try{
      $con = new PDO("mysql:host=db", "root", getenv("MYSQL_ROOT_PASSWORD"));
    } catch(PDOException $e) {
      echo '<script type="text/javascript">alert("Database error");</script>';
      echo $e->getMessage();
    }
    // echo '<script type="text/javascript">alert("Success!");</script>';

?> 

