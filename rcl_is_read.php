<?php  
include_once('dbConnection.php'); 

$result = mysqli_query ($conn, "SELECT * FROM rcl_impression_set ORDER BY rcl_is_id DESC ");

?>

<?php   

include('layout.php');

?>    


<main> 
    <section> 
    
    <h2><i class="fa-solid fa-truck-fast"></i> IMPRESSION SETS TO BE SENT</h2>
    <table class="sty">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Order Number</th> 
                        <th>AS/DF</th> 
                        <th>Attempts</th> 
                        <th>Reason</th> 
                        <th>Shipping Cost</th> 
                        <th>Service fee</th>                              
                        <th>Info</th> 
                        <th>Action</th>
                        <!-- Add more headers as needed -->
                    </tr>
                </thead>
                <tbody>
                    
                </tbody> 
                <?php   
        while ($res = mysqli_fetch_assoc($result)){ 

            echo "<tr>"; 
            echo "<td>" .$res['rcl_is_id']. "</td>";   
            echo "<td>" .$res['order_number']. "</td>";  
            echo "<td>" .$res['as_df']. "</td>"; 
            echo "<td>" .$res['attempts']. "</td>"; 
            echo "<td>" .$res['reason']. "</td>"; 
            echo "<td>" .$res['shipping_cost']. "</td>";  
            echo "<td>" .$res['service_fee']. "</td>";   
            echo "<td>" .$res['info']. "</td>"; 
            
            echo "<td> 

                      
                        <a class='btn btn-sm btn-danger' href='rcl_is_delete.php?rcl_is_id=$res[rcl_is_id]' title='send'> 
                         
                        <i class='fa-solid fa-square-check fa-2xl' style='color: #16922f; text-align: right;'></i> 
                        
                        </a>
                 </td>";

          echo "</tr>";
        }
        
        ?>
            </table>  



    </section> 


</main>