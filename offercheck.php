 <?php
 include('model/config.php');

             global $conn;
             session_start();
             $offer_name = $_GET['q'];
             $ticket_id = $_GET['tid'];
             $discount=0;

             /* Check Coupon Detail */

             $query ="SELECT discount from offers where offer_name = '$offer_name' ";


              $result = mysqli_query($conn,$query);
               if (mysqli_num_rows($result) < 1) {
                 echo 'Coupon Code is Not Valid' ;

                }
                


              while ($row = mysqli_fetch_array($result)) {
                 $discount = $row['discount']; 
                 echo 'Apply Sucessfully ! You Have Get '.$discount.' % Discount!';

              }


                     $sql ="SELECT * from ticket where ticket_id = '$ticket_id' ";
                     $results = mysqli_query($conn,$sql);
                      while ($row = mysqli_fetch_array($results)) 
                      {

                            $disc = $row['discount'];
                            $amount = $row['amount'];


                            
                                $dc = (($amount*$discount)/100);
                                $result3 = mysqli_query($conn,"update ticket set discount = ".$dc." where ticket_id = ".$ticket_id);
                              
                                if($result3){
                                 
                                }


                               

                      }       

             


        

?>