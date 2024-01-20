<?php 

include_once('dbConnection.php'); 

if (isset($_POST['submit'])) { 
    
    $shopify_order = $_POST['shopify_order']; 
    $rcl_date = $_POST['rcl_date']; 
    $product = $_POST['product']; 
    $issue = $_POST['issue']; 
    $rcl_status = $_POST['rcl_status']; 
    $info = $_POST['info']; 

    if (!empty($shopify_order)
        && !empty($rcl_date)  
        && !empty($product)  
        && !empty($issue) 
        && !empty($rcl_status)    
        && !empty($info)) {  

        // Fetch the specific shopify_order data
        $shopify_order_query = mysqli_query($conn, "SELECT * FROM shopify_order WHERE order_name = '$shopify_order'"); 
        $shopify_order_data = mysqli_fetch_assoc($shopify_order_query);

        // Check if the shopify_order exists
        if ($shopify_order_data) {
            $rcl_order_res = mysqli_query($conn, "INSERT INTO rcl_order (rcl_date, order_id, rcl_status_id) 
                            VALUES ('$rcl_date', '$shopify_order_data[order_id]', '$rcl_status')"); 

            $lastInsertedId = mysqli_insert_id($conn);

            $rcl_order_product_res = mysqli_query($conn, "INSERT INTO rcl_order_product (rcl_id, product_id) 
                                    VALUES ('$lastInsertedId', '$product')"); 

            $product_issue_res = mysqli_query($conn, "INSERT INTO product_issue (product_id, issue_id)  
                                    VALUES ('$product', '$issue')"); 

            header('Location: layout.php');
        } else { 
          echo '<script> alert("Shopify Order does not exist");</script>';
            /* echo 'Shopify Order does not exist'; */
        }
    }
}
?>


<?php include('layout1.html'); ?>   

<!--------------------------------------------------------- Form --------------------------------------------------------------->

<div id="main-content">
  <button class="open-form-button" onclick="openUserForm()">New RCL Order</button> 
  
  
  
  <input type="text" id="search-bar" placeholder="Search...">

  <!-- User Form Modal -->
<div id="user-form-modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeUserFormModal()">&times;</span>
       
      <!-- <h2 style="text-align: center;">New RCL order</h2> -->
      <!-- Your form elements go here -->
    <form  action="rcl_create.php" method="post">
    <label for="shopify_order">Order:</label>
    <input type="text" id="shopify_order" name="shopify_order" autocomplete="off">  
    
   
    
    <label for="rcl_date">Date:</label>
    <input type="date" id="rcl_date" name="rcl_date"> 
    
    <label for="product">Product:</label>
    <select id="product" name="product">
        <?php 
        $product = mysqli_query($conn, "SELECT * FROM product"); 
        while ($p = mysqli_fetch_array($product)){ 
        ?>  
        <option value="<?php echo $p['product_id']?>"><?php echo $p['product_name']?></option> 
        <?php } ?>
    </select> 
    
    <label for="issue">Issue:</label>
    <select id="issue" name="issue">
        <?php 
        $issue = mysqli_query($conn, "SELECT * FROM issue"); 
        while ($i = mysqli_fetch_array($issue)){ 
        ?>  
        <option value="<?php echo $i['issue_id']?>"><?php echo $i['issue_name']?></option> 
        <?php } ?>
    </select> 
    <label for="rcl_status">Status:</label> 
    <select id="rcl_status" name="rcl_status">
        <?php 
        $rcl_status = mysqli_query($conn, "SELECT * FROM rcl_status"); 
        while ($s = mysqli_fetch_array($rcl_status)){ 
        ?>  
        <option value="<?php echo $s['rcl_status_id']?>"><?php echo $s['status']?></option> 
        <?php } ?>
    </select> 
    
    <label for="info">Info:</label>
    <textarea id="info" name="info" rows="1"></textarea>

    <input type="submit" name="submit" id="submit" class="send" value="Send">  
</form> 

</div> 


</div>  
<!--------------------------------------------------------- Script for autocomplete  ---------------------------------------------------------> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>  

<script> 


aData = {}
 $( "#shopify_order" ).autocomplete({
      source: function(request, response){ 
        $.ajax({ 
		
		url:'http://localhost/veneera_prod/server.php', 
		type: 'GET', 
		dataType: 'json', 
		success: function(data) { 
		//console.log(data) 
		aData = $.map(data, function(value,key){ 
		
		return { 
		
		id:value.order_id, 
		label:value.order_name
		
		};
		
		
		}); 
		//console.log(aData) 
		var results = $.ui.autocomplete.filter(aData, request.term); 
		response(results);
		
		}
		 
		
		
		})	  
	  
	  }
 });

</script>


<!--------------------------------------------------------- RCL READ here --------------------------------------------------------->
<?php include('rcl_read.php'); ?>

</div>

