<?php  

//Form for impression set issues requests 
//The data must be displayed in the rcl_is_read.php  

if (isset($_POST['submit'])) { 

    include_once('dbConnection.php'); 

    $order_number=$_POST['order_number']; 
    $as_df=$_POST['as_df']; 
    $attempts=$_POST['attempts']; 
    $reason=$_POST['reason']; 
    $shipping_cost=$_POST['shipping_cost']; 
    $service_fee=$_POST['service_fee']; 
    $info=$_POST['info']; 

    $result = mysqli_query($conn, "INSERT INTO rcl_impression_set(order_number, as_df, attempts, reason, shipping_cost, service_fee, info)  
    VALUES ('$order_number','$as_df','$attempts','$reason', '$shipping_cost', '$service_fee', '$info')");

}

?>  

<?php  

include('layout.php')

?> 

<main>  
    
<section> 
    
<h1>ADD IMPRESSION SET RECLAMATION</h1>

<!-- Form with additional date, select, and textarea -->
<form action= "rcl_is_create.php" method="post">
                
                 <fieldset> 
                 <label for="order_number">Order Number:</label>
                 <input type="text" id="order_number" name="order_number" required> 
                 
                <label for="as_df">AS/DF:</label>
                <select id="as_df" name="as_df" required>
                    <option value="">--Select--</option>
                    <option value="as">AS</option> 
                    <option value="df">DF</option>
                </select> 
                <label for="attempts">Attempts:</label>
                <select id="attempts" name="attempts" required>
                <option value="">--Select--</option>
                    <option value="2 attempts">2 Attempts</option> 
                    <option value="4 attempts">4 Attempts</option> 
                    <option value="6 attempts">6 Attempts</option> 
                    <option value="8 attempts">8 Attempts</option>  
                </select> 
                <label for="reason">Reason:</label>
                <select id="reason" name="reason" required>
                   <option value="">--Select--</option> 
                    <option value="Lost">Lost</option> 
                    <option value="Agreement">Agreement/Offer</option> 
                    <option value="Offer">Missing material</option> 
                    <option value="Offer">Wrong address</option> 
                    <option value="Offer">Damaged during shipping</option> 
                    <option value="Offer">Keine RO</option> 
                    <option value="Offer">Veneer doesn't fit</option> 
                </select> 
                <label for="info">Info:</label>
                <textarea id="info" name="info" rows="4" required></textarea>

                <input type="submit" name="submit" id="submit" class="send" value="Send">  


                 </fieldset>
               

                
                

                
               <!--  <label for="shipping_cost">Shipping Cost:</label>
                <select id="shipping_cost" name="shipping_cost" required>
                    <option value="">--Select--</option>
                    <option value="paid">Paid</option> 
                    <option value="pending">Pending</option> 
                    <option value="free">Free</option> 
                    <option value="do not apply">Do not apply</option>
                </select> 
                <label for="service_fee">Service fee:</label>
                <select id="service_fee" name="service_fee" required>
                    <option value="">--Select--</option>
                    <option value="paid">Paid</option> 
                    <option value="pending">Pending</option> 
                    <option value="free">Good will</option> 
                    <option value="do not apply">Do not apply</option>
                </select>  
 -->
                
</form>
    <p>teste</p>
    



</section>



</main>

