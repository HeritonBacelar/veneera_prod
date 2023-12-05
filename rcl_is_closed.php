<?php  
include_once('dbConnection.php'); 

$result = mysqli_query ($conn, "SELECT * FROM rcl_is_closed ORDER BY rcl_is_id DESC ");

?>

<?php   

include('layout.php');

?>    


<main> 
    <section>  
    <h2>IMPRESSION SETS SENT</h2>
    <table class="sty">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Order Number</th> 
                        <th>AS/DF</th> 
                        <th>Attempts</th> 
                        <th>Reason</th> 
                        <th>Info</th> 
                        <th>Sent</th>
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
            echo "<td>" .$res['info']. "</td>"; 
            echo "<td>" .$res['sent']. "</td>";

          echo "</tr>";
        }
        
        ?>
            </table>  



    </section> 


</main>