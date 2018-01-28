
<?php

if(isset($_GET['id']))
{
	 
$id =  $_GET['id'];

echo $id;
$conn=	mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());
$sql = " DELETE FROM `user` WHERE `user_id` = $id " ;
if ($conn->query($sql) === TRUE) {
    
  	header("location:user.php");
  	//echo  '<script> alert("Record deleted successfully"); </script> ';
} else {
	//header("location:user.php?error=".$conn->error );
    echo "Error deleting record: " .$conn->error;
}



}
$conn->close();
  
  ?>
