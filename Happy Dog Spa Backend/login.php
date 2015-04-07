<?php
    session_start();  
    include "includes/connection.php";     
   
    $username = $_POST["user"];
    $_SESSION['sessName'] = $username;
    $userpassword = $_POST["pwd"];
    
    if($conn === false)
    {
        $_SESSION['loginError'] = "  Login Failed, Try again.";
        header('location: index.php');
    }else{
        header('location: Schedule.php');
    }
   
  
    
?>