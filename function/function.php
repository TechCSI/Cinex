<?php
include ('model/config.php');
include ('security.php');






//  Ongoing Movie Function   //
function ongoing_movie()                                                               
{
    global $conn;
    $result = mysqli_query($conn, "SELECT DISTINCT `movie_name` FROM `shows` ") or die(mysqli_error());

    while ($row = mysqli_fetch_array($result)) {

        $movie_name = $row['movie_name'];
       


        $results = mysqli_query($conn, "SELECT DISTINCT * FROM `movies` where movie_name = '$movie_name' ORDER BY `movies`.`open_date` DESC") or die(mysqli_error());

        while ($row = mysqli_fetch_array($results)) {
            $movie_name = $row['movie_name'];
            $certificate = $row['certificate'];
            $duration = $row['duration'];
            $language = $row['language'];
            $image = $row['image'];
            $open_date = $row['open_date'];
              $close_date = $row['close_date'];



            $moviename=my_crypt($movie_name,'e');
if(date("Y-m-d")>$open_date){
    if(date("Y-m-d")<=$close_date)
{

                    echo '
<div id="movie" class="sinmovie">
    <div id="movieimg">

        <img src="admin/image/' . $image . '">
        <div id="imgtext">

            <label class="moviename">' . $movie_name . '</label>
            <label class="moviecert">' . $certificate . '</label><br>
            <label class="movielang">' . $language . '</label>
            <label class="moviedur">' . $duration . '</label>

        </div>
    </div>
    <div id="movietext">
        <center>

            <a href="movie.php?movie=' . $moviename . '"><button>INFO</button></a>
            <br><br>


             
                <button> <a href="book.php?movie=' . $moviename . '"> Book Now</a></button>
 

        </center>
    </div>

</div>';
}

                }
            }
        }

}



function upcoming_movie(){
    global $conn;
    // $conn=	mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());


    $result = mysqli_query($conn, "SELECT DISTINCT * FROM `movies` ORDER BY `movies`.`open_date` DESC") or die(mysql_error());

    while ($row = mysqli_fetch_array($result)) {
        $movie_name = $row['movie_name'];
        $certificate = $row['certificate'];
        $duration = $row['duration'];
        $language = $row['language'];
        $image=$row['image'];
        $open_date = $row['open_date'];
        $moviename=my_crypt($movie_name,'e');


        if(date("Y-m-d")<$open_date){

            echo ' <div id="movie" class="sinmovie">
				<div id="movieimg">
					<img src="admin/image/'.$image.'">
					<div id="imgtext">

						<label class="moviename">'.$movie_name.'</label>
						<label class="moviecert">'.$certificate.'</label><br>
						<label class="reldate"> Release Date :  <b>'.$open_date.'</b></label>

					</div>
				</div>
				<div id="movietext">
					<center>
					<br><br><br>
					<a href="movie.php?movie='.$moviename.'"><button>INFO</button></a>
					<br><br>


					</center>
				</div>

			</div>';
        }
    }


}




function movie_detail(){

    global $conn;
    if(isset($_GET['movie'])) {
        $moviename = $_GET['movie'];
        $moviename = my_crypt($moviename, 'd');
//$conn=	mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());


        $result = mysqli_query($conn, " SELECT * FROM `movies` where `movie_name` = '$moviename'  ") or die(mysqli_error());
        if (mysqli_num_rows($result) < 1) {

            header('location:index.php');

        } else {
            while ($row = mysqli_fetch_array($result)) {
                $movie_name =  $row['movie_name'];
                $open_date = $row['open_date'];
                $close_date = $row['close_date'];
                $movie_desc = $row['movie_desc'];
                $duration = $row['duration'];
                $trailer_link = $row['trailer'];
                $keyword = $row['keyword'];
                $director = $row['director'];
                $actor = $row['actor'];
                $category = $row['category'];
                $language = $row['language'];
                $certificate = $row['certificate'];
                $image = $row['image'];
                $moviename = my_crypt($movie_name,'e');     // To Send Next Page
                if($movie_name==""||$image=="")
                {
                    header('location:index.php');
                }

                echo ' <div id="full">

				<div id="trailer">
				<iframe src= "' . $trailer_link . '" width="95%" height="350" frameborder="1" allowfullscreen></iframe>

				</div>
				<br><br>
				<div id="detail">
					<div id="left">
					    <center>
						<img src="admin/image/' . $image . '">
						<br>
						<form method="POST">
				 <a href="book.php?movie=' . $moviename . '">Book Now</a>
				        </center>
					</form>



</div>
					</div>
				 <div class="right">
					<h3>Movie Name :</h3> ' . $movie_name . ' &nbsp;&nbsp;&nbsp;&nbsp; <h1 style="display:inline">
					<b> ' . $certificate . ' </b></h1><br>

					<h3>Artist :</h3> ' . $actor . ' <br>
					<h3>Dirctor :</h3> ' . $director . ' <br>
					<h3>Language :</h3> ' . $language . ' <br>
					<h3>Release Date :</h3> ' . $open_date . '<br>

					<h3>Catigory :</h3> ' . $category . '<br>
				</div>
				<div style= "display: block;">
				<h2>Movie Desc :</h2><p style="font-size:18px"> ' . $movie_desc . ' </p><br>
				</div>

				</div>





			';
            }
        }
    }
}
function booking_multiplexlist(){


    if(isset($_GET['movie'])){
        $moviename=$_GET['movie'];
        $moviename = my_crypt($moviename,'d');


        global $conn;

        //why Distinct is not working here ?
        $result = mysqli_query($conn, "SELECT DISTINCT multiplex_name FROM `shows` where `movie_name` = '$moviename'  ") or die(mysqli_error());

        while ($row = mysqli_fetch_array($result)) {
            $multiplex_name = $row['multiplex_name'];
            echo  '<option value="'.$multiplex_name.'"> '.$multiplex_name.'</option>';

        }
        if(mysqli_num_rows($result)==0){
            echo '<script>alert("This Movie is Not Running right Now "); window.location.href = "index.php";</script>';

        }

    }
}

function tkt_dtil(){

    $sid= my_crypt($_GET['showid'],'d');
    global $conn;
    ///$conn=	mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());
    $query=  "select * from shows where show_id= '$sid' ";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) < 1) {

        echo '<script>alert(" Dont Be Over Smart !!!! "); window.location.href = "index.php";</script>';

    }
    while ($row = mysqli_fetch_array($result)) {
        $moviename = $row['movie_name'];
        $show_name = $row['show_name'];
        $multiplex_name = $row['multiplex_name'];
        $show_time = $row['start_time'];


    }

    $user_id= $_SESSION['user_id'];
    $query=  "select f_name from user where user_id= '$user_id' ";
    $result = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_array($result)) {
        $name = $row['f_name'];

    }

    $ticket_id =my_crypt($_GET['tid'],'d');



    $query=  "select * from ticket where ticket_id= '$ticket_id' ";
    $results = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) < 1) {

        echo '<script>alert(" Dont Be Over Smart !!!! "); window.location.href = "index.php";</script>';

    }
    while ($row = mysqli_fetch_array($results)) {
        $nos = $row['nos'];
        $seatno = $row['seatno'];
        $booking_date= $row['booking_date'];
        $amount = $row['amount'];
        $email=  $row['email'];
        $phone = $row['mobile'];

        $tax=$amount*0.15;
        $t_amount = $amount+$tax;
    }


    echo '
 		<h3>Presnol Detail</h3>
		 	<label>Name :</label> <label>'.$name.'</label><br>
		 	<label>Email :</label><label>'.$email.'</label><br>
		 	<label>Phone :</label><label>'.$phone.'</label><br>
		<h3>Ticket Detail</h3>
			<label>Movie-Name :</label><label>'.$moviename.'</label><br>
		 	<label>Show-Date :</label><label>'.$booking_date.' </label><br>
		 	<label>Show-Time :</label><label>'.$show_name.' '.$show_time.'</label><br>
		 	<label>Multiplex :</label><label>'.$multiplex_name.'</label><br>
		 	<label>Total Seat :</label><label>'.$nos.'</label><br>
		 	<label>Seat NO :</label><label>'.$seatno.'</label><br>
		 



			';





}
function amnt_dtil(){

    $sid= my_crypt($_GET['showid'],'d');
    global $conn;
    ///$conn=   mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());
    $query=  "select * from shows where show_id= '$sid' ";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) < 1) {

        echo '<script>alert(" Dont Be Over Smart !!!! "); window.location.href = "index.php";</script>';

    }
    while ($row = mysqli_fetch_array($result)) {
        $moviename = $row['movie_name'];
        $show_name = $row['show_name'];
        $multiplex_name = $row['multiplex_name'];
        $show_time = $row['start_time'];


    }

    $user_id= $_SESSION['user_id'];
    $query=  "select f_name from user where user_id= '$user_id' ";
    $result = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_array($result)) {
        $name = $row['f_name'];

    }

    $ticket_id =my_crypt($_GET['tid'],'d');



    $query=  "select * from ticket where ticket_id= '$ticket_id' ";
    $results = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) < 1) {

        echo '<script>alert(" Dont Be Over Smart !!!! "); window.location.href = "index.php";</script>';

    }
    while ($row = mysqli_fetch_array($results)) {
        $discount = $row['discount'];
        $amount = $row['amount'];
        
        $t_amount = $amount;
    }


    echo '
         
        <h3>Amount</h3>
            <label>Total :</label><label>'.$amount.'</label><br>
            
            
            ';
            if($discount!=0){
                $payy= $t_amount-$discount;

                echo '

                 <label>Coupon Discount :</label><label>'.$discount.'</label><br>

                 <label>Sub Total :</label><label>'.$payy.'</label><br>
                
                 ';

            }
            else{

                echo '  <label>Coupon Discount :</label><label>'.$discount.'</label><br>
                <label>Sub Total :</label><label>'.$t_amount.'</label><br>';
            }

             



}





function user_pending_ticket(){
    global $conn;
    $uid= $_SESSION['user_id'];


        $result = mysqli_query($conn, "SELECT  * FROM ticket WHERE user_id = '$uid'AND status = 'false' ") or die(mysqli_error());

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['ticket_id'];
            $show_id = $row['show_id'];
            $book_time = $row['book_time'];
            $seatno = $row['seatno'];
            $amount = $row['amount'];
            $discount=$row['discount'];
            $amount=$amount-$discount;
            $booking_date = $row['booking_date'];
            $today = date("Y-m-d");

            if ($booking_date > $today) {


                $results = mysqli_query($conn, "SELECT  * FROM shows WHERE show_id = '$show_id'") or die(mysqli_error());
                while ($row = mysqli_fetch_array($results)) {
                    $moviename = $row['movie_name'];
                    $show_name = $row['show_name'];
                    $multiplex_name = $row['multiplex_name'];
                    $show_time = $row['start_time'];

                    echo '
            <tr>

					<td>
						' . $moviename . '
					</td>
					<td>
						' . $multiplex_name . '
					</td>
					<td>
						' . $booking_date . '
					</td>
					<td>
						' . $show_time . '
					</td>
					<td>
						' . $seatno . '
					</td>
					<td>
						' . $amount . '
					</td>
					<td>
						<a href="payonline.php?tid=' . my_crypt($id,'e') . '&showid=' . my_crypt($show_id,'e') . '">Payment</a>
					</td>

				</tr>



            ';
                }
            }
        }


}

function user_confirm_ticket(){
    global $conn;
    $uid= $_SESSION['user_id'];


    $result = mysqli_query($conn, "SELECT  * FROM ticket WHERE user_id = '$uid'AND status = 'true' ORDER BY `ticket`.`booking_date` DESC") or die(mysqli_error());

    while ($row = mysqli_fetch_array($result))
    {
        $id = $row['ticket_id'];
        $show_id = $row['show_id'];
        $book_time = $row['book_time'];
        $seatno = $row['seatno'];
        $amount = $row['amount'];
        $discount=$row['discount'];
        $amount=$amount-$discount;
        $booking_date = $row['booking_date'];


        $results = mysqli_query($conn, "SELECT  * FROM shows WHERE show_id = '$show_id' ") or die(mysqli_error());
        while ($row = mysqli_fetch_array($results))
        {
            $moviename = $row['movie_name'];
            $show_name = $row['show_name'];
            $multiplex_name = $row['multiplex_name'];
            $show_time = $row['start_time'];
            echo '
            <tr>
                    <td>
						'.$id.'
					</td>
					<td>
						'.$moviename.'
					</td>
					<td>
						'.$multiplex_name.'
					</td>
					<td>
						'.$booking_date.'
					</td>
					<td>
						'.$show_time.'
					</td>
					<td>
						'.$seatno.'
					</td>
					<td>
						'.$amount.'
					</td>


				</tr>



            ';
        }
    }


}



function booking_movie(){
    global $conn;
    $movie_name=$_GET['movie'];
    $movie_name = my_crypt($movie_name,'d');
    $result = mysqli_query($conn, "SELECT DISTINCT * FROM `movies` where movie_name = '$movie_name' ") or die(mysql_error());
    if (mysqli_num_rows($result) < 1) {

        echo '<script>alert(" Dont Be Over Smart !!!! "); window.location.href = "index.php";</script>';

    }
    else{
    while ($row = mysqli_fetch_array($result)) {
        $movie_name = $row['movie_name'];
        $certificate = $row['certificate'];
        $duration = $row['duration'];
        $language = $row['language'];
        $image = $row['image'];
        $open_date = $row['open_date'];
        $close_date = $row['close_date'];

        echo '
<div id="movie" class="sinmovie">
    <div id="movieimg">

        <img src="admin/image/' . $image . '">
        <div id="imgtext">

            <label class="moviename">' . $movie_name . '</label>
            <label class="moviecert">' . $certificate . '</label><br>
            <label class="movielang">' . $language . '</label>
            <label class="moviedur">' . $duration . '</label>

        </div>
    </div>

</div>';


    }
    }

}

function ticketgenerate(){
    if(isset($_GET['tid']))
    {
    $ticket_id=my_crypt($_GET['tid'],'d');
    $name= strtoupper($_SESSION['name']);

    global $conn;



    $result = mysqli_query($conn, "SELECT  * FROM ticket WHERE ticket_id = '$ticket_id'  ") or die(mysqli_error());
        if(mysqli_num_rows($result)<1)
        {

            header('location:index.php');

        }
    while ($row = mysqli_fetch_array($result))
    {
        $id = $row['ticket_id'];
        $show_id = $row['show_id'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $book_time = $row['book_time'];
        $seatno = $row['seatno'];

        $booking_date = $row['booking_date'];


        $results = mysqli_query($conn, "SELECT  * FROM shows WHERE show_id = '$show_id' ") or die(mysqli_error());

        while ($row = mysqli_fetch_array($results))
        {
            $moviename = $row['movie_name'];
            $show_name = strtoupper($row['show_name']);
            $multiplex_name = strtoupper($row['multiplex_name']);
            $show_time =  $row['start_time']  ;

            echo '
             <div id="ticket">
    <div id="multiplex-information">

        <label id="header"> Cinex || Ticket </label>
        <hr>
        <label class="value">'.$id.'</label>

        <label class="value">'.$multiplex_name.'</label>


    </div>
    <div id="persnol-information">
        <label class="value">'.$name.' </label>

        <label class="value">'.$mobile.'</label>

    </div>
    <div id="ticket-information">
        <label class="value">'.$moviename.'</label> <label class="value"> '.$seatno.'</label> <br>

        <label class="value">'.$booking_date.'</label> <label class="value"> '.$show_name.' '.$show_time.'</label>



    </div>
</div>



            ';
        }
    }

        }
    else{
        header('location:index.php');
    }
}

function movieinfoseat()
{


        global $conn;
        $moviename = $_GET['movie'];
        $select_date = $_GET['select_date'];
        $show_name = $_GET['show_name'];
        $multiplex_name = $_GET['multiplex_name'];


        $result = mysqli_query($conn, " SELECT * FROM `movies` where `movie_name` = '$moviename'  ") or die(mysqli_error());

        while ($row = mysqli_fetch_array($result)) {

            $language = $row['language'];
            $certificate = $row['certificate'];
            $image = $row['image'];


            echo '<img src="admin/image/' . $image . '">
            <br><br>
            <label>' . $moviename . '</label><b>' . $certificate . '</b><hr>
            <label>' . $multiplex_name . '</label><label>' . $language . '</label> <br><br>
            <label>' . $select_date . '</label>
            <label>' . $show_name . '</label><br><br>';
        }

}
?>
