<?php
  $link=mysqli_connect("localhost", "proger7545_serv", "20002011m", "proger7545_serv");

  if(isset($_post['submit'])){
    if(!empty($_post['id']))
    {
    $del = "DELETE FROM users_test WHERE `id` = '{$_post['user_id']}'";
    }
  }





  header("Location: cabinet.php");
  $del->close();



 ?>
