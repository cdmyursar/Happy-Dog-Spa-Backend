//Hi name entered is <?php echo $_POST["user"];?><br>
//your password is <?php echo $_POST["pwd"];?>

<?php
    session_start();  

    $serverName = "KC-PC";
    $username = $_POST["user"];
    $_SESSION['sessName'] = $username;
    $userpassword = $_POST["pwd"];
    $_SESSION['sessPWD'] = $userpassword;


    $connectionOptions = array("Database" => "wkennel", 
                               "UID" => $username,
                               "PWD" => $userpassword);
                              // "MultipleActiveResultSets" => false);

    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if($conn === false)
    {
        echo "login failed";
         //die(print_r(sqlsrv_errors(), true));
    }else{
      echo "successfully connected";
        // header('Location: Profile.php');
    }
    $sql = "SELECT GLPetID, GLDescription FROM GroomingLog";
               
    $stmt = sqlsrv_query($conn,$sql);
    
    if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo $row['GLPetID'].", ".$row['GLDescription']."<br />";
}

sqlsrv_free_stmt( $stmt);
    
//    if($result === FALSE){
//        die(print_r(sqlsrv_errors(),TRUE));
//    }
//    if(sqlsrv_fetch($result)===FALSE){
//        die(print_r(sqlsrv_errors(),true));
//    }
//    $id = sqlsrv_get_field($result,0);
//    echo "$id  ";
//    $description = sqlsrv_get_field($result, 1);
//    echo $description;
//    $date = sqlsrv_get_field($result, 2);
//    echo "$date <br />";
  
    
?>