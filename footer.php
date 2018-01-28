<?php
/**
 * Created by PhpStorm.
 * User: ankit
 * Date: 5/13/2017
 * Time: 11:05 PM
 */
?>

<div id="footer">
    <div id="info">
        <div class="part">
            <h3>Quick Link</h3>

            <ul>
                <li>Careers </li>
                <li>Gaya City</li>
                <li>IMDB</li>
                <li>Carrers</li>
                <li>Contact US</li>
            </ul>

        </div>
        <div class="part">
            <h3>Know us</h3>

            <ul>
                <li>About Us </li>
                <li>Our Vision</li>
                <li>Advertise</li>
                <li>Term &amp; Condition</li>
                <li>Privecy</li>
            </ul>
        </div>
        <div class="part" id="contactus">
            <h3>Contact US</h3>

            <ul>
                <li>Cine<b>X</b></li>
                <li>APR CITY CENTER</li>
                <li>Gaya Bihar</li>
                <li>cinex@gmail.com</li>
                <li>7870271493</li>
            </ul>

        </div>
        <div class="part">
            <h3>Get in Touch</h3>

            <form method="POST" action=""  enctype="text/plain">

                <input type="text" name="name" placeholder="Enter Your Name"><br>
                <input type="email" name="email" placeholder="Enter Your Email"><br>
                <textarea  name="massage" placeholder="Enter Your Massege" rows="4"></textarea><br>
                <input type="submit" id="button" name="mail_submit" value="Send">
            </form>

            <?php
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $from = 'From:techcs';
            $to = 'techcsgaya@gmail.com';
            $subject = 'Hello';

            $body = "From: $name\n E-Mail: $email\n Message:\n $message";
            if ($_POST['mail_submit']) {
                if (mail ($to, $subject, $body, $from)) {
                    echo '<script>alert("Thanks for Contect");</script>';
                } else {
                    echo '<script>alert("Mail not sent");</script>';
                }
            }
            ?>


        </div>

    </div>
    <div class="clear"></div>
    <div>
        <h5>
            The content and images used on this site are copyright protected and copyrights vests with the respective owners. The usage of the content and images on this website is intended to promote the works and no endorsement of the artist shall be implied. Unauthorized use is prohibited and punishable by law.</h5>



        &copy; &amp; All Right Reserved Cine<b>x</b> 2017</div>
</div>

