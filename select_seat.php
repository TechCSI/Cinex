
<?php
/**
 * Created by PhpStorm.
 * User: ankit
 * Date: 5/13/2017
 * Time: 10:35 PM
 */
error_reporting(0);
include 'function/function.php';
require  'model/session.php' ;
?>
<html>
<head>
    <title>CINEX</title>
    <link rel="stylesheet" type="text/css" href="style/animate.css">
    <link rel="stylesheet" type="text/css" href="style/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="style/seat.css">

    <script type="text/javascript" src="script/script.js"></script>

    <link rel="stylesheet" type="text/css" href="engine5/style.css" />
    <script type="text/javascript" src="engine5/jquery.js"></script>
    <style>
        input[type=checkbox],[type=submit]{

            display: inline-block;
            width: 40px;
            text-align: center;
            cursor: pointer;
        }
    </style>

</head>

<?php include('header.php');
include('slider.php');



?>



<div id="booking-process">

    <div id="book_movie">
        <h2>Movie Info</h2>
        <div>
            <?php movieinfoseat();?>
        </div>
    </div>


    <div id="seat-select">
       <center> <h2>Select  Ticket</h2></center>
        <form action="" method="post">
            <table width="30"   cellspacing="3" cellpadding="2">


                </tr><tr></tr>
                <tr>
                    <td colspan="10" align="center" >Silver</td>
                </tr>
                <tr>
                    <td><input class="seatbox"  type="checkbox" name="seat[]" onchange="getValue();" id="1A" value="1A" />
                        <label  for="1A">1A</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="1B" value="1B" />
                        <label for="1B">1B</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="1C" value="1C" />
                        <label for="1C">1C</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="1D" value="1D" />
                        <label for="1D">1D</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]"  onchange="getValue();" id="1E" value="1E" />
                        <label for="1E">1E</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]"  onchange="getValue();"  id="1F" value="1F" />
                        <label for="1F">1F</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]"  onchange="getValue();" id="1G" value="1G" />
                        <label  for="1G">1G</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]"   onchange="getValue();" id="1H" value="1H" />
                        <label for="1H">1H</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]"  onchange="getValue();" id="1I" value="1I" />
                        <label for="1I">1I</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]"  onchange="getValue();" id="1J"  value="1J" />
                        <label for="1J">1J</label></td>
                </tr>
                <tr>
                    <td><input class="seatbox"  type="checkbox" name="seat[]" onchange="getValue();" id="2A" value="2A" />
                        <label  for="2A">2A</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="2B" value="2B" />
                        <label for="2B">2B</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="2C" value="2C" />
                        <label for="2C">2C</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="2D" value="2D" />
                        <label for="2D">2D</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="2E" value="2E" />
                        <label for="2E">2E</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="2F" value="2F" />
                        <label for="2F">2F</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="2G" value="2G" />
                        <label  for="2G">2G</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]"  onchange="getValue();" id="2H" value="2H" />
                        <label for="2H">2H</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="2I" value="2I" />
                        <label for="2I">2I</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="2J"  value="2J" />
                        <label for="2J">2J</label></td>
                </tr>
                <tr></tr><tr></tr><tr></tr>
                <tr>
                    <td colspan="10" align="center"  ;>Gold</td>
                </tr>
                <tr></tr><tr></tr>
                <tr>
                    <td><input class="seatbox"  type="checkbox" name="seat[]" onchange="getValue();" id="3A" value="3A" />
                        <label  for="3A">3A</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="3B" value="3B" />
                        <label for="3B">3B</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="3C" value="3C" />
                        <label for="3C">3C</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="3D" value="3D" />
                        <label for="3D">3D</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="3E" value="3E" />
                        <label for="3E">3E</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]"  onchange="getValue();" id="3F" value="3F" />
                        <label for="3F">3F</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="3G" value="3G" />
                        <label  for="3G">3G</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="3H" value="3H" />
                        <label for="3H">3H</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="3I" value="3I" />
                        <label for="3I">3I</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="3J"  value="3J" />
                        <label for="3J">3J</label></td>
                </tr>
                <tr>
                    <td><input class="seatbox"  type="checkbox" name="seat[]"  onchange="getValue();" id="4A" value="4A" />
                        <label  for="4A">4A</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="4B" value="4B" />
                        <label for="4B">4B</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="4C" value="4C" />
                        <label for="4C">4C</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="4D" value="4D" />
                        <label for="4D">4D</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="4E" value="4E" />
                        <label for="4E">4E</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="4F" value="4F" />
                        <label for="4F">4F</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="4G" value="4G" />
                        <label  for="4G">4G</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="4H" value="4H" />
                        <label for="4H">4H</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="4I" value="4I" />
                        <label for="4I">4I</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="4J"  value="4J" />
                        <label for="4J">4J</label></td>
                </tr>
                <tr>
                    <td><input class="seatbox"  type="checkbox" name="seat[]" onchange="getValue();" id="5A" value="5A" />
                        <label  for="5A">5A</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="5B" value="5B" />
                        <label for="5B">5B</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="5C" value="5C" />
                        <label for="5C">5C</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="5D" value="5D" />
                        <label for="5D">5D</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="5E" value="5E" />
                        <label for="5E">5E</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]"  onchange="getValue();" id="5F" value="5F" />
                        <label for="5F">5F</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="5G" value="5G" />
                        <label  for="5G">5G</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="5H" value="5H" />
                        <label for="5H">5H</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="5I" value="5I" />
                        <label for="5I">5I</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="5J"  value="5J" />
                        <label for="5J">5J</label></td>
                </tr>
                <tr>
                    <td><input class="seatbox"  type="checkbox" name="seat[]" onchange="getValue();" id="6A" value="6A" />
                        <label  for="6A">6A</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="6B" value="6B" />
                        <label for="6B">6B</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="6C" value="6C" />
                        <label for="6C">6C</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="6D" value="6D" />
                        <label for="6D">6D</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="6E" value="6E" />
                        <label for="6E">6E</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="6F" value="6F" />
                        <label for="6F">6F</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="6G" value="6G" />
                        <label  for="6G">6G</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="6H" value="6H" />
                        <label for="6H">6H</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="6I" value="6I" />
                        <label for="6I">6I</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="6J"  value="6J" />
                        <label for="6J">6J</label></td>
                </tr>
                <tr>
                    <td><input class="seatbox"  type="checkbox" name="seat[]" onchange="getValue();" id="7A" value="7A" />
                        <label  for="7A">7A</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="7B" value="7B" />
                        <label for="7B">7B</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="7C" value="7C" />
                        <label for="7C">7C</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="7D" value="7D" />
                        <label for="7D">7D</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="7E" value="7E" />
                        <label for="7E">7E</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="7F" value="7F" />
                        <label for="7F">7F</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="7G" value="7G" />
                        <label  for="7G">7G</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="7H" value="7H" />
                        <label for="7H">7H</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="7I" value="7I" />
                        <label for="7I">7I</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="7J"  value="7J" />
                        <label for="7J">7J</label></td>
                </tr>
                <tr>
                    <td><input class="seatbox"  type="checkbox" name="seat[]" onchange="getValue();" id="8A" value="8A" />
                        <label  for="8A">8A</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="8B" value="8B" />
                        <label for="8B">8B</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="8C" value="8C" />
                        <label for="8C">8C</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="8D" value="8D" />
                        <label for="8D">8D</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="8E" value="8E" />
                        <label for="8E">8E</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="8F" value="8F" />
                        <label for="8F">8F</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="8G" value="8G" />
                        <label  for="8G">8G</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="8H" value="8H" />
                        <label for="8H">8H</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="8I" value="8I" />
                        <label for="8I">8I</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="8J"  value="8J" />
                        <label for="8J">8J</label></td>
                </tr>
                <tr></tr><tr></tr><tr></tr>
                <tr>
                    <td colspan="10" align="center"  >Platinum</td>
                </tr>
                <tr></tr><tr></tr>
                <tr>
                    <td><input class="seatbox"  type="checkbox" name="seat[]" onchange="getValue();" id="9A" value="9A" />
                        <label  for="9A">9A</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="9B" value="9B" />
                        <label for="9B">9B</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="9C" value="9C" />
                        <label for="9C">9C</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="9D" value="9D" />
                        <label for="9D">9D</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="9E" value="9E" />
                        <label for="9E">9E</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="9F" value="9F" />
                        <label for="9F">9F</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="9G" value="9G" />
                        <label  for="9G">9G</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="9H" value="9H" />
                        <label for="9H">9H</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="9I" value="9I" />
                        <label for="9I">9I</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="9J"  value="9J" />
                        <label for="9J">9J</label></td>
                </tr>
                <tr>
                    <td><input class="seatbox"  type="checkbox" name="seat[]" onchange="getValue();" id="10A" value="10A" />
                        <label  for="10A">10A</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="10B" value="10B" />
                        <label for="10B">10B</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="10C" value="10C" />
                        <label for="10C">10C</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="10D" value="10D" />
                        <label for="10D">10D</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="10E" value="10E" />
                        <label for="10E">10E</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="10F" value="10F" />
                        <label for="10F">10F</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="10G" value="10G" />
                        <label  for="10G">10G</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();"  id="10H" value="10H" />
                        <label for="10H">10H</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="10I" value="10I" />
                        <label for="10I">10I</label></td>
                    <td>
                        <input class="seatbox" type="checkbox" name="seat[]" onchange="getValue();" id="10J"  value="10J" />
                        <label for="10J">10J</label></td>
                </tr>
                <tr></tr>
                <tr>
                    <td  colspan="10" align="left"><hr></td>
                </tr>
                <hr style="border-style: outset; border-width: 25px;" >
                <tr>
                    <td  colspan="1" align="left">
                        <label>Hint: </label></td>    </td>
                    <td  colspan="1" align="center"><input  type="checkbox"  disabled />
                        <label>A</label></td>    </td>
                    <td colspan="2" align="center"><label>Booked</label></td>
                    <td  colspan="1" align="center"><input  type="checkbox"  checked />
                        <label>B</label></td>    </td>
                    <td colspan="2" align="center"><label>Selected</label></td>
                    <td  colspan="1" align="center"><input  type="checkbox"   />
                        <label>C</label></td>    </td>
                    <td colspan="2" align="center"><label>Avilable</label></td>
                </tr>

            </table>







    </div>

    <div id="seat_checkout" >
        <h2>Seat Information</h2>
        <div id="seatinfo" style="width: 100%">
            <b> Selected :</b><label id="selectseat"></label><br><br><br>
            <b> Amount : </b><label id="selectseatamount"></label>
        </div>

        <center>
            <h2>Your Information</h2>
            <input type="text" name="mobile" tabindex="2" placeholder="Enter your Mobile No." required pattern="[0-9]{10,10}"><br><br>
            <input type="email" name="email" tabindex="2" placeholder="Enter Your Email" required pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$"><br><br>
            <input type="submit" name="submit" value="Go Next">
        </center>
        </form>
    </div>
</div>



<?php  include('footer.php'); ?>



<?php
global $conn;
$moviename=$_GET['movie'];
$booking_date = $_GET['select_date'];
$show_name=$_GET['show_name'];
$mult_name = $_GET['multiplex_name'];


$result = mysqli_query($conn, "  SELECT * FROM `shows` where `movie_name` LIKE '$moviename' AND `show_name` LIKE '$show_name' AND `multiplex_name` = '$mult_name'  ") or die(mysqli_error());

$count = mysqli_num_rows($result);
if($count==0){

    echo '<script type="text/javascript">alert("NO SHOW Avilable at this time");
            window.location.href = "book.php?movie='.$moviename.'";</script>  ';
    //   header("location:book.php");


}

else{

    while ($row = mysqli_fetch_array($result)) {

        $show_id=$row['show_id'];
        // $sid = $_SESSION['show_id'];


    }

}

if(isset($_POST['submit'])){


    $conn=  mysqli_connect("localhost","root", "","theatermax") or die(mysqli_error());
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    if(isset($_POST['seat'])){

        $t1=implode(',', $_POST['seat']);
        $nos =  explode(',', $t1);
        $ln= $_POST['seat'];

        $count = count($ln);

        $amount = $count * 150;
        $user_id = $_SESSION['user_id'];
        $booking_date = $_GET['select_date'];



        $query = "insert into ticket (`booking_date`,`user_id`,`book_time`,`show_id`,`seatno`,`nos`,`amount`,`mobile`,`email`) values('$booking_date','$user_id',now(),'$show_id','$t1','$count','$amount','$mobile','$email')";
        $res=mysqli_query($conn,$query)or die(mysqli_error());
        if($res){
            $last_id = my_crypt($conn->insert_id,'e');
            $show_id = my_crypt($show_id,'e');


            echo ("<script language='JavaScript'>
         window.location.href='payonline.php?tid=$last_id&showid=$show_id';

       </script>");


        }

        else{
            echo  mysqli_error($res);
        }
    }
    header("location:book.php");

}



function block_seat(){
    global $conn;
    $moviename=$_GET['movie'];
    $booking_date = $_GET['select_date'];
    $show_name=$_GET['show_name'];
    $mult_name = $_GET['multiplex_name'];
    $result = mysqli_query($conn, "  SELECT * FROM `shows` where `movie_name` LIKE '$moviename' AND `show_name` LIKE '$show_name' AND `multiplex_name` = '$mult_name'  ") or die(mysqli_error());


    while ($row = mysqli_fetch_array($result)) {

        $show_id=$row['show_id'];
    }

    $booking_date = $_GET['select_date'];
    $query = "select seatno from ticket where show_id ='$show_id' AND booking_date = '$booking_date' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error()) ;
    $str= "";
    while ($row = mysqli_fetch_array($result)) {
        $tmp = $row['seatno'];

        $cm = ",";
        $str = $str.''.$tmp.''.$cm;
        $seat =  explode(',', $str);
    }
    $ct = count($seat);
    if($ct==0){
        $avl_seat = 100;
    }
    else {
        $avl_seat = 100 - $ct + 1;
    }
    echo "Avilable Seat : " .$avl_seat;
    echo '<script type="text/javascript">
                var abc ="'.$str.'";


       </script>';

}



?>

<script type="text/javascript">
    //var xyz = split(abc);
    var strArray = abc.split(",");
    var count=0;
    // Display array values on page
    for(var i = 0; i < strArray.length; i++){

        var x= strArray[i];
        count++;
        document.getElementById(x).disabled = true;

    }
</script>
<script>
    function getValue() {
        var checkboxes = document.getElementsByName('seat[]');
        var selected = [];

        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                selected.push(checkboxes[i].value);
            }

        }
        if(selected.length>5)
        {   alert("You Have Booked Maximum 5 Seat at a Time")
            document.getElementById(selected[0]).checked = false;
            selected.splice(0, 1);
        }

        document.getElementById("selectseat").innerHTML="["+selected.length+"] "+selected;
        document.getElementById("selectseatamount").innerHTML=150*selected.length;

    }
</script>
</body>
</html>





















