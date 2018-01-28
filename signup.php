 <?php

 
//var $error="";
   
require('model/config.php');

 //$conn=	mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());

 $name = mysqli_real_escape_string($conn,$_POST['name']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $number = mysqli_real_escape_string($conn,$_POST['number']);
 $password = mysqli_real_escape_string($conn,$_POST['password']); 

/*
//$otp = rand(1000,9999);
$otp = '';
for($i=4;$i>0;$i--){
    $otp = $otp.chr(rand(48,57)); 

     
}


$to = $email;
$subject = "Cinex OTP Verifier";

$message = " Your OTP for Signup on CINEX : $otp ";
  
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "'Content-type: text/html; charset=iso-8859-1'" . "\r\n";

// More headers
$headers = 'From: <techcsgaya@gmail.com>';


if(mail($to,$subject,$message,$headers)){

echo '<script>alert(" OTP been sent to your email .Please Verify ! '.$otp.'  ");</script>';
	}
	else{
		
		echo '<script>alert("Errror in sending OTP");</script>';
	}
 
 

 function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); var temp = parseInt(answer); </script>");

        $answer = "<script type='text/javascript'> document.write(temp); </script>";
        return($answer);
    }

 
    //program
    $prompt_msg = "Enter OTP Code";
    $name = prompt($prompt_msg);

   $otprecv =  $name;
  
 if(intval($otp)==$otprecv) 

{

	*/

$query="INSERT INTO `user` (`mobile`, `email`, `password`, `f_name`,``date_add )VALUES ('$number', '$email', '$password', '$name',now())";



if (mysqli_query($conn, $query)) {

 session_start();
 $id = $conn->insert_id;
$_SESSION['username'] = $email;
$_SESSION['user_id'] = $id;
$_SESSION['name'] = $name;



echo '<script>alert( "sign up sucessfully " );
		window.location.href="index.php";</script>';
   
  //  header("location: login.php");
    } 

else {
	 echo '<script>alert( "This Email or Phone is Already Registered !!! " );
		window.location.href="login.php";</script>';
     
}

/*
}

-   $otprecv";

}
 
else{

	echo  "Your provided otp is not valid $otp --
 */

 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    
     ?> 