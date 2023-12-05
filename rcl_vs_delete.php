<?php    

include_once('dbConnection.php');  

$id = $_GET ['rcl_vs_id'];   

$result = mysqli_query($conn, "DELETE FROM rcl_veneer_set WHERE rcl_vs_id=$id"); 

?>