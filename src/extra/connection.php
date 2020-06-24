<?php
  $con = new mysqli("mosh","root",getenv("MYSQL_ROOT_PASSWORD"),"mobileshop");
  if($con->connect_error) {
    echo "<script>alert('Connection Error [', $mysqli->connect_errno, ']: ', $mysqli->connect_error)</script>";
  } else {
    echo "<script>alert('Successfully connection')";
  }

?>