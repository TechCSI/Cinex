<?php
/**
 * Created by PhpStorm.
 * User: ankit
 * Date: 5/13/2017
 * Time: 11:04 PM
 */
?>
<style type="text/css">
	#loading{
		position: fixed;
		
		z-index: 9999;
		background-image: url('image/loading.gif');
		background-repeat: no-repeat;

      background-position: center;
       

	}
	 
</style>
<div id="loading">
			
</div>
<header id="head">

		<div id="logo" title="CINEX">
   			 Cine<b>X</b>
		</div>
		<div id="menu">
			<ul id="main-menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="#movieshow">Movie</a></li>
				<li><a href="feedback.php">FeedBack</a></li>
				<li><a href="#contactus">Contact</a></li>
				<li><a href="aboutus.php">About</a></li>
			</ul>
		</div>
		<div id="contact">
			<a target="_blank" href="https://www.facebook.com/ankit.badhani3"><img src="image/png/facebook.png"></a>
			<a target="_blank" href="https://www.instagram.com/sining_star_ankit"><img src="image/png/instagram.png"></a>
			<a target="_blank" href="https://twitter.com/siningStarAnkit"><img src="image/png/twitter.png"></a>
		</div>
		<div id="user">

			<div id="usertext">
			  <?php
      			error_reporting(0);
      			session_start();
      			if ($_SESSION["username"]==null || "") {
          			echo '<a  href="login.php" style="text-decoration:none">Login</a><br />
          	</div>
        	<div id="userimg1">
				<a href="user.php">vvv</a>
        	</div>';


      		}
      		else{

         		 echo '<a href="logout.php" style="text-decoration:none">LogOut</a><br />
          </div>
        <div id="userimg">
				<a href="user.php">vvv</a>

        </div>';


      }
        ?>

</div>
			</div>
</header>
