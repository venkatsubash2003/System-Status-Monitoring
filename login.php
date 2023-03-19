<?php

session_start();


    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //SOMETHING WAS POSTED
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //read from db
          
            $query = "select * from users where user_name = '$user_name' limit 1";

            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                   if($user_data['password'] === $password)
                   {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    
                    die;

                   }
                }
            }

            echo "<center><h4 id = 'invalid'>Invalid username or password!</h4></center>";
        }else
        {
            echo "<center><h4 id = 'invalid'>Invalid username or password!</h4></center>";
        }
    }


?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body id = "body-id">
    <style type="text/css">
        #body-id {
            margin-top: 240px;
            background-image: url("ab.png");
            background-repeat:no-repeat;
            background-size:1700px;
            }
            
    input[type=password] {
    font-size: 24px;
    padding: 0.25em;
    border: 2px solid #999;
    
    /* 2 animations: shake, and glow red */
    animation-name: shake, glow-red;
    animation-duration: 0.7s, 0.35s;
    animation-iteration-count: 1, 2;
  }
  
  @keyframes shake {
    0%, 20%, 40%, 60%, 80% {
      transform: translateX(8px);
    }
    10%,
    30%,
    50%,
    70%,
    90% {
      transform: translateX(-8px);
    }
  }
  
  @keyframes glow-red {
    50% {
      border-color: indianred;
    }
  }
        #invalid {
            color: red;
            
        }
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
            
        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;

        }
        #box{
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
            margin-bottom:150px;
            background-image: url("1.png");
            border-radius: 10px;
        }
        #signup-button{
            font-size: 18px;
            color: white;
            text-decoration: none;
            border: solid 2px black;
            border-radius: 10px;
            padding: 6px;
            background-color: black;
        
        }
        

    </style>

    <div id="box">
        <form method="post">
        <center><div style="font-size: 20px; margin: 10px; color: white;"><b>LOGIN</b></div></center>

     <b style = "font-size: 18px; color:white;">USERNAME:</b> <br><input id="text" type=" text" name="user_name" > <br><br>
        <b style = "font-size: 18px; color:white;">PASSWORD:</b> <input id="text" type="password" name="password"><br><br>
        
        <center><input id="button" type="submit" value="Login" style = "border: 2px solid black; border-radius: 6px; color: Black;" ><br><br>
        <b><p style = "font-size:18px; color:white;">Haven't registered yet?</p></b><a id = "signup-button" href="signup.php" "> Click here to register</a><br><br></center>
        
     
        </form>
    </div>
</body>
</html>