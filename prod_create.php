<?php  
if (isset($_POST['submit'])) { 
    
    include_once('dbConnection.php'); 
    
    $order_number = $_POST['order_number']; 
    $veneer_set = $_POST['veneer_set'];   
    $top_set = $_POST ['top_set'];  
    $bottom_set = $_POST['bottom_set'];   
    $IBI_reason = $_POST['IBI_reason']; 
    $impression_status = $_POST['impression_status']; 
    $info=$_POST['info'];  
    
    $tableName = "default_table";  

    switch($impression_status){ 
        
        case 'good': 
            $tableName = 'printing_protocol'; 
            break; 
        case 'partially_good': 
            $tableName = 'printing_protocol'; 
            break; 
        
        case 'completely_wrong':  
            $tableName = 'notsuitble_impressions'; 
            break;
        case 'unused': 
            $tableName = 'notsuitble_impressions'; 
            break;

   }
   
 

    $result = mysqli_query($conn, "INSERT INTO $tableName ( 
        
        order_number,  
        veneer_set,  
        top_set,  
        bottom_set,  
        IBI_reason,  
        impression_status,  
        info)  
    
    VALUES ( 
        '$order_number',  
        '$veneer_set',  
        '$top_set',  
        '$bottom_set',  
        '$IBI_reason',  
        '$impression_status',  
        '$info')");

}  

?>  

<?php include('layout.php')?>   

<main>  
    <section>  
        <h1>teste</h1> 
        <form action= "prod_create.php" method="post"> 
            <fieldset> 
            <label for="order_number">Order Number:</label>
                <input type="text" id="order_number" name="order_number" required> 

                <label for="veneer_set">Veneer set:</label>
                <select id="veneer_set" name="veneer_set" required>
                    <option value="">--Select--</option>
                    <option value="top">Top</option> 
                    <option value="bottom">Bottom</option> 
                    <option value="top/bottom">Top and Bottom</option>
                </select> 
                <label for="top_set">Top Inspec:</label>
                <select id="top_set" name="top_set" required>
                <option value="">--Select--</option>
                    <option value="IBI">IBI</option> 
                    <option value="IBS">IBS</option> 
                    <option value="unused">unused</option> 
                    
                </select> 
                <label for="bottom_set">Bottom Inspec:</label>
                <select id="bottom_set" name="bottom_set" required>
                <option value="">--Select--</option>
                    <option value="IBI">IBI</option> 
                    <option value="IBS">IBS</option> 
                    <option value="unused">unused</option> 
                    
                </select> 
                <label for="IBI_reason">IBI reason:</label>
                <select id="IBI_reason" name="IBI_reason" required>
                <option value="">--Select--</option>
                    <option value="CW">CW</option> 
                    <option value="NET">NET</option> 
                    <option value="TG">TG</option>  
                    <option value="unused">unused</option>  
                    <option value="n/a">n/a</option>
                    
                </select> 
                <label for="impression_status">Impression status</label>
                <select id="impression_status" name="impression_status" required>
                <option value="">--Select--</option>
                    <option value="completely_wrong">completely_wrong </option> 
                    <option value="good">good</option> 
                    <option value="partially_good">partially_good</option> 
                    <option value="unused">unused</option> 
                    
                </select> 
                <label for="info">Info:</label>
                <textarea id="info" name="info" rows="4" required></textarea>

                <input type="submit" name="submit" id="submit" class="send" value="Send">     


            </fieldset>
                
           
</form>
    </section>
</main>