<?php 
error_reporting(0);
include 'fun.php';
include 'model/session.php' ;
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="style/stylesheet.css">
	<style type="text/css">

		body{
			min-width: 1080px;
		}
		*{
			box-sizing: border-box;
			padding: 0px;
			margin: 0px;

		}
		a{
			text-decoration: none;
		}
		a:hover{}
		a:active{}
		a:focus{}

		#wrapper{
			width: 100%;
		
			background-color: rgba(0, 0, 0, 0.2);
			

		}
		#header{
			height: 60px;
			width: 100%;
			background-color: orange;
			text-align: center;
			line-height: 60px;

		}
		#header div{
			display: inline-block;
			float: left;
		}
		#header #logo{
			width: 25%

		}
		#header #title{
			text-align: center ;
			width: 50%;
			font-size: 35px;
			line-height: 60px;
		}
		#header #user{
			width: 25%;
		}
		#header #logo img{
			position: absolute;
			height: 50px;
			width: 100px;

		}
		#header #title img{
			position: absolute;
			height: 60px;
			width: 60px;
			border-radius: 50%;
		}
		#header #user img{
			position: absolute;
			height: 50px;
			width: 50px;
			margin: 5px;
			border-radius: 50%;
		}
		#header #user label{
			width: 100px;
			font-size: 20px;
			
			color: white;
			padding: 5px;
			border-radius: 5px;
			margin-right: 20px;
		}

		#header #user #admin{
			display: none;
			width: 160px;
			
			margin-left: -130px;
			margin-top: 60px;
			background-color: rgba(0, 0, 0, 1);
			position: absolute;
			border-radius: 5px;
			padding: 10px;
			color: white;
			box-shadow: 0px 20px 10px 0px rgba(0, 0, 0,0.3);
		}
		#header #user #admin a{
			display: block;
			color: white;
			border-radius: 5px;
		}
		#header #user:hover #admin{
			display: inline-block;
		}
		#header #user #admin li{
			width: 140px;
			margin: auto;
			font-size: 20px;
			list-style: none;
		}#header #user #admin a:hover{
			background-color: white;
			color: black;
		}
		#nav{
			width: 20%;
			float: left;
			padding: 25px;
			background-color: rgba(0, 0, 0, 0.1);



		}
		#nav ul{
		
		}
		#nav li{
			width: 70px;
			list-style: none;
			font-size: 20px;
			
			height: 70px;
			border-radius: 70px;
			margin: 10px;


		}
		
		
		
		#nav li a{
		text-decoration: none;
		height: 70px; 			
		border-radius: 70px;
		width: 100%;
		text-align: right;

		}
		#nav li img{
			display: inline;
			height: 70px;
			width: 70px;
			border-radius: 70px;
			
			
		}
		*:focus{
			outline: none;
		}
		.menulabel{
			position: absolute;
			line-height: 70px;
			display: none;
			transition: 1.5s;
			font-size: 30px;


		}
		
		#nav li:hover .menulabel{
			display: inline-block;
			line-height: 70px;
			margin: auto;
			
			color: white;
			transition: 0.5s;	
			 
		}
		#nav li:hover{
			background-color: red;
			width: 200px;
			transition: 0.5s;

		}




		#main{
			float: left;

			width: 80%;
			background-color: rgba(0, 0, 0, 0.5);
		}
		#main .head div{
			width: 33.33%;
			float: left;
			text-align: center;
			border: 2px red solid;
			font-size: 20px;
			height: 50px;
			padding: 10px;
		}

		#main form{
			width: 60%;
			margin-left: 20%;
			margin-right: 20%;
			margin-top: 20px;
			padding: 20px;
			border-radius: 5px;
			background-color: aqua;
		}
		#main form label{
	 
			display: inline-block;
			width: 40%;
			font-size: 120%;
			margin-right: 5%;
			
			
		}
		#main form input{
	 		display: inline-block;
			width: 40%;
			margin-left: 5%;
			border-radius: 4px;
			text-align: center;
			padding: 5px;
			margin-bottom: 5px;
			border: none;
			

			
		}
		#user table{
			height: auto;
			background-color: white;
			width: 100%;
			padding: 10px;
			margin-top: 50px;
			border: 2px solid black;
			text-align: center

		}
		#user td,th{
			width: 100px;
			
			padding: 5px;
		}
		#user th{
			
			
			background-color: orange;
		}
		 table tr:nth-child(even) {

    background-color: #eee;
    color: black;
}
table tr:nth-child(odd) {
    background-color: #fff;
    color: black;
}
		

.hidden{display: none;}
.inline{display: inline-block;}
	</style>

</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<a href="#"><h1>CineX</h1></a>
		</div>
		<div id="title">
		Admin Panel
		<img class="inline" src="image/admin.png"> 
		
		</div>
		<div id="user">
			
		
			<label> <?php
      error_reporting(0);
      session_start();
      if ($_SESSION["admin"]==null||"") {
         
         header('Refresh: 0; URL = login.html');
      }
      else{
         echo $_SESSION["admin"];
        }
        ?></label>
			<img class="inline" src="image/user.png">
			<div class="hidden" id="admin">
				<ul>
				<!--	 <li><a href="#">View</a></li>
					 <li><a href="#">Edit Detail</a></li>  -->
					 <li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="content">
	<div id="nav">
		<ul>
				<li><a href="../index.php"><img class="inline" src="image/site.png"> <label class="menulabel"> View Site</label></a></li>
				<li><a href="theater.php"><img class="inline" src="image/theater.png"><label class="menulabel"> &nbsp;&nbsp;&nbsp;&nbsp;Theater</label></a></li>
				<li><a href="show.php"><img class="inline" src="image/show.png"><label class="menulabel"> &nbsp;&nbsp;&nbsp;&nbsp;Show</label></a></li>
				<li><a href="movie.php"><img class="inline" src="image/movie.png"><label class="menulabel">&nbsp;&nbsp;&nbsp;&nbsp; Movie</label></a></li>
				<li><a href="user.php"><img class="inline" src="image/user.png"><label class="menulabel">&nbsp;&nbsp;&nbsp;&nbsp; User</label></a></li>
				<li><a href="report.php"><img class="inline" src="image/report.png"><label class="menulabel">&nbsp;&nbsp;&nbsp;&nbsp; Report</label></a></li>

			</ul>
	</div>
	<div id="main">
	<div id="operation"> 
			<div id="add"><form style="margin:0px; width: 100%;padding:0px;" method="post"><select name="bymovie" onchange="this.form.submit()">
				<option value="">Select Movie</option>
				<?php movielist();?>

			</select></form></div>
			<div id="add"><form style="margin:0px; width: 100%;padding:0px;" method="post"><select name="bymultiplex" onchange="this.form.submit()">
				<option value="">Select Multiplex</option>
				<?php multiplexlist();?>

			</select></form></div>
			<div id="add"><form style="margin:0px; width: 100%;padding:0px;" method="post"><select name="bymovie">
				<option>Select Movie</option>
				<?php movielist();?>

			</select></form></div>
		</div>
		 <div id="user">
		<center><h1>Ticket-Detail</h1></center>
			<table id="userinfo"  >
			

				<tr>
					<th>Ticket ID</th>
					<th>Show ID</th>
					<th>User ID</th>
					<th>Booking Date</th>
					<th>Seat No</th>
					<th>Amount</th>
					<th>Mobile</th>
					<th>Email</th>
					<th>Time of Booking</th>
					
					<th>Paid</th>					 

				</tr>
				<?php

ticketinfo();
				?>
			</table>
		</div>
	</div>
	</div>
	 
	<div id="footer">
 
	
		
	</div>

</div>











<script type="text/javascript">
	
</script>
</body>
</html>