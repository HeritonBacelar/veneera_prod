   <!-- PROCESS --> 

<?php  
include_once('dbConnection.php'); 

$result = mysqli_query ($conn, "SELECT * FROM suitble_impressions ORDER BY suitble_id DESC ");
$ns_result = mysqli_query($conn, "SELECT * FROM notsuitble_impressions ORDER BY notsuitble_id DESC");
$ps_result = mysqli_query($conn, "SELECT * FROM partially_suitble ORDER BY partially_id DESC"); 

?> 





<?php   

include('layout.php');

?>    


<main>
    <!-- SUITBLE IMPRESSIONS --> 
    <section> 
    
    <h2 class="h"><i class="fa-solid fa-print"></i> Suitble</h2>
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

                      
                        <a class='btn btn-sm btn-danger' href='prod_delete.php?suitble_id=$res[suitble_id]' title='send'> 
                         
                        <i class='fa-solid fa-square-check fa-2xl' style='color: #16922f; text-align: center;'></i> 
                        
                        </a>
                 </td>";

          echo "</tr>";
        }
        
        ?>
            </table>  



    </section>  

    <!-- PARTIALLY SUITBLE --> 

    <section> 
    
    <h2 class="h"><i class="fa-solid fa-print"></i> Partially Suitble</h2>
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
        while ($res = mysqli_fetch_assoc($ps_result)){ 

            echo "<tr>"; 
            echo "<td>" .$res['partially_id']. "</td>";   
            echo "<td>" .$res['order_number']. "</td>";  
            echo "<td>" .$res['veneer_set']. "</td>"; 
            echo "<td>" .$res['top_set']. "</td>"; 
            echo "<td>" .$res['bottom_set']. "</td>"; 
            echo "<td>" .$res['IBI_reason']. "</td>";  
            echo "<td>" .$res['impression_status']. "</td>";   
            echo "<td>" .$res['info']. "</td>"; 
            
            echo "<td> 

                      
                        <a class='btn btn-sm btn-danger' href='prod_delete.php?suitble_id=$res[partially_id]' title='send'> 
                         
                        <i class='fa-solid fa-square-check fa-2xl' style='color: #16922f; text-align: center;'></i> 
                        
                        </a>
                 </td>";

          echo "</tr>";
        }
        
        ?>
            </table>   
        
   </section> 

    <!-- NOT SUITBLE -->  

    <section> 
    <h2 class="h"><i class="fa-solid fa-print"></i> Not Suitble</h2>
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
        while ($res = mysqli_fetch_assoc($ns_result)){ 

            echo "<tr>"; 
            echo "<td>" .$res['notsuitble_id']. "</td>";   
            echo "<td>" .$res['order_number']. "</td>";  
            echo "<td>" .$res['veneer_set']. "</td>"; 
            echo "<td>" .$res['top_set']. "</td>"; 
            echo "<td>" .$res['bottom_set']. "</td>"; 
            echo "<td>" .$res['IBI_reason']. "</td>";  
            echo "<td>" .$res['impression_status']. "</td>";   
            echo "<td>" .$res['info']. "</td>"; 
            
            echo "<td> 

                      
                        <a class='btn btn-sm btn-danger' href='prod_delete.php?suitble_id=$res[notsuitble_id]' title='send'> 
                         
                        <i class='fa-solid fa-square-check fa-2xl' style='color: #16922f; text-align: center;'></i> 
                        
                        </a>
                 </td>";

          echo "</tr>";
        }
        
        ?>
            </table>    

    </section>


</main>