<?php 
 include('model/config.php');  
function multiplexlist(){	  
global $conn;	
 //$conn=	mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());
	   $result = mysqli_query($conn, "SELECT DISTINCT * FROM `multiplex` ") or die(mysql_error());

	   while ($row = mysqli_fetch_array($result)) {
            $multiplex_name = $row['multiplex_name'];
            echo '	<option value="'.$multiplex_name.'">'.$multiplex_name.'</option> ';
           
}
}

function movielist(){
global $conn;	
	//$conn=	mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());
	   $result = mysqli_query($conn, "SELECT DISTINCT * FROM `movies` ") or die(mysqli_error());

	   while ($row = mysqli_fetch_array($result)) {
            $movie_name = $row['movie_name'];
             $open_date = $row['open_date'];
              $close_date = $row['close_date'];

              if(date("Y-m-d")>$open_date){
    if(date("Y-m-d")<$close_date)
{

             echo '	<option value="'.$movie_name.'">'.$movie_name.'</option> ';

           
}
	 
}
}
}


function userinfo(){
global $conn;
$result = mysqli_query($conn, "SELECT  * FROM user") or die(mysql_error());	

        	while ($row = mysqli_fetch_array($result)) {
            $id = $row['user_id'];
            $f_name = $row['f_name'];
            $l_name = $row['l_name'];
            $email=$row['email'];
            $passwd = $row['password'];
            $dob = $row['dob'];
            $mobile = $row['mobile'];
            $gender=$row['gender'];
            $city=$row['city'];
            echo '
            <tr>
					<td>
						'.$id.'
					</td>
					<td>
						'.$f_name.'
					</td>
					<td>
						'.$l_name.'
					</td>
					<td>
						'.$email.'
					</td>
					<td>
						'.$passwd.'
					</td>
					<td>
						'.$mobile.'
					</td>
					<td>
						'.$city.'
					</td>
					<td>
						'.$dob.'
					</td>
					<td>
						'.$gender.'
					</td>
					<td>
						  <a href="deluser.php?id='.$id.'"> Delete</a> 
						 
					</td>
				</tr>

			

            ';

 
/*

if(isset($_POST['deleteuser'])){

 
$delet_query = mysqli_query($conn,"DELETE FROM user WHERE user_id = $id ") or die(mysqli_error());

if($delet_query) {
echo "user delete";
}

}
*/


  
}       }


function movieinfo(){
 global $conn;
 $result = mysqli_query($conn, "SELECT  * FROM movies") or die(mysql_error());	

        	while ($row = mysqli_fetch_array($result)) {
            $id = $row['movie_id'];
            $movie_name = $row['movie_name'];
            $movie_desc = $row['movie_desc'];

            $duration=$row['duration'];
            $open_date = $row['open_date'];
            $close_date = $row['close_date'];
            $actor = $row['actor'];
            $director = $row['director'];
            $certificate=$row['certificate'];
            $language=$row['language'];
            echo '
            <tr>
					<td>
						'.$id.'
					</td>
					<td>
						'.$movie_name.'
					</td>
					 
					<td>
						'.$duration.' min 
					</td>
					<td>
						'.$open_date.'
					</td>
					<td>
						'.$close_date.'
					</td>
					<td>
						'.$actor.'  '. $director.'
					</td>
					<td>
						'.$language.'
					</td>
					<td>
						'.$certificate.'
					</td>
					<td>
						 <a href="fun.php?movie_id='.$id.'"> Delete</a> 
				
					</td>
				</tr>

			

            ';

   
	}       
}

if(isset($_GET['movie_id']))
{
	 
$id =  $_GET['movie_id'];
$conn=	mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());
$sql = " DELETE FROM `movies` WHERE `movie_id` = $id " ;
if ($conn->query($sql) === TRUE) {
    
    header("location:movie.php");
  	//echo  '<script> alert("Record deleted successfully"); </script> ';
} else {
	
	  echo $conn->error; 
}
}
$conn->close();
  



function multiplexinfo(){
 global $conn;
$result = mysqli_query($conn, "SELECT  * FROM multiplex") or die(mysql_error());	

        	while ($row = mysqli_fetch_array($result)) {
            $id = $row['multiplex_id'];
            $multiplex_name = $row['multiplex_name'];
            $prop_name = $row['prop_name'];
            $prop_email = $row['prop_email'];

            $prop_mobile=$row['prop_mobile'];
            $multiplex_city = $row['multiplex_city'];
            $multiplex_state = $row['multiplex_state'];
            $multiplex_address = $row['multiplex_address'];
            $multiplex_zip = $row['multiplex_zip'];
             
            echo '
            <tr>
					<td>
						'.$id.'
					</td>
					<td>
						'.$multiplex_name.'
					</td>
					 
					<td>
						'.$prop_name.'  
					</td>
					<td>
						'.$prop_mobile.'
					</td>
					<td>
						'.$prop_email.'
					</td>
					<td>
						'.$multiplex_city.'
					</td>
					<td>
						'.$multiplex_state.'
					</td>
					<td>
						'.$multiplex_address.'
					</td>
					<td>
						'.$multiplex_zip.'
					</td>
					<td>
						 <a href="theater.php?multiplex_id='.$id.'"> Delete</a> 
				
					</td>
				</tr>

			

            ';

   
	}       
}
function multdelete(){
if(isset($_GET['multiplex_id']))
{
	 
$id =  $_GET['multiplex_id'];
$conn=	mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());
$sql = " DELETE FROM `multiplex` WHERE `multiplex_id` = $id " ;
if ($conn->query($sql) === TRUE) {
    
    header("location:theater.php");
  	//echo  '<script> alert("Record deleted successfully"); </script> ';
} else {
	
	 $error= $conn->error;
	 echo '<script>alert("You Cannt Delete this : \n  Show are running in this Multiplex \n Frist Delete Related Show then this !!!!!");
	 window.location.href="theater.php"</script>'; 

}
}
 
  
}


function showinfo(){
 global $conn;
$result = mysqli_query($conn, "SELECT  * FROM shows") or die(mysql_error());	

        	while ($row = mysqli_fetch_array($result)) {
            $id = $row['show_id'];
            $multiplex_name = $row['multiplex_name'];
            $movie_name = $row['movie_name'];
            $show_language = $row['show_language'];
             $show_name = $row['show_name'];
            $start_time=$row['start_time'];
            $end_time = $row['end_time'];
            $start_date = $row['start_date'];
            $end_date = $row['end_date'];
           
             
            echo '
            <tr>
					<td>
						'.$id.'
					</td>
					<td>
						'.$multiplex_name.'
					</td>					 
					<td>
						'.$movie_name.'  
					</td>
					<td>
						'.$show_language.'
					</td>
					<td>
						'.$show_name.'
					</td>
					<td>
						'.$start_time.'
					</td>
					<td>
						'.$end_time.'
					</td>
					<td>
						'.$start_date.'
					</td>
					<td>
						'.$end_date.'
					</td>
					<td>
						 <a id="confirmPassword" href="show.php?show_id='.$id.'"> Delete</a> 
				
					</td>
				</tr>

			

            ';

   
	}       
}

  
 


function ticketinfo(){
 global $conn;
if(isset($_POST['bymovie']))
{
	$movie=$_POST['bymovie'];

	$result = mysqli_query($conn, "SELECT  * FROM shows where movie_name = '$movie'  ") or die(mysql_error());
	while ($row = mysqli_fetch_array($result)) {	
		$show_id =$row['show_id'];
 		
$results = mysqli_query($conn, "SELECT  * FROM ticket where show_id = '$show_id'  ORDER BY `ticket`.`booking_date` DESC") or die(mysql_error());	

        	while ($row = mysqli_fetch_array($results)) {
            $id = $row['ticket_id'];
            $show_id = $row['show_id'];
            $user_id = $row['user_id'];
            $book_time = $row['book_time'];
            $seatno = $row['seatno'];
             $amount = $row['amount'];
            $mobile=$row['mobile'];
            $email = $row['email'];
            $booking_date = $row['booking_date'];
            $status=$row['status'];
            
             
            echo '
            <tr>
					<td>
						'.$id.'
					</td>
					<td>
						'.$show_id.'
					</td>					 
					<td>
						'.$user_id.'  
					</td>
					<td>
						'.$booking_date.'
					</td>
					<td>
						'.$seatno.'
					</td>
					<td>
						'.$amount.'
					</td>
					<td>
						'.$mobile.'
					</td>
					<td>
						'.$email.'
					</td>
					<td>
						'.$book_time.'
					</td>
					<td>
						 '.$status.' 
				
					</td>
				</tr>

			

            ';
            }
   		}
  	}
  	elseif(isset($_POST['bymultiplex']))
{	
	$multiplex_name=$_POST['bymultiplex'];
	$result = mysqli_query($conn, "SELECT  * FROM shows where multiplex_name = '$multiplex_name'  ") or die(mysql_error());
	while ($row = mysqli_fetch_array($result)) {	
		$show_id =$row['show_id'];
 		
$results = mysqli_query($conn, "SELECT  * FROM ticket where show_id = '$show_id'  ORDER BY `ticket`.`booking_date` DESC") or die(mysql_error());	

        	while ($row = mysqli_fetch_array($results)) {
            $id = $row['ticket_id'];
            $show_id = $row['show_id'];
            $user_id = $row['user_id'];
            $book_time = $row['book_time'];
            $seatno = $row['seatno'];
             $amount = $row['amount'];
            $mobile=$row['mobile'];
            $email = $row['email'];
            $booking_date = $row['booking_date'];
            $status=$row['status'];
            
             
            echo '
            <tr>
					<td>
						'.$id.'
					</td>
					<td>
						'.$show_id.'
					</td>					 
					<td>
						'.$user_id.'  
					</td>
					<td>
						'.$booking_date.'
					</td>
					<td>
						'.$seatno.'
					</td>
					<td>
						'.$amount.'
					</td>
					<td>
						'.$mobile.'
					</td>
					<td>
						'.$email.'
					</td>
					<td>
						'.$book_time.'
					</td>
					<td>
						 '.$status.' 
				
					</td>
				</tr>

			

            ';
            }
   		}

	 
  }   
  	else{
  			$results = mysqli_query($conn, "SELECT  * FROM ticket   ORDER BY `ticket`.`booking_date` DESC") or die(mysql_error());	

        	while ($row = mysqli_fetch_array($results)) {
            $id = $row['ticket_id'];
            $show_id = $row['show_id'];
            $user_id = $row['user_id'];
            $book_time = $row['book_time'];
            $seatno = $row['seatno'];
             $amount = $row['amount'];
            $mobile=$row['mobile'];
            $email = $row['email'];
            $booking_date = $row['booking_date'];
            $status=$row['status'];
            
             
            echo '
            <tr>
					<td>
						'.$id.'
					</td>
					<td>
						'.$show_id.'
					</td>					 
					<td>
						'.$user_id.'  
					</td>
					<td>
						'.$booking_date.'
					</td>
					<td>
						'.$seatno.'
					</td>
					<td>
						'.$amount.'
					</td>
					<td>
						'.$mobile.'
					</td>
					<td>
						'.$email.'
					</td>
					<td>
						'.$book_time.'
					</td>
					<td>
						 '.$status.' 
				
					</td>
				</tr>

			

            ';
            }
   		}
  	  	
  	 
 }


 ?>