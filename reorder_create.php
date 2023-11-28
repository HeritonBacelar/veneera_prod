<?php  


if (isset($_POST['submit'])) { 

    include_once('dbConnection.php'); 

    $new_order=$_POST['new_order']; 
    $old_order=$_POST['old_order']; 
    $info=$_POST['info']; 
    

    $result = mysqli_query($conn, "INSERT INTO reorder(new_order, old_order, info)  
    VALUES ('$new_order','$old_order','$info')");

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
    <form action="reorder_create.php" method="post">  
        <fieldset> 
            <label for="new_order"> New Order:
                <input id="new_order" type="text" name="new_order"> 
            </label> 
            
            <label for="old_order"> Old order:
                <input type="old_order" class="old_order" name="old_order">
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