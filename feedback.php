 
 	 
<?php
error_reporting(0);

include 'function/function.php';
include 'model/session.php' ;

?>
<html>
<head>
	<title>CINEX</title>
	<link rel="stylesheet" type="text/css" href="style/animate.css">
	<link rel="stylesheet" type="text/css" href="style/stylesheet.css">
	<script type="text/javascript" src="script/script.js"></script>
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine5/style.css" />
	<script type="text/javascript" src="engine5/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	<style>

		#feedback{

			margin: auto;
			margin-top: 25px;
			width: 800px;
			padding: 50px;
			padding-top: 20px;
			background-color: rgba(0, 0, 0, 0.1);
			box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.2);
		}
		#feedback h2{
			text-align: center;
			font-size: 28px;

		}
		#feedback hr{
			width: 80%;

		}
		#feedback form{
			font-family: "Courier New", Courier, monospace;
			font-size: 22px;
			text-align: center;
		}
		#feedback form label,input,textarea{
			text-align: left;
			display: inline-block;
			width: 200px;
			margin-right: 50px;

		}
		#feedback form input,textarea{
			margin-top: 10px;
			background-color: lightblue;
			height: 40px;
			outline: none;
			border: none;
			border-radius: 5px;
		}
		#feedback form #button{
			width: 200px;
			text-align: center;
			background-color: orange;
			color: white;
			height: 40px;
			font-size: 24px;
			border-radius: 5px;
			box-shadow:   1px 1px 10px 2px;
		}
	</style>
</head>
<body>
<?php include('header.php');

?>
	 

	 	 
	<div id="feedback">
<h2>Feedback Form</h2>

<hr>
 <form method="post" action="">
 	<label>Name</label>
 	<input type="text" name="name" placeholder="Enter Your Name" tabindex="2" required><br>
 	<label>Email</label>
 	<input type="email" name="email" placeholder="Enter Your Email" tabindex="2" required><br>
 	<label>Phone</label>
 	<input type="number" name="phone" placeholder="Enter Your Number" tabindex="2" required><br>
 	<label>Massage</label>
 	<textarea  name="massage" placeholder="Enter Your Massege" rows="4" tabindex="2" required></textarea><br><br>
 	<input type="submit" id="button" name="feedback_submit" value="SUBMIT">


 </form>
</div>
	 
	 <?php include('footer.php');?>
					 
</body>

</html>
 


<?php
global $conn;
if(isset($_POST["feedback_submit"]))
{
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$feedback = $_POST["massage"];

  
//$conn=	mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());
$sql= " INSERT INTO `theatermax`.`feedback` (`name`, `email`,`phone`, `feedback`,`date`) VALUES ('$name', '$email','$phone','$feedback',now())";

if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">
						alert("Feedback Submitted");
					</script>';
					die();
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 
}
?>

  