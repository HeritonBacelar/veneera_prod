<?php  

//Form for veneer set issues requests 
//The data must be displayed in the rcl_vs_read.php 
if (isset($_POST['submit'])) { 

    include_once('dbConnection.php'); 

    $order_number=$_POST['order_number']; 
    $issue=$_POST['issue']; 
    $issue_date=$_POST['issue_date']; 
    $veneer_set=$_POST['veneer_set']; 
    $info=$_POST['info']; 

    $result = mysqli_query($conn, "INSERT INTO rcl_veneer_set(order_number, issue, issue_date, veneer_set, info)  
    VALUES ('$order_number','$issue','$issue_date','$veneer_set','$info')");

}


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body> 
    <form action="rcl_vs_create.php" method="post">  
        <fieldset> 
            <label for="order_number"> Order Number:
                <input id="order_number" type="text" name="order_number"> 
            </label> 
            <label for="issue">Issue: 
                <select name="issue" id="issue"> 
                    <option value="">--Select--</option>
                    <option value="Lost">Lost</option> 
                    <option value="Broken">Broken</option> 
                    <option value="Fitting">Fitting</option>  
                </select>
            </label> 
            <label for="issue_date"> Date of issue:
                <input type="date" class="issue_date" name="issue_date">
            </label>  
            <label for="veneer_set">Veneer set: 
                <select name="veneer_set" id="veneer_set"> 
                    <option value="">--Select--</option>
                    <option value="Top">Top</option> 
                    <option value="Bottom">Bottom</option> 
                    <option value="Top/Bottom">Top/Bottom</option> 
                    
                </select>
            </label>  
            <label for="info">Info: 
                <textarea name="info" id="info" cols="33" rows="5"></textarea>
            </label> 
            
        </fieldset> 
        <input type="submit" name="submit" id="submit" class="send" value="Send">
    </form> 

    <p>teste</p>
    
</body>
</html>