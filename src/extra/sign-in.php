<?php 
include ("extra/connection.php");
if(isset($_POST['sign_in'])){
  $name=$_POST['user_name'];
  $pass=$_POST['user_pass'];
  $select_user_sql = "select * from mobileshop.user where user_name = :name and user_pass= :pass";
  $select_user_stmt = $con->prepare($select_user_sql);
  $select_user_stmt->bindParam(':name', $name);
  $select_user_stmt->bindParam(':pass', $pass);
  $select_user_stmt->execute();
  $select_user=$select_user_stmt->rowCount();
  if($select_user==1){
    echo "<script>window.open('account.php','_self')</script>";
  } else {
    echo "<script>window.open('not-found.php','_self')</script>";
  }

}

?>