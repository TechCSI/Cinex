<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function x() {
			alert("You are Logged Out");
		}
	</script> 
</head>
<body>
<?php
   session_start();
 //  $_SESSION["username"]="";
   
 
   if(session_destroy()) {
      header("Location: login.php");
   }
 
  /*     //header('Refresh: 2; URL = index.php');
    header('Refresh: 0; URL = index.php');
     echo"<script> x(); </script>";
     die();
  */

?>
 </body></html>