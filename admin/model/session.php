<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['admin'];
   
   $ses_sql = mysqli_query($conn,"select admin_email from admin where admin_email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['admin_email'];
   
   if(!isset($_SESSION['admin'])){
      header("location:login.php");
   }
?>