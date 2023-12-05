<?php    
include_once('dbConnection.php');  

$id = $_GET['rcl_is_id'];   

$dataSelect = mysqli_query($conn, "SELECT * FROM rcl_impression_set WHERE rcl_is_id=$id");  

while ($res = mysqli_fetch_assoc($dataSelect)){ 
    $insertData ="INSERT INTO rcl_is_closed (rcl_is_id, order_number, as_df, attempts, reason, info) 
                  VALUES ('" .$res['rcl_is_id']. "', '" .$res['order_number']. "', '" .$res['as_df']. "', '" .$res['attempts']. "', '" .$res['reason']. "', '" .$res['info']. "')";

    // Copy data from table "rcl_impression_set" and insert into table "rcl_is_closed"
    if ($conn->query($insertData) === TRUE) {
        echo "Data inserted into rcl_is_closed successfully."; 
        $deleteData ="DELETE FROM rcl_impression_set WHERE rcl_is_id=$id"; 
    
        //Execute delete if the data was inserted
        if($conn -> query($deleteData)===TRUE){ 
            echo "deleted from rcl_impression_set";
        }else{ 
            echo "error deleting" .$conn ->error;
        }
    } else {
        echo "Error inserting data into rcl_is_closed: " . $conn->error;
    }
}
?>
