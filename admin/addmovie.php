<!DOCTYPE html>
<html>
<head>
	<title>AddMovie</title>
</head>
 
<style type="text/css">
body{
	width: 1280px;
	margin: auto;
	min-height: 700px;
	background-color: blueviolet;
}
		form{
			margin-left: 200px;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			width: 700px;
			padding-left: 100px;
		}
		input{
			margin-left: 100px;
			width: 250px;
			border-radius: 5px;
			height: 30px;
			font-size: 20px;
			text-align: center;
		}
		label{
			width: 200px;
			font-size: 20px;
			display: inline-block;
			margin-top: 10px;
		}
		textarea,select{
			margin-left: 100px;
			width: 250px;
			margin-top: 10px;
			font-size: 20px;
		}

	</style>
<body>
<form method="POST" action="addmovie.php" enctype="multipart/form-data">
<label>Movie Name </label>	<input type="text" name="movie-name" required><br>
<label>Movie Description </label> <textarea  name="movie-desc" cols="30" rows="5" required></textarea><br>
<label>Duration</label>
<input type="number" name="duration" min="90" max="240" required><br>
<label>Open-Date </label> <input type="date" name="open-date" required><br>
<label>Close-Date :-</label> <input type="date" name="close-date" required><br>
<label>Trailer Link:-</label><input type="text" name="trailer" required><br>
<label>Image :-</label> <input type="file" name="movie-image" required ><br><br>
<label>Keyword / Tag :</label>
<input type="text" name="keyword" required><br>
<label>Director</label>
<input type="text" name="director"  required><br>
<label>Actor</label>
<input type="text" name="actor" required><br>
<label>Category</label>
<input type="text" name="category" required><br>
<label>Language</label>
<input type="text" name="language" required><br>
<label>Certificate</label>
<select name="certificate" required>
	<option value="U">U</option>
	<option value="U/A">U/A</option>
	<option value="A">A</option>
</select>
<br><br>
<input type="Submit" name="submit" >
</body>
</html>




<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$movie_name=$_POST["movie-name"];
$movie_desc=$_POST["movie-desc"];
$duration=$_POST["duration"];
$open_date=$_POST["open-date"];
$close_date=$_POST["close-date"];

$trailer_link=$_POST["trailer"];
$keyword=$_POST["keyword"];
$director=$_POST["director"];
$actor=$_POST["actor"];
$category=$_POST["category"];
$language=$_POST["language"];
$certificate=$_POST["certificate"];

//  Image Path Upload to db & image store in folder  //

$image=$_FILES["movie-image"]['name'];
// Image Temp Name 
$temp_name=$_FILES["movie-image"]['tmp_name'];


move_uploaded_file($temp_name, "image/$image");

$conn=	mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());
$sql= " INSERT INTO `theatermax`.`movies` (`movie_name`, `movie_desc`,`duration`, `open_date`, `close_date`,`trailer`,`keyword`,`image`,`director`,`actor`,`category`,  `language`,`certificate`) VALUES ('$movie_name', '$movie_desc','$duration','$open_date', '$close_date','$trailer_link','$keyword','$image','$director','$actor','$category', '$language','$certificate')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>