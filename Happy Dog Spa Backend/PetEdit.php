<?php
session_start();
include 'includes/header.php';


?>

    <body>  
      
        <div class="container">
            
              <?php include "includes\\navbar.php"; 
              include 'includes/connection.php';
              $uri = $_SERVER['REQUEST_URI'];
              echo $uri;
              $params = $_SERVER['QUERY_STRING'];
              echo "<br />".$params;
              
              echo "<br />".'Hello ' . htmlspecialchars($_GET["GLPetID"]) . '!';
              echo "<br />".'Hello ' . htmlspecialchars($_GET["CLLastName"]) . '!';
              
              ?>
        
        </div>
    </body>
</html>
 
