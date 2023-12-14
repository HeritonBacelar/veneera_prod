//Prod suitble delete 

<?php  

include_once('dbConnection.php'); 

$id = $_GET['suitble_id']; 

$dataSelect = mysqli_query ($conn, "SELECT * FROM printing_protocol WHERE suitble_id=$id"); 

while ($res = mysqli_fetch_assoc($dataSelect)){ 
    $insertData ="INSERT INTO finishing_protocol (suitble_id, order_number, veneer_set, top_set, bottom_set, IBI_reason, impression_status, info) 
                  VALUES ('" .$res['suitble_id']. "', '" .$res['order_number']. "', '" .$res['veneer_set']. "', '" .$res['top_set']. "', '" .$res['bottom_set']. "', '" .$res['IBI_reason']. "', '" .$res['impression_status']. "', '" .$res['info']. "')";

    // Copy data from table "rcl_impression_set" and insert into table "rcl_is_closed"
    if ($conn->query($insertData) === TRUE) {
        echo "Data inserted into finishing_protocol successfully."; 
        $deleteData ="DELETE FROM printing_protocol WHERE suitble_id=$id"; 
    
        //Execute delete in table "rcl_impression_set" if the data was inserted into table "rcl_is_closed"
        if($conn -> query($deleteData)===TRUE){ 
            echo "deleted from printing_protocol";
        }else{ 
            echo "error deleting" .$conn ->error;
        }
    } else {
        echo "Error inserting data into fisnishing_protocol: " . $conn->error;
    }
}



?>