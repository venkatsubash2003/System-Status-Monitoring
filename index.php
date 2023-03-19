<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
</head>
<body id = "back">
<html>
    <head>
        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href = "style.css">
        <style>
            #form {
                margin-top: 150px;
                margin-left: 120px;
                display:static;
                font-family: sans-serif;
                
            }
            #back {
                background-image: url("untitled design.png");
                background-repeat: no-repeat;
                background-size: cover;
                
            }
            #text {
                margin: 15px;
                margin-right:100px;
            }
            #logout {
                border: solid 2px Blue;
                padding: 8px;
                font-size: 22px;
                display: flex-end;

                margin-left: 1560px;
                font-weight: 35px;
                text-shadow: 0 0 3px #87CEEB, 0 0 10px #FFFF00;
                background-color: #DCDCDC;
                
                
                text-decoration: none;
                
                border-radius: 10px;
                
                
                
            }
            #submit {
                margin-left: 300px; 
                padding: 10px;
                border-radius: 10px;

            }
            #container-login{
                margin: 15px auto;
                max-width: 700px;
                max-height: 800px;
                padding: 5px;
                border: 1px solid #ccc;
                border-radius: 30px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                background-image: url("sss.png");
                margin-left:100px;
                
            }
            h3{
                color: black;
                font-family: Tratatello,fantasy;
                font-size: 36px;
                text-shadow: 0 0 3px #DCDCDC, 0 0 10px #DCDCDC;
            }
            



        </style>

    </head>
  <body id = "message">
 ,<?php echo "<b><h3>Hello ".$user_data['user_name']."!!</h3></b>"; ?>
  <a id = "logout" href="logout.php"><b>LOGOUT</b></a>
  
    
    <!-- modify this form HTML and place wherever you want your form -->
    <div id = "container-login" >
        

    
    <h4><form id = "form" action="https://formspree.io/f/xvonqjng" method="POST">
        <b>Laboratory Number:</b>
        <input type="number" name="labno">
        <br>
        <br>
    
    
    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>System number:</b>
    
        <input type="number" name="name">
        <br>
        <br>
      
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>System Issue:</b>
        
        <input type="text" name = "message">
        <br>
        <br>
      </label>
      <!-- your other form fields go here -->
      <button type="submit" id = "submit" onclick = "samp.php"><b>Send</b></button>
      <br><br><br><br>
    </form>
    </div>
    
    </h4>
  </body>
</html>



<br>


    
</body>
</html>

