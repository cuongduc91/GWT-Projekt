<?php
  $con = new mysqli("db","root",getenv("MYSQL_ROOT_PASSWORD"),"mobileshop");
  if($con->connect_error) {
    echo '<script type="text/javascript">alert("Database error");</script>';
  } 

?>