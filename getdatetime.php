<?php
include('function/function.php');
/**
 * Created by PhpStorm.
 * User: ankit
 * Date: 5/13/2017
 * Time: 11:49 PM
 */


error_reporting(0);
include ('model/config.php');
global $conn;
$q = $_GET['q'];
 //$conn=	mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$movie =$_GET['movie'];

$sql="SELECT * FROM shows WHERE movie_name='".$movie."' AND multiplex_name='".$q."';";
$result = mysqli_query($conn,$sql);
echo '<h2>  Select Movie Date  </h2><select  name= "select_date" required;>
        <option value="">Select Date</option>
        ';
if(mysqli_num_rows($result)==0){
    echo '<script>alert("This Movie is Not Running right Now "); window.location.href = "index.php";</script>';

}
  while ($row = mysqli_fetch_array($result)) {
      $start_date = $row['start_date'];
      $end_date = $row['end_date'];

  }

$timestamp = time()-86400;
for ($i=2; $i<8 ; $i++) {
    $count =0 ;
    $date = strtotime("+$i day", $timestamp);
    $show_date=date('d M Y', $date);
    $s_value=date('Y-m-d',$date);
    if($s_value<$end_date){
        $count++;
        echo '<option value="'.$s_value.'">'.$show_date.' </option>';
    }






}


 echo '</select>';
if($count==0){

    // echo '<script>alert("Not Runnning");<script>';



}




$q = $_GET['q'];
// $conn= mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$movie =$_GET['movie'];

//$sql="SELECT * FROM `shows` WHERE `movie_name` LIKE $movie  AND `multiplex_name` LIKE  '".$q."'";
$sql="SELECT * FROM shows WHERE movie_name='".$movie."' AND multiplex_name='".$q."';";
$result = mysqli_query($conn,$sql);

 echo '<h2>  Select Movie Time  </h2><select name= "show_name" required;>
        <option value="">Select Time</option>
        ';
if(mysqli_num_rows($result)==0){
    echo '<script>alert("This Movie is Not Running right Now "); window.location.href = "index.php";</script>';

}
while($row = mysqli_fetch_array($result)) {

    $show_name=$row['show_name'];
    $start_time=$row['start_time'];

    echo '<option value="'.$show_name.'">'.$show_name.' '.$start_time .' </option>';
}
 echo '</select> ';
mysqli_close($conn);


?>
