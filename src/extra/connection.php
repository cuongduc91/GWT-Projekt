<?php
  // $con = new mysqli("db","root",getenv("MYSQL_ROOT_PASSWORD"),"mobileshop");
  // if($con->connect_error) {
  //   echo '<script type="text/javascript">alert("Database error");</script>';
  // } 
  do {
    try{
      $con = new PDO("mysql:host=db", "root", getenv("MYSQL_ROOT_PASSWORD"));
    } catch(PDOException $e) {
      echo '<script type="text/javascript">alert("Database error");</script>';
      echo $e->getMessage();
      break;
    }
    // echo '<script type="text/javascript">alert("Success!");</script>';
  } while(FALSE);

?> 

