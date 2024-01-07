<?php  

//Form for veneer set issues requests 
//The data must be displayed in the rcl_vs_read.php 
if (isset($_POST['submit'])) { 

    include_once('dbConnection.php'); 

    $order_number=$_POST['order_number']; 
    $issue=$_POST['issue']; 
    $issue_date=$_POST['issue_date']; 
    $jaw_color=$_POST['jaw_color']; 
    $shipping_cost=$_POST['shipping_cost'];   
    $service_fee=$_POST ['service_fee'];
    $info=$_POST['info']; 
     

    $result = mysqli_query($conn, "INSERT INTO rcl_veneer_set(order_number, issue, issue_date, jaw_color, shipping_cost, service_fee, info)  
    VALUES ('$order_number','$issue','$issue_date','$jaw_color','$shipping_cost','$service_fee', '$info')");

}


?>  

<?php  

include('layout.php');

?> 


<main> 
    <section> 
    <h2>VENEER REQUESTS</h2>      
    <form action="rcl_vs_create.php" method="post"> 
        <fieldset> 
            <legend>Genera informations</legend> 
            
            <label for="order_number"> Order Number:</label> 
            <input id="order_number" type="text" name="order_number"> 
            
            <label for="jaw_color">Jaw/Color: </label> 
                <select name="jaw_color" id="jaw_color"> 
                    <option value="">--Select--</option>
                    <option value="TN">TN</option> 
                    <option value="TH">TH</option> 
                    <option value="BN">BN</option>
                    <option value="BH">BH</option> 
                    <option value="PN">PN</option> 
                    <option value="PH">PH</option> 
                </select> 
                                    
            <label for="issue">Reason:</label>  
                <select name="issue" id="issue"> 
                    <option value="">--Select--</option>
                    <option value="reorder">Reorder-RO</option> 
                    <option value="offer">Offer/Agreement</option>
                    <option value="Lost">Lost during shipment</option> 
                    <option value="Broken">Broken</option> 
                    <option value="damaged">Damaged during shipment</option> 
                    <option value="Fitting">Does not fit</option> 
                </select> 

                <label for="issue_date"> Date of request:</label>
                <input type="date" class="issue_date" name="issue_date">
                         
        </fieldset> 

        <fieldset> 
            <legend><i class="fas fa-warehouse"></i> Warehouse</legend> 
            <label for="">Action</label> 
            <select name="" id=""> 
                <option value="">Send IBS set</option> 
                <option value="">Send 2x IS </option> 
                <option value="">Send 4x IS </option> 
                <option value="">Send 6x IS </option> 
                <option value="">Send 8x IS </option>
            </select>
        </fieldset> 

        <fieldset> 
            <legend><i class="fa-solid fa-industry"></i> Production</legend> 
            <label for="">Action</label> 
            <select name="" id=""> 
                <option value="">Produce IBS set</option> 
                <option value="">Produce 2x Top</option>
            </select>
        </fieldset>
        
        <fieldset>
           <label for="info">Info: </label>  
            <textarea name="info" id="info" cols="33" rows="5"></textarea>
              
        
        <input type="submit" name="submit" id="submit" class="send" value="Send"> 
        </fieldset>
   

    </form> 

    </section> 

</main>