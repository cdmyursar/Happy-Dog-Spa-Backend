<?php
session_start();
include "includes/header.php";

?>

    <body>
       

        <div class="container">
            
            
        <?php include "includes\\navbar.php"; 
        include "includes/connection.php";
        ?>
            
            <button class="btn btn-primary" id="hide">Claimed</button>
            <button class="btn btn-primary" id="show">Show All</button>
       
        <div class="list-group">    
            
        <?php
        $sql = "Select GLPetID, GLDescription, GLDate, CLLastName, PtPetName, "
            . "GLInTime, GLRate, "
            . "GLTakenBy, GLBathRate, GLOthersRate, GLNailsRate "
            . "From GroomingLog "
            . "INNER JOIN Pets "
            . "ON GroomingLog.GLPetID = Pets.PtSeq "
            . "INNER JOIN Clients "
            . "ON Pets.PtOwnerCode = Clients.CLSeq "
            . "WHERE GLDate='2014-03-31'"
            . "ORDER BY GLInTime";
        
        //       sql statement origional
//                  $sql = "SELECT GLPetID, GLDescription, GLDate, GLInTime, GLRate, "
//                . "GLTakenBy, GLBathRate, GLOthersRate, GLNailsRate  "
//                . "FROM GroomingLog WHERE GLDate='2014-03-31'";             
         
        $stmt = sqlsrv_query($conn,$sql);

        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
        }
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
            $result = $row['GLDate']->format('Y-m-d H:i:s') ;
            $time = $row['GLInTime']->format('H:i');
//
//            echo "<span class=".$row['GLTakenBy']."\"";
//            echo "<a href=\"petedit.php/?GLPetID=".$row['GLPetID']."&CLLastName=".
//                    $row['CLLastName']."&PtPetName=".$row['PtPetName'].
//                    "\"class=\"";
//            if($row['GLRate']>0){
//                echo"list-group-item list-group-item-success";
//            }else{
//                echo"list-group-item list-group-item-info";
//            }
//            echo "/>".$row['GLTakenBy']."></span>".$row['GLPetID']." "."Customer Last Name: ".
////            echo "\"class=".$row['GLTakenBy'].">".$row['GLPetID']." "."Customer Last Name: ".
//                $row['CLLastName']." "."Dog's Name: ".$row['PtPetName']." ".
//                $time." ".
//                $row['GLRate']." ".
//                $row['GLBathRate'].
//                $row['GLTakenBy'].
//                "</a></span>";
//        }
//        
        
        
            echo"<span class=\"".$row['GLTakenBy']."\">";
        
            echo "<a href=\"petedit.php/?GLPetID=".$row['GLPetID']."&CLLastName=".
                    $row['CLLastName']."&PtPetName=".$row['PtPetName'].
                    "\"class=\"";
            if($row['GLRate']>0){
                echo"list-group-item list-group-item-success text-center";
            }else{
                echo"list-group-item list-group-item-info text-center";
            }
            echo "\"/>".$row['GLPetID']." "."Customer Last Name: ".
//            echo "\"class=".$row['GLTakenBy'].">".$row['GLPetID']." "."Customer Last Name: ".
                $row['CLLastName']." "."Dog's Name: ".$row['PtPetName']." ".
                $time." ".
                $row['GLRate']." ".
                $row['GLBathRate'].
                $row['GLTakenBy'].
                "</a>";
            echo"</span>";
        }
        
        
        
        
        
        sqlsrv_free_stmt( $stmt);
        ?>
        </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>

        //need to setup variable to capture TakenBy on user login.

    $(document).ready(function(){
        $("#hide").click(function(){
            $("span:not(.NIQ)").hide();
        });
        $("#show").click(function(){
            $("span:not(.NIQ)").show();
        });
    });
    </script>
    </body>
</html>