<?php 
error_reporting(0);
include 'fun.php';
include 'model/session.php' ;
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	 
	<script type="text/javascript" src="script/jquery.js"></script>
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
			margin-top: 10px;
			
			
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
			

			
		}#main form select{
	 		display: inline-block;
			width: 40%;
			margin-left: 5%;
			border-radius: 4px;
			text-align: center;
			padding: 5px;
			margin-bottom: 5px;
			border: none;
			

			
		}
		#main form input[type=submit]{
	 		display: inline-block;
			width: 60%;
			margin-left: 20%;
			border-radius: 20px;
			text-align: center;
			padding: 5px;
			margin-bottom: 5px;
			border: none;
			font-size: 20px;
			color: green;

			
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
	

	#operation {
  margin-top: 5px;
  width: 100%;
 
  text-align: center;
  margin-bottom: 20px;

  }

#operation div{
  float: left;
  width: 31%;
  height: 50px;
  margin: 1%;
  border-radius: 25px;
  line-height: 50px;
  color: orange;
  background-color: #fff;
  border: 1px solid orange;
  font-size: 20px;


}
#operation div a{
  display: block;
  color: orange;
  border-radius: 25px;
cursor: pointer;

}
#operation div  a:hover{
  
  background-color: orange;
  color: white;
  cursor: pointer;


}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 20px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
		
#conpass{
 
background-color: rgba(100, 100, 100, 0.8);
position: fixed;
width: 500px;
height:200px;
margin-top: 50px;
margin-left: 300px;
 padding: 25px;
 
}
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
		

<div id="id01" class="modal"> 
  <form name = "addshow" class="modal-content animate" action="addshow.php" method="POST" onsubmit="return validateBookForm()">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>      
    </div>
    <div class="container">
					<h1>Add Show</h1>
					<br><hr><br>

						<label>Multiplex Name</label><select name="multiplex_name" required><option value="">Select Multiplex </option>
						 <?php multiplexlist(); ?>
						</select><br>
						 
						 
						<label>Movie Name</label><select name="movie_name" required><option value="">Select movie </option>
						<?php movielist(); ?>
						 
						</select> <br>

						<label>Show Language</label><select name="show_language" required><option value="">Show Language </option>
						<option value="hindi">Hindi</option>
						<option value="english">English</option>
						<option value="bhojpuri">Bhojpuri</option>
						</select> <br>
						 
						<label>Start Date </label><input class="choose_date" type="date" name="start_date" required> <br>
						<label>End Date</label><input class="choose_date" type="date" name="end_date" required><br>
						<label>Show Time</label><select name="show_time" required><option value="">Show Time </option>
						<option value="mornning">Mornning ( 9:00 - 12:00)</option>
						<option value="midday">Mid-Day ( 12:00 - 3:00)</option>
						<option value="evenning">Evenning( 4:00 - 7:00)</option>
						<option value="night">Night ( 7:00 - 10:00)</option>
						</select><br><br>
						 
						<input type="submit" name ="addshow" value="Add Show">
				 
      
    </div>   
  </form>
</div>




	<div id="operation">
			<div id="add"> 
			<a  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add Show</a></div>
			 
		</div>
		 <div id="user">
		
			<table id="userinfo"  >
			<caption>Shows Information</caption>

				<tr>
					<th>Show ID</th>
					<th>Multiplex Name</th>
					<th>Movie Name</th>
					<th>Language</th>
					<th>Show Name</th>
					<th>Start Time</th>
					<th>End Time</th>
					<th>Start Date</th>
					<th>End Date</th>
					
					<th>Delete User</th>

				</tr>
				<?php

showinfo();
				?>
			</table>
		</div>
	</div>
	</div>
	 
	<div id="footer">
 
	
		
	</div>

</div>
 

<script type="text/javascript">
	 
 function validateBookForm() {

        var x = document.forms["addshow"]["start_date"].value;
        var y = document.forms["addshow"]["end_date"].value;
 

 //   errror not solved
 
        var q = new Date();
		var m = q.getMonth()+1;
		var d = q.getDay();
		var y = q.getYear();

		var date = new Date(m,d,y);
		 

	 
        if(x<date ){
            alert("Cannt Add show in Previous Day");
            return false;
        }
        if(x<date ){
            alert("End Date is must greater than start date");
            return false;
        }
        




    }
   </script>
</body>
</html>
<?php
if(isset($_GET['show_id']))
{
	echo '<div id="conpass">

	<h2> Enter Admin Password To Delete : </h2>
	<form class="model" action="delshow.php"  method="POST">
	<input type = "hidden" name="show_id" value = "'.$_GET['show_id'].' ">
	<input type="password" name="password" placeholder="Enter Admin Password">
	<input type="submit" name="showconfirm" value="Delete">
</form></div>';
}
?>