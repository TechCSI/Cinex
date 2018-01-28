
<?php
include 'fun.php';
error_reporting(E_ALL ^ E_DEPRECATED);

$movie_name=$_POST["movie_name"];
$multiplex_name=$_POST["multiplex_name"];
$show_language = $_POST["show_language"];
$start_date=$_POST["start_date"];
$end_date=$_POST["end_date"];
$show_name = $_POST["show_time"]; 

if($show_name=="mornning"){
	$start_time = "09:00:00";
	$end_time = "12:00:00";
}
if($show_name=="midday")
{
	$start_time = "12:00:00";
	$end_time = "15:00:00";

}
if($show_name=="evenning"){
	$start_time = "16:00:00";
	$end_time = "19:00:00";
}
if($show_name=="night"){
	$start_time = "19:00:00";
	$end_time = "22:00:00";
}



$conn=	mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());
$sql= " INSERT INTO `theatermax`.`shows` (`movie_name`, `multiplex_name`,`show_language`, `start_date`, `end_date`,`show_name`,`start_time`,`end_time`) VALUES ('$movie_name', '$multiplex_name','$show_language','$start_date', '$end_date','$show_name','$start_time','$end_time' )";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location:show.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    echo '<br> <br> <a href = "show.php">Go Back </a>';
}

?>