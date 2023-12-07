<?php  

//Form for veneer set issues requests 
//The data must be displayed in the rcl_vs_read.php 
if (isset($_POST['submit'])) { 

    include_once('dbConnection.php'); 

    $order_number=$_POST['order_number']; 
    $issue=$_POST['issue']; 
    $issue_date=$_POST['issue_date']; 
    $veneer_set=$_POST['veneer_set']; 
    $shipping_cost=$_POST['shipping_cost'];   
    $service_fee=$_POST ['service_fee'];
    $info=$_POST['info']; 
     

    $result = mysqli_query($conn, "INSERT INTO rcl_veneer_set(order_number, issue, issue_date, veneer_set, shipping_cost, service_fee, info)  
    VALUES ('$order_number','$issue','$issue_date','$veneer_set','$shipping_cost','$service_fee', '$info')");

}


?>  

<?php  

include('layout.php');

?> 


<main> 
    <section> 
    <h2>ADD VENEER SET RECLAMATION</h2>      
    <form action="rcl_vs_create.php" method="post">  
        
            <label for="order_number"> Order Number:
                <input id="order_number" type="text" name="order_number"> 
            </label> 
            <label for="issue">Reason: 
                <select name="issue" id="issue"> 
                    <option value="">--Select--</option>
                    <option value="reorder">RO</option> 
                    <option value="offer">Offer/Agreement</option>
                    <option value="Lost">Lost during shipment</option> 
                    <option value="Broken">Broken</option> 
                    <option value="damaged">Damaged during shipment</option> 
                    <option value="Fitting">Fitting</option>  
                </select>
            </label> 
            <label for="issue_date"> Date of request:
                <input type="date" class="issue_date" name="issue_date">
            </label>  
            <label for="veneer_set">Veneer set: 
                <select name="veneer_set" id="veneer_set"> 
                    <option value="">--Select--</option>
                    <option value="Top">Top</option> 
                    <option value="Bottom">Bottom</option> 
                    <option value="Top/Bottom">Top/Bottom</option> 
                    
                </select>
            </label> 
            <label for="shipping_cost">Shipping Cost:</label>
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
            
            <label for="info">Info: 
                <textarea name="info" id="info" cols="33" rows="5"></textarea>
            </label> 
            
        
        <input type="submit" name="submit" id="submit" class="send" value="Send">
    </form> 

    </section> 

</main>