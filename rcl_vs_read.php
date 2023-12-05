<?php   

include_once('dbConnection.php');  

$result = mysqli_query($conn, "SELECT * FROM rcl_veneer_set ORDER BY rcl_vs_id DESC");

?>   

<?php    

include('layout.php'); 

?>   

<main> 
    <section> 
    <table> 
    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Order Number</th> 
                        <th>Issue</th> 
                        <th>Issue date</th> 
                        <th>Veneer set</th> 
                        <th>Info</th> 
                        <th>Action</th>
                        <!-- Add more headers as needed -->
                    </tr>
                </thead>
                <tbody>
                    
                </tbody> 
                <?php   
        
        while ($res= mysqli_fetch_assoc($result)){ 
            
            echo "<tr>"; 
            echo "<td>" .$res['rcl_vs_id']. "</td>";   
            echo "<td>" .$res['order_number']. "</td>";  
            echo "<td>" .$res['issue']. "</td>"; 
            echo "<td>" .$res['issue_date']. "</td>"; 
            echo "<td>" .$res['veneer_set']. "</td>";  
            echo "<td>" .$res['info']. "</td>"; 

            echo "<td>
                        
                        <a class='btn btn-sm btn-danger' href='rcl_vs_delete.php?rcl_vs_id=$res[rcl_vs_id]' title='Deletar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                            </svg>
                        </a>
                 </td>";


            
        }
        
        ?>   

    </table> 
    
 
          
    </section> 

</main>

