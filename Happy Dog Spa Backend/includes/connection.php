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
        echo "connected to database with ".$username. " ".$userpassword;
    }else{
        echo "could not connect";
    }
    ?>