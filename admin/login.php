<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/animate.css">
    


<?php

 
$error="";



   session_start();
 require('model/config.php');


if (isset($_POST['uid']) and isset($_POST['pwd'])){

//$username = $_POST['uid'];
//$password = $_POST['pwd'];
 $username = mysqli_real_escape_string($conn,$_POST['uid']);
 $password = mysqli_real_escape_string($conn,$_POST['pwd']); 

$query = "SELECT * FROM `admin` WHERE admin_email='$username' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
 while ($row = mysqli_fetch_array($result)) {
     
 }
if ($count == 1){

$_SESSION['admin'] = $username;
header("location:index.php");

}


else{


  $error = "Your Login Name or Password is invalid";


}
}



 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 ?> 
<head>
  <title>Login-Window</title>
  <link rel="stylesheet" type="text/css" href="style/stylesheet.css">
  <style type="text/css">
   body{
      background-image: url('image/Relax.jpg');
      
      background-repeat: no-repeat;
      background-position: center;
       background-size: cover;
    }

  header{
    text-align: center;
  }
 #frm{
    box-sizing: border-box;
    width: 1080px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 15px;
    //background-color: rgba(111, 121, 222, .8); 
    padding: 100px;

  }
    form{
      width: 500px;
      margin-left: auto;
      margin-right: auto;
      
      background-color: rgba(211, 221, 222, .8);
      padding: 25px;
      font-size: 22px;
      border-radius: 4px;
    }
    label{
      display: inline-block;
      width: 200px;
      height: 35px;
      margin: 10px;

    }
    input{
      width: 250px;
      height: 35px;
      text-align: center;
      border-radius: 35px;

    }
    input:focus{
      outline: none;
      background-color: rgba(32, 178, 170, 0.1);
      font-size: 18px;
    }
     #button{
      width: 100%;
    
      font-size: 20px;
      background-color: lightseagreen;
    }
    #button-small{

       width: 200px;
      margin-left: 25px;
      font-size: 18px;
      background-color: lightpink;
    }
    
  form h2{
    padding-top: 5px;
    background-color: orage;
    text-align: center;
    font-size: 30px;
    color: red;
    margin: 0px;
    
  } 

  #form-login{
  
   margin-top: 100px;  
  
  }
  #form-signup{
    display: none;
    margin-top: 100px;

  }
  input{
    width: 200px;
    height: 35px;
    margin: 5px;
    border-radius: 35px;
    text-align: center;
    outline: none;
    
  }
  label{
    width: 200px;
    height: 30px;
    margin: 5px;
    text-align: left;
    display: inline-block;
    
  }
  input[type=submit]{
    border: none;
    font-size: 18px;
    height: 35px;
    width: 200px;
    box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.3);
    
  }
   input[type=button]{
    border: none;
    font-size: 18px;
    height: 35px;
    width: 200px;
    box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.3);
    
  }
  input[type=submit]:hover{
    background-color: lightgreen;

  }
  #button {
    display: inline;
    height: 35px;
    width: 150px;
    margin-left: 25px;
    background-color: lightgreen;
  }
  h3{
    display: inline-block;
  }
  *:focus{
        outline: none;
      }
      input:focus:invalid{ /* when a field is considered invalid by the browser */

        box-shadow: 0 0 5px #d45252;
        border-color: #b03535
      }

      input:required:valid { /* when a field is considered valid by the browser */
        box-shadow: 0 0 5px #5cd053;
        border-color: #28921f;
      }
 
  .footer{
    text-align: center;
    margin-top: 50px;
    font-size: 22px;
  }

  </style>
<link rel="stylesheet" type="text/css" href="style/animate.css">  
</head>
<body>
 
  

  <main>
 
         <form class=" amimate slideIn" id="form-login" method="POST" action=" " >     <h2> Login Form</h2><hr>
<label>Email</label>         
<input type="email" name="uid" placeholder="enter your Email" required pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$"><br>
<label>Password</label>         <input type="password" name="pwd" placeholder="Enter your password" required minlength="6" maxlength="20" pattern="^[A-Za-z0-9._%+-@$]{6,20}"><br><br> 
      <center>        
      <input type="button" name="forgetpasswd" value="Forget Password">    
          <input type="submit" name="submit" value="Sign-In">       
 <h2 style = "text-align:center; font-size:16px; color:#cc0000; margin-top:10px"><?php echo $error; ?></h2>
        </form>
    
    
      

       
    </div>
   
  </main>
  </div>
  <div class="footer">
      &copy; &amp; All Right Reserved Theater<b>Max</b> 2017
    </div>

 
 
 

</body>
</html>