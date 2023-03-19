<?php

session_start();

if(isset($SESSION['user_id']))
{
    unset($_SESSION['usr_id']);
}

header("Location: login.php");
die;
