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

            //save to db
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else
        {
            echo "<center><h4 id = 'invalid'>Please enter some valid info</h4></center>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body id = "signin">
    <style type="text/css">
        #signin {
            background-image: url("ab.png");
            background-repeat: no-repeat;
            background-size: cover;

        }
        
        
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
            
        }
        #invalid {
            color: red;
            
            
        }
        #button{
            font-size: 18px;
            color: black;
            text-decoration: none;
            border: solid 2px black;
            border-radius: 10px;
            padding: 10px;
            background-color: lightblue;
            

        }
        #box{
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
            margin-top:200px;
            background-image:url("1.png");
            border-radius: 10px;
        
        }
        #login-button{
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
        <center><b><div style="font-size: 20px; margin: 10px; color: white; ">SIGNUP</div></b></center>

        <b style = "font-size: 18px; color:white;">USERNAME:</b><input id="text" type=" text" name="user_name" > <br><br>
        <b style = "font-size: 18px; color:white;">PASSWORD:</b><input id="text" type="password" name="password"><br><br>
        <center><input id="button" type="submit" value="Signup"></center><br>
        <center><a id = "login-button" href="login.php"> Click to Login</a></center><br><br>
     
        </form>
    </div>
</body>
<style>
    
</style>
</html>