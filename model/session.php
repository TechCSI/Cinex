<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['username'];
   
   $ses_sql = mysqli_query($conn,"select email from user where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['username'])){
      header("location:login.php");
   }
?>