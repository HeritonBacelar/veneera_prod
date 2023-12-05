<?php    

include_once('dbConnection.php');  

$id = $_GET ['rcl_is_id'];   

$result = mysqli_query($conn, "DELETE FROM rcl_impression_set WHERE rcl_is_id=$id"); 

?>