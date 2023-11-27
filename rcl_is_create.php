<?php  

//Form for impression set issues requests 
//The data must be displayed in the rcl_is_read.php

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
    <form action="rcl_is_create.php" method="post">  
        <fieldset> 
            <label for="order_number"> Order Number:
                <input id="order_number" type="text" name="order_number"> 
            </label> 
            <label for="as_df">AS/DF: 
                <select name="as_df" id="as_df"> 
                    <option value="">--Select--</option>
                    <option value="as">AS</option> 
                    <option value="df">DF</option> 
                </select>
            </label> 
            <label for="attempts">Attempts: 
                <select name="attempts" id="attempts"> 
                    <option value="">--Select--</option>
                    <option value="2 attempts">2 Attempts</option> 
                    <option value="4 attempts">4 Attempts</option> 
                    <option value="6 attempts">6 Attempts</option> 
                    <option value="8 attempts">8 Attempts</option>  
                </select>
            </label>  
            <label for="reason">Reason: 
                <select name="reason" id="reason"> 
                    <option value="">--Select--</option> 
                    <option value="Lost">Lost</option> 
                    <option value="Agreement">Agreement</option> 
                    <option value="Offer">Offer</option> 
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