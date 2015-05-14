<?php

    $username = "Sa";
    $userpassword = "Kj355484";
    $serverName = "KC-PC";

    $connectionOptions = array("Database" => "wkennel", 
                               "UID" => $username,
                               "PWD" => $userpassword);
                              
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if($conn == true)
    {
      //  echo "<span class=\"bg-primary\"> connected to database with ".$username. " ".$userpassword."</span>";
    }else{
      //  echo "could not connect";
    }
    ?>