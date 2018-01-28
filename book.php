<?php
/**
 * Created by PhpStorm.
 * User: ankit
 * Date: 5/13/2017
 * Time: 10:35 PM
 */

include 'function/function.php';
error_reporting(0);
require 'model/session.php' ;
if(!isset($_GET['movie'])){
	header("location:index.php");
	echo '<script type="text/javascript">
window.location.href = "index.php";</script>  ';
}

?>
<html>
	<head>
		<title>CINEX</title>
		<link rel="stylesheet" type="text/css" href="style/animate.css">
		<link rel="stylesheet" type="text/css" href="style/stylesheet.css">
		<script type="text/javascript" src="script/script.js"></script>
		<script type="text/javascript" src="script/ajax.js"></script>


		<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
		<link rel="stylesheet" type="text/css" href="engine5/style.css" />
		<script type="text/javascript" src="engine5/jquery.js"></script>

		<script type="text/javascript">
			function showDate(str) {

				if (str == "") {
					document.getElementById("select_date").innerHTML = "  ";
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
							document.getElementById("select_date").innerHTML = this.responseText;
						}
					};
					var moviename = "<?php echo  my_crypt($_GET['movie'],'d'); ?>";
					var abc= str;




					var qry_str= "movie=" + moviename +"&q=" + str;

					//xmlhttp.open("GET","getdatetime.php?movie='Raees'&q="+abc ,true);
					xmlhttp.open("GET","getdatetime.php?"+qry_str ,true);
					xmlhttp.send();
				}
			}







			function showTime(str) {

				if (str == "") {
					document.getElementById("select_time").innerHTML = "  ";
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
							document.getElementById("select_time").innerHTML = this.responseText;
						}
					};
					var moviename = "<?php echo   my_crypt($_GET['movie'],'d'); ?>";
					var mov = moviename;


					alert(mov);


					var qry_str= "movie=" + moviename +"&q=" + str;

					//xmlhttp.open("GET","getdatetime.php?movie='Raees'&q="+abc ,true);
					xmlhttp.open("GET","getdatetime.php?"+qry_str ,true);
					xmlhttp.send();
				}

				location.reload();
			}

		</script>
		<!-- End WOWSlider.com HEAD section -->
        <style>
            #book_movie{
                float: left;

                width: 40%;
                padding:50px;
                padding-left: 200px;
            }
            #booking{
                float: left;
                width: 60%;
            }
        </style>
	</head>
	<body>
		 <?php include('header.php');
				include('slider.php');
		 ?>
    <div id="wrapper">
         <div id="book_movie">
                <h2>Movie Info</h2>
             <?php booking_movie(); ?>
         </div>
		 <div id="booking">

            <form name = "booking_form" method="GET" action="select_seat.php" onsubmit="return validateBookForm()">
                <div id="select_multiplex">
                    <h2>  Select Multiplex </h2>

                    <select id= "mult_name" name="multiplex_name" onchange="showDate(this.value)" required>
                        <option value="">Select Multiplex</option>
	                    <?php booking_multiplexlist(); ?>
		             </select>
		        </div>
		         <!--  Ajax Part -->
		         <div id="select_date"></div>
                 <div id="select_time"></div>
		 <!--  -->

		        <br><br>
		         <div>
			         <input type="hidden" name="movie" value="<?php echo  my_crypt($_GET['movie'],'d'); ?>">
					 <select name="no_of_seat"><option>Select How many Ticket Booked</option>
						 <option value="1">1</option><option value="2">2</option><option value="3">3</option>
						 <option value="4">4</option><option value="5">5</option></select><br><br>
			         <input type="submit" id="submitbutton" name="book_submit" value="Go NEXT">
			         <br><br>

		        </div>
            </form>
         </div>

    </div>
		 <?php
				include('footer.php');
		?>

	</body>
</html>
