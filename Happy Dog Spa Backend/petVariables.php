<?php

      
  //Pet variables
        //Pet information
        $petID=
        $petName=
        $petBreed=
        $inTime=
        $takenBy=     
        
        //Pet variables - Aka - boolean for bath or groom, checkin time and out, called on etc.
        $glGroom=
        $glBath=  
        $checkInTime=        
        $checkOutTime=
        $calledTime=
        $calledOn=
                
                //NEED TO CREATE A FIELD FOR CHECKIN TIME AND CALLED ON
                
        //Pet pricing and description        
        $groomDescription=
        $groomPrice=
        $bathPrice=
        $nailPrice=
        $deshedPrice=
        $teethPrice=        
        $otherPrice=
        $specialPrice=
        
        //Customer info and date
        $date=
        $lastName=    
        $firstName=
        $custAddress=
        $city=
        $state=
        $zipcode=        
        $custEmail=
        $custPhone1=
        $custPhone2=
        $custPhone3=
        "";
        
         $sql = "Select GLPetID, GLBath, GLGroom, GLDate, CLLastName, CLFirstName, PtPetName, GLDescription, "
            . "GLInTime, GLRate, CLAddress1, CLPhone1, CLPhone2, CLPhone3, CLCity, CLState, CLZip, "
            . "GLTakenBy, GLBathRate, GLOthersRate, GLNailsRate, PtBreed, ClEmail,"
            . "CheckInTime, CheckOutTime, CalledOn, CalledTime  "
            . "From GroomingLog "
            . "INNER JOIN Pets "
            . "ON GroomingLog.GLPetID = Pets.PtSeq "
            . "INNER JOIN Clients "
            . "ON Pets.PtOwnerCode = Clients.CLSeq "
            . "WHERE GLPetID=''";

        $stmt = sqlsrv_query($conn,$sql);
        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
        }
        
        
        
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
         //Pet information from query
        $petID = $row['GLPetID']; //echo $petID."<br />";
        $petName = $row['PtPetName']; //echo $petName."<br />";
        $petBreed = $row['PtBreed']; //echo $petBreed."<br />";
        $inTime = $row['GLInTime']->format('h:i'); //echo $inTime."<br />";
        $takenBy = $row['GLTakenBy']; //echo $takenBy."<br />";
        $groomDescription = $row['GLDescription']; //echo $groomDescription."<br />"; 
        $groomPrice = $row['GLRate']; //echo $groomPrice."<br />";
        $bathPrice = $row['GLBathRate']; //echo $bathPrice."<br />";
        $nailPrice = $row['GLNailsRate']; //echo $nailPrice."<br />";
        $otherPrice = $row['GLOthersRate']; //echo $otherPrice."<br />";
        $date = $row['GLDate']->format('D:d:Y'); //echo $date."<br />";
        $lastName = $row['CLLastName']; //echo $lastName."<br />";
        $firstName = $row['CLFirstName']; //echo $firstName."<br />";
        $custAddress = $row['CLAddress1']; //echo $custAddress."<br />";
        $custPhone1 = $row['CLPhone1']; //echo $custPhone1."<br />";
        $custPhone2 = $row['CLPhone2']; //echo $custPhone2."<br />";
        $custPhone3 = $row['CLPhone3']; //echo $custPhone3."<br />";
        $custEmail = $row['ClEmail']; //echo $custEmail."<br />";
        $glBath = $row['GLBath'];
        $glGroom = $row['GLGroom'];
        $city = $row['CLCity'];
        $state = $row['CLState'];
        $zipcode = $row['CLZip'];
        
        $checkInTime = $row['CheckInTime'];     
        $checkOutTime = $row['CheckOutTime'];
        $calledTime = $row['CalledTime'];
        $calledOn = $row ['CalledOn'];
        
        
         }
//        $uri = $_SERVER['REQUEST_URI'];
//        echo "<br />".$uri;
//        $params = $_SERVER['QUERY_STRING'];
//        echo "<br /> PARAMS".$params;
//        echo "<br />".'Hello ' . htmlspecialchars($_GET["GLPetID"]) . '!';
//        echo "<br />".'Hello ' . htmlspecialchars($_GET["CLLastName"]) . '!';
//        echo "<br />".'Hello ' . htmlspecialchars($_GET["PtPetName"]) . '!';
        
?>
