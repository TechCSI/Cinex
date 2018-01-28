<?php



$token = $_REQUEST['token'];

$conn=  mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());

$select = mysqli_query($conn, "SELECT * from user where token = '$token' ");

if(mysqli_num_rows($select)==1)
{
	 mysqli_query($conn,"UPDATE `user` SET `activated` = '1' WHERE `token` = $token");
 
	 echo '<script>alert( "sign up sucessfully " );
			window.location.href="index.php";</script>';
		 
		 

}
else{
	echo "Something wents wrong Please Try again leter";
}




?>