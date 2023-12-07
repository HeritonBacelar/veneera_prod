<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style> 
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;400&family=Roboto&family=Rubik&display=swap');
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif; 
        }

        header {
            position: fixed;
            top: 0;
            /* left: 0;  */
            right: 0;
            width: 90%;
            height: 6vh; /* 10% of the viewport height */
            background-color: #fff; /* You can change the background color */
            color: #68c4af; /* You can change the text color */
            text-align: center;
            line-height: 1.5vh;  /* Adjust line-height for vertical centering if needed */ 
           /*  box-shadow: 2px 4px 10px rgba(0,0,0,.13);  */
            font-weight: bold;
        }

        nav { 
            
            position: fixed;
            top: 0; /* Height of the header */
            left: 0;
            width: 15%; /* 10% of the viewport width */
            height: 100vh; /* 100% of the viewport height */
            background-color: #404e67; /* You can change the background color */
            color: #fff; /* You can change the text color */
            /* padding-top: 20px; */ /* Adjust padding as needed */
            text-align: left; 
           
            
            
        }

        main {
            margin-top: 10vh; /* Height of the header */
            margin-left: 10%; /* Width of the navigation */
            padding: 20px;
        }

        section {
            text-align: center; 
            
        }

        table {
            width: 80%; 
            border-collapse: collapse; 
           
            border: 0px; 
            
            margin: 20px auto; /* Center the table horizontally */ 
            
            
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left; 
           
        }

        th {
            background-color: 	#68c4af;
            color: #fff;
        }  

        .sty { 
            border-collapse: collapse;
            margin: 25px auto;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);  
            border-radius: 5px;

        }  

    ul { 

        
    list-style-type: none;
    margin: 0;
    padding: 0; 
    
    }    
        
       


    li a {
    display: block;
    color: #FFF;
    padding: 10px 10px;
    text-decoration: none;  
    
    
   
  } 

  li a.home{ 
    text-align: center; 

  }
  
  li a.active {
    background-color: #68c4af; 
    color: white;  
    

  }
  
  li a:hover:not(.active) {
    background-color: #68c4af;
    color: white; 
    /* height: 5vh */
  } 
  
  
  form {
            width: 100%;
            max-width: 400px; /* Set a maximum width for the form */
            margin: 20px auto; /* Center the form horizontally */
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px; /* Add border-radius to the form */ 
            box-shadow: 2px 4px 10px rgba(0,0,0,.13) 
            
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;

        }

        @media (max-width: 768px) {
            nav {
                width: 100%;
                height: auto;
                position: static;
                text-align: center;
            }

            main {
                margin-top: 0;
                margin-left: 0;
                padding: 20px;
            }

            section {
                text-align: left;
            }

            table {
                width: 100%;
            } 

            form {
                width: 80%; /* Adjust the width of the form on smaller screens */
                margin: 10px auto; /* Center the smaller form */
            }
        }
    </style>
    <title>Your Page Title</title>
</head>
<body>

    <header>
        <h2></h2>
    </header>

    <nav>
        <ul> 
            <li><a class="home" href="#"><i class="fa-solid fa-house"></i></a></li>
            <!-- Customer services nav -->
            <li><a class="active" href="#"><i class="fa-solid fa-handshake"></i> Customer Serv.</a></li>
            <li><a href="rcl_is_create.php"><i class="fa-solid fa-plus"></i> Impression Set</a></li>
            <li><a href="rcl_vs_create.php"><i class="fa-solid fa-plus"></i> Veneer Set</a></li> 
             
            <li><a href="#"><i class="fa-solid fa-plus"></i> Cancellation</a></li> 
               <!-- Warehouse nav -->
            <li><a class="active" href="#"><i class="fas fa-warehouse"></i> Warehouse</a></li> 
            <li><a href="rcl_is_read.php"><i class="fa-solid fa-box"></i></i> To be shipped</a></li> 
            <li><a href="rcl_is_closed.php"><i class="fa-solid fa-truck-fast"></i> Shipped</a></li> 
            <li><a href=""><i class="fa-solid fa-plus"></i> Returned impression</a></li>  
             <!-- Production nav -->
            <li><a class="active" href="#"><i class="fa-solid fa-industry"></i> Production</a></li>  
            <li><a href="new_prod_orders.php">New Orders</a></li> 
            <li><a href="">Printing protocol</a></li> 
            <li><a href="">Finishing protocol</a></li> 
            <li><a href="">Finished</a></li>
            <!-- Add more navigation items as needed -->
        </ul>
    </nav>

    
</body>
</html>
