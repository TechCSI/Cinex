<?php
/**
 * Created by PhpStorm.
 * User: ankit
 * Date: 5/13/2017
 * Time: 10:35 PM
 */

include 'function/function.php';

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
        <style>
            #content h2{
                background-color: orange;
                margin-top: 0px;
                padding-top: 0px;
                height: 50px;
                line-height: 50px;
                font-size: larger;
                text-align: center;
            }

            #content>div{
                float: left;
                font-size: 18px;

                min-height: 400px;
                padding:25px;
                color: black;

            }
            #content #userinfo{
                width: 40%;
                font-family: "Lucida Sans Unicode", "Lucida Grande";

            }
            #content #userinfo ul{
                margin:0px;
                padding:0px;
            }
            #content #userinfo li{

                margin: 0px;
                width: 100%;
                list-style: none;
                margin-top: 5px;
                padding:5px;

                height: 40px;
                border-radius: 30px;
                line-height: 30px;
                background-color: orange;


            }
            #content #userinfo label{

                display: inline-block;
                margin-left: 20px;
                width: 100px;

            }
            #content #userticket{
                width: 60%;
            }
            #userticket div{
                display: block;
                margin-top: 10px;

            }
            #userticket table{
                height: auto;
                background-color: white;
                width: 100%;
                padding: 10px;

                border: 2px solid black;
                text-align: center

            }
            #userticket td,th{
                width: 100px;

                padding: 5px;
            }
            #userticket th{


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


        </style>
    </head>
    <body>
         <?php include('header.php');

         ?>

         <div id="content">
             <h2> Hello Ankit</h2>
             <div id="userinfo">
                 <h2> Your Information</h2>
                <ul>
                    <li> <label>Name</label> : Ankit Kumar </li>
                    <li><label>Email</label> : techcsgaya@gmail.com </li>
                    <li> <label>Phone</label> : 9771001608 </li>
                    <li> <label>City</label> : Gaya </li>
                    <li> <label>Gender</label> : Male </li>
                    <li> <label>D O B</label> : 05-01-1998 </li>
                </ul>
             </div>

             <div id="userticket">
                 <h2> Panding Tickets</h2>
                 <div id="pandingticket">
                   <table>
                       <tr>

                           <th>
                               Movie Name
                           </th>
                           <th>
                               Multiplex Name
                           </th>
                           <th>
                               Date
                           </th>
                           <th>
                               ShowTime
                           </th>
                           <th>
                               Seat-NO
                           </th>
                           <th>
                               Amount
                           </th>
                           <th>
                               Payment
                           </th>
                       </tr>

                           <?php user_pending_ticket();?>

                   </table>

                 </div>
                 <div id="confirmticket">
                     <h2> Booked Ticket</h2>
                     <table>
                         <tr>
                             <th>
                                 Ticket ID
                             </th>
                             <th>
                                 Movie Name
                             </th>
                             <th>
                                 Multiplex Name
                             </th>
                             <th>
                                 Date
                             </th>
                             <th>
                                 ShowTime
                             </th>
                             <th>
                                 Seat-NO
                             </th>
                             <th>
                                 Amount
                             </th>
                         </tr>
                         <?php user_confirm_ticket();?>
                     </table>
                 </div>
             </div>
         </div>




         <?php
                include('footer.php');
        ?>

    </body>
</html>
