<?php
/**
 * Created by PhpStorm.
 * User: ankit
 * Date: 5/13/2017
 * Time: 10:35 PM
 */

error_reporting(0);
include 'function/function.php';
require 'model/session.php' ;

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



            <script type="text/javascript">
            function refresh() {

    setTimeout(function () {
        location.reload()
    }, 1000);
}
            function check(str) {
                if (str == "") {
                    document.getElementById("msg").innerHTML = " ";
                    return;
                } else {
 
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }

                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("msg").innerHTML = this.responseText;
                        }
                    };
                     

                    var ticket_id = "<?php echo my_crypt($_GET['tid'],'d'); ?>";


                    var qry_str= "tid=" + ticket_id +"&q=" + str;



                    //xmlhttp.open("GET","getdatetime.php?movie='Raees'&q="+abc ,true);
                    xmlhttp.open("GET","offercheck.php?"+qry_str ,true);
                    xmlhttp.send();

                }
                refresh();
            }
            </script>

    </head>
    <body>
         <?php include('header.php');

         ?>
         <div id="chkout">
	<h1 align="center">::::::::::::: Booking Summary ::::::::::::</h1>
		 <div id= "tkt_dtl">
		  <?php
           tkt_dtil();

		  ?>
         </div>



         <div id="payment">
          <?php
           amnt_dtil();

          ?>
          <br>
            
             

             
             <form method="POST" action="" onsubmit="loading()">
                <label>Promo Code</label><input type="text" name="coupon" placeholder="Enter Promo Code"  onchange="check(this.value)">
                <p id="msg"></p>
                <br>
                <h2>Online Payment</h2>
                 <label>Card No</label>
                 <input type="number" name="cardno" placeholder="Enter Your Card Number" required pattern="[0-9]{16,16}"><br>
                 <label>Expire Month</label>
                 <input type="number" name="month" placeholder="Enter Month" required min ="1" max="12" required pattern="[0-9]{1,2}"><br>
                 <label>Expire Year</label>
                 <input type="number" name="year" placeholder="Enter Year " required min ="2017" max="2030" required pattern="[0-9]{4,4}><br>
                 <label>CVV CODE</label>
                 <input type="number" name="cvv" required pattern="[0-9]{3,3}"><br>
                 <label>Name On Card</label>
                 <input type="text" name="cardholder" required><br>
                 <br>
                 <input type="submit" name="cardsubmit" value="PAY NOW">
             </form></div>

         <?php
        
         if(isset($_POST['cardsubmit']))
         {
             global $conn;
             session_start();
             $ticket_id=my_crypt($_GET['tid'],'d');
             $show_id = my_crypt($_GET['showid'],'d');
             $user_id = $_SESSION['user_id'];



//Insert Data To  Payment //
             $cardno = $_POST['cardno'];
             $cvv = $_POST['cvv'];
             $cardholder = $_POST['cardholder'];

             $sql= "SELECT * FROM `ticket` WHERE `ticket_id` = $ticket_id ";

             $result = mysqli_query($conn,$sql);
             if (mysqli_num_rows($result) < 1) {

                 echo '<script>alert(" Dont Be Over Smart !!!! "); window.location.href = "index.php";</script>';

             }
             while ($row = mysqli_fetch_array($result )) {

                 $status=$row['status'];
                 $email =$row['email'];
                 $date = $row['booking_date'];
                 $seat_no = $row['seatno'];
                 if($status!="true")
                 {

                     $query = "INSERT INTO `payment` (  `user_id`, `ticket_id`, `show_id`, `card_no`, `cvv`, `cardholder`) VALUES (  '$user_id', '$ticket_id', '$show_id', '$cardno', '$cvv', '$cardholder')";



                     if (mysqli_query($conn, $query)) {
                         mysqli_query($conn, "UPDATE `ticket` SET `status` = 'true' WHERE `ticket`.`ticket_id` = $ticket_id");


                         $result =  mysqli_query($conn, "select * from shows WHERE show_id = '$show_id' ");
                         if (mysqli_num_rows($result) < 1) {

                             echo '<script>alert(" Dont Be Over Smart !!!! "); window.location.href = "index.php";</script>';

                         }
                         while ($row = mysqli_fetch_array($result )) {

                             $movie = $row['movie_name'];
                             $start_time = $row['start_time'];
                             $end_time = $row['end_time'];


                             $to = $email;
                             $subject = "Cinex Movie Ticket";

                             $message = " Hello $email \r\n You Have Sucessfully Booked Ticket \r\n Ticket ID = $ticket_id \r\n Seat No  = $seat_no \r\n  Movie Name = $movie\r\n Date = $date \r\n Show Time  = $start_time -- $end_time \r\n please show this massage on Counter ";
                             /*
                             $message = '
                                 <html>
                                 <head>
                                     <title>Cinex Ticket</title>
                                 </head>
                                 <body>
                                     <h1>Thanks you for joining with us! '.$email.'</h1>
                                     <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
                                         <tr>
                                             <th>Ticket ID </th><td>'.$ticket_id.'</td>
                                         </tr>
                                         <tr style="background-color: #e0e0e0;">
                                             <th>Seat No</th><td>'.$seat_no.'</td>
                                         </tr>
                                         <tr>
                                             <th>Movie Name</th><td>'.$movie.'</td>
                                         </tr>
                                          <tr style="background-color: #e0e0e0;">
                                             <th>Date</th><td>'.$date.'</td>
                                         </tr>
                                         <tr>
                                             <th>Time</th><td>'.$start_time.' -- '.$end_time.'</td>
                                         </tr>
                                     </table>
                                 </body>
                                 </html>';
                             */

                             $headers = "MIME-Version: 1.0" . "\r\n";
                             $headers .= "'Content-type: text/html; charset=iso-8859-1'" . "\r\n";

// More headers
                             $headers = 'From: <techcsgaya@gmail.com>';


                             if(mail($to,$subject,$message,$headers)){
                                 echo '<script>alert(" Ticket has been sent to your email address \n Show at counter to collect Ticket  ");</script>';
                             }
                             else{
                                 $msg =  "";
                                 echo '<script>alert("Errror in sending Ticket  ! Print Ticket from here !! \n  Error Massage : '.$msg.' ");</script>';
                             }

                            $ticket_id = my_crypt($ticket_id,'e');

                             echo '<script>

			window.location.href="bookingticket.php?tid='.$ticket_id.'";
  </script>';

                         }

                     }
                     else {
                         echo "Error: " . $query . "<br>" . mysqli_error($conn);

                         echo '<br> <br> <a href = "#">Go Back </a>';
                     }
//  End of Payment //
                 }
                 else{
                     echo '<script>
			alert("Aleady  Booked : ");
			window.location.href="index.php";
  </script>';
                 }
             }
         }
         ?>

         </div>
         <?php
                include('footer.php');
        ?>
<script type="text/javascript">
  
</script>

    </body>
</html>
