<!DOCTYPE html>
<html>
<head>
    <title>Ticket</title>
    <style type="text/css">
        #ticket{
            margin: auto;
            margin-top: 100px;
            background-image: url('image/page/booking-form-red-bg.jpg');
            background-position: center;
            background-size: cover;
            height: 200px;
            width: 500px;
            padding: 20px;
            border-radius: 15px;

            border: 2px  white;
            border-style: dotted solid;

            font-size: 20px;



        }
        #ticket #header{
            color: white;
            font-size: 22px;
            display: block;
            margin: auto;

        }
        #ticket label{
            display: inline-block;
            width: 200px;
        }
        #ticket div{
            padding: 10px;

            box-shadow: 1px 2px 5px 0px rgba(0, 0, 0, 0.1);
        }
        #button{

            width: 100%;
            height: 50px;
            margin-top: 50px;
            text-align: center;



        }
        #button button{
            display: inline-block;
            margin-left: 25px;
            height: 45px;
            width: 200px;
            font-size: 22px;
            cursor: pointer;
            color: red;
            margin: auto;
            border-radius: 35px;
            background-image: url('image/page/tab-unselect.gif');
            background-position: center;
            background-size: cover;

        }

    </style>
</head>
<body>
 <?php session_start(); include('function/function.php'); ticketgenerate();?>
<div id="button">
    <button id="goback"onclick="gotohome()"> Home </button>
    <button id="print" onclick="pageprint()">PRINT TICKET</button>
    <button id="user"onclick="user()">Your Ticket  </button>
</div>
<script>
    function pageprint() {
        document.getElementById('button').style.display='none';


        window.location.href = "index.php";
        window.print();

    }
    function gotohome() {

        window.location.href = "index.php";


    }
    function user() {


        window.location.href = "user.php";


    }
</script>
</body>
</html>