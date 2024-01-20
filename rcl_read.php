<?php  
include_once('dbConnection.php'); 

$result = "";

if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
  
  $result = mysqli_query($conn, "SELECT DISTINCT so.order_name, ro.rcl_date, p.product_name, i.issue_name, s.status
                               FROM shopify_order AS so
                               LEFT JOIN rcl_order AS ro ON so.order_id = ro.order_id 
                               LEFT JOIN rcl_order_product AS rop ON ro.rcl_id = rop.rcl_id 
                               LEFT JOIN product_issue AS pi ON rop.product_id = pi.product_id
                               LEFT JOIN product AS p ON pi.product_id = p.product_id 
                               LEFT JOIN issue AS i ON pi.issue_id = i.issue_id 
                               LEFT JOIN rcl_status AS s ON ro.rcl_status_id = s.rcl_status_id 
                               ORDER BY ro.rcl_id DESC" 
                              );



} else{ 

  echo 'Please submit the form';
}


?>


<table id="data-table">
    <thead>
      <tr>
        <th>Order</th>
        <th>Date</th>
        <th>product</th> 
        <th>Issue</th> 
        <th>Status</th>
        <th class="actions">Actions</th>
      </tr>
    </thead>
    <tbody> 

    <?php   
    
    if (mysqli_num_rows($result) > 0) {
        
    
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) { 
          if(!empty($row['product_name'])) { 
            echo '<tr>';
            echo '<td>' . $row['order_name'] . '</td>';
            echo '<td>' . $row['rcl_date'] . '</td>';
            echo '<td>' . $row['product_name'] . '</td>'; 
            echo '<td>' . $row['issue_name'] . '</td>'; 
            echo '<td>' . $row['status'] . '</td>';
            echo '<td class="actions"> 
                  
                  <i class="fas fa-edit"></i> 
            
                  <i class="fas fa-trash"></i></td>';
            echo '</tr>'; 
          }
            
        }
    
        echo '</table>';
    } else {
        echo 'No data found.';
    }
    
    // Close the connection
    mysqli_close($conn);
    
    
    ?>
     
    </tbody>
</table>

