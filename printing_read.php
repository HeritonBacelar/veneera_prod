<?php  
include_once('dbConnection.php'); 

$result = mysqli_query ($conn, "SELECT * FROM printing_protocol ORDER BY suitble_id DESC ");

?>

<?php   

include('layout.php');

?>    


<main> 
    <section>  
    <h2>Printing Protocol</h2>
    <table class="sty">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Order Number</th> 
                        <th>Set</th> 
                        <th>Top Inspec</th> 
                        <th>Bottom Inspec</th> 
                        <th>IBI Reason</th> 
                        <th>Impression Status</th> 
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
            echo "<td>" .$res['suitble_id']. "</td>"; 
            echo "<td>" .$res['order_number']. "</td>";    
            echo "<td>" .$res['veneer_set']. "</td>";  
            echo "<td>" .$res['top_set']. "</td>"; 
            echo "<td>" .$res['bottom_set']. "</td>"; 
            echo "<td>" .$res['IBI_reason']. "</td>";  
            echo "<td>" .$res['impression_status']. "</td>"; 
            echo "<td>" .$res['info']. "</td>"; 
            
            echo "<td> 

                      
                        <a class='btn btn-sm btn-danger' href='send_to_finishing.php?suitble_id=$res[suitble_id]' title='send'> 
                         
                        <i class='fa-solid fa-square-check fa-2xl' style='color: #16922f; text-align: right;'></i> 
                        
                        </a>
                 </td>";
            

          echo "</tr>";
        }
        
        ?>
            </table>  



    </section> 


</main>