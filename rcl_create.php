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
        
    $shopify_order_res = mysqli_query($conn, "INSERT INTO shopify_order (order_name) 
                                              VALUES ('$shopify_order')"); 
    
    $lastInsertedId = mysqli_insert_id($conn);
    

    $rcl_order_res = mysqli_query($conn, "INSERT INTO rcl_order (rcl_date, order_id, rcl_status_id) 
                                          VALUES ('$rcl_date', '$lastInsertedId','$rcl_status')"); 
    
    $lastInsertedId = mysqli_insert_id($conn);

    $rcl_order_product_res = mysqli_query($conn, "INSERT INTO rcl_order_product (rcl_id, product_id) 
                                                  VALUES ('$lastInsertedId', '$product')"); 

   
    $product_issue_res = mysqli_query ($conn, "INSERT INTO product_issue(product_id, issue_id)  
                                               VALUES ('$product', '$issue')"); 
    header('Location: layout.php');
        


    } else { 

        echo 'insert all the data';
    };

   
   }
?>  

<?php include('layout.php'); ?>  

<div id="main-content">
  <button class="open-form-button" onclick="openUserForm()">New RCL Order</button>
  <input type="text" id="search-bar" placeholder="Search...">

  <!-- User Form Modal -->
<div id="user-form-modal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeUserFormModal()">&times;</span>
       
      <!-- <h2 style="text-align: center;">New RCL order</h2> -->
      <!-- Your form elements go here -->
    <form action="rcl_create.php" method="post">
    <label for="shopify_order">Order:</label>
    <input type="text" id="shopify_order" name="shopify_order"> 
    
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

