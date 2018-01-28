<!DOCTYPE html>
<html>
<head>
	<title>Delete Show</title>
	<style type="text/css">
		
#conpass{
background-color: rgba(0, 0, 0, 0.1);
position: fixed;
width: 400px;
height: 200px;
margin-top: 50px;
margin-left: 300px;
 padding: 100px;
 
}
	</style>
</head>
<body>

</body>
</html>
<?php


 if(isset($_POST['showconfirm']))
 {
if($_POST['password']=="Ankit12345"){
$id =  $_POST['show_id'];
$conn=	mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());
$sql = " DELETE FROM `shows` WHERE `show_id` = $id " ;
if ($conn->query($sql) === TRUE) {
    
    echo  '<script>  document.getElementById("conpass").style.display="none"; alert("Delete SucessFully");  </script> ';
    header("Refresh:0; url=show.php");
	   
} else {
	
	  echo $conn->error; 
}
}

else{
	
echo  '<script>  document.getElementById("conpass").style.display="none"; alert("Password MissMAtch");  </script> ';
	 header("location:show.php");
}
}

?>