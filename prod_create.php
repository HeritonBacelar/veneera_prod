<?php   

?>  

<?php include('layout.php')?>   

<main>  
    <section>  
        <h1>teste</h1> 
        <form action= "prod_create.php" method="post">
                <label for="order_number">Order Number:</label>
                <input type="text" id="order_number" name="order_number" required> 

                <label for="veneer_set">Veneer set:</label>
                <select id="aveneer_set" name="veneer_set" required>
                    <option value="">--Select--</option>
                    <option value="top">Top</option> 
                    <option value="bottom">Bottom</option> 
                    <option value="top/bottom">Top and Bottom</option>
                </select>

                <label for="top">Top Inspec:</label>
                <select id="top" name="top" required>
                <option value="">--Select--</option>
                    <option value="IBI">IBI</option> 
                    <option value="IBS">IBS</option> 
                    <option value="doesn't apply">doesn't apply</option> 
                    
                </select> 
                
                <label for="bottom">Bottom Inspec:</label>
                <select id="bottom" name="bottom" required>
                <option value="">--Select--</option>
                    <option value="IBI">IBI</option> 
                    <option value="IBS">IBS</option> 
                    <option value="doesn't apply">doesn't apply</option> 
                    
                </select> 
                

                <label for="IBI_reason">IBI reason:</label>
                <select id="IBI_reason" name="IBI_reason" required>
                <option value="">--Select--</option>
                    <option value="CW">CW</option> 
                    <option value="NET">NET</option> 
                    <option value="doesn't apply">doesn't apply</option> 
                    
                </select> 
                
                <label for="impression_status">Impression status</label>
                <select id="impression_status" name="impression_status" required>
                <option value="">--Select--</option>
                    <option value="Completely wrong ">Completely wrong </option> 
                    <option value="good">good</option> 
                    <option value="partially good">partially good</option> 
                    <option value="unused">unused</option> 
                    
                </select> 
                               

                <label for="info">Info:</label>
                <textarea id="info" name="info" rows="4" required></textarea>

                <input type="submit" name="submit" id="submit" class="send" value="Send">
</form>
    </section>
</main>