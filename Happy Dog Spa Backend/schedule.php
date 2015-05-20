<?php
session_start();
include "includes/header.php";
?>

    <body>
        <div class="container">
            
        <?php include "includes/navbar.php"; 
        include "includes/connection.php";
        ?>
        
        <button class="btn btn-primary" id="hide">My Grooms</button>
        <button class="btn btn-primary" id="show">Show All</button>
        
<?php
        $sql = "Select GLPetID,  GLDate, CLLastName, PtPetName, "
            . "GLInTime, GLRate, "
            . "GLTakenBy, GLBathRate, GLOthersRate, GLNailsRate, PtBreed "
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
    echo"<div class=\"list-group\">";   
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
            $result = $row['GLDate']->format('Y-m-d H:i:s') ;
            $time = $row['GLInTime']->format('h:i');
  
// origional code, trying to pass petid with POST METHOD  , if i use a form control dont
// forget to remove the anchor </a> from bottom or put it back if i add it back.          
//    echo "<span class=".$row['GLTakenBy']."><a href=\"petedit.php/?GLPetID=".$row['GLPetID']."&CLLastName=".
//        $row['CLLastName']."&PtPetName=".$row['PtPetName'].
//        "\" class=\"list-group-item list-group-item-success text-center \">";    
            
            
            
   
?>
    <span class="<?php echo $row['GLTakenBy'];?>"><span class="list-group-item list-group-item-success text-center">
            <form role="form" method="POST" action="petEdit.php">
    <?php 
        
                echo"<div class=\"row\">";
                    echo"<div class=\"col-xs-2 text-left\">".$time."</div>"; ?>
                <div class="col-xs-2 text-left"><input type="text" size="4" value="<?php echo $row['GLPetID'] ?>"name="petID">
                <button type="submit" class="btn-primary"><?php echo $row['GLPetID'] ?>
                </button></div>
                    <?php
                    echo"<div class=\"col-xs-4 text-center\"><b>".$row['PtPetName']."</b> <i>".$row['CLLastName']."</i>   ".$row['PtBreed']."</div>";
                    echo"<div class=\"col-xs-4 text-right\">".
                        "<span class=\"label label-warning glyphicon glyphicon-save\">Checked-In</span>".
                        "<span class=\"badge ".$row['GLTakenBy']."\">".
                            "<style>.NIQ {background-color:blue}</style>";
                            if($row['GLTakenBy']!=""){
                                echo $row['GLTakenBy'];
                            }else{
                                echo "N/A";
                            }
                        echo"</form></span></span> ";
                        
                    echo"</div>";
                
        echo"</div>";   
        echo"</a></span>";
        
        }
        sqlsrv_free_stmt( $stmt);
        ?>
     
    
    <script>

        //need to setup variable to capture TakenBy on user login.

    $(document).ready(function(){
        $("#hide").click(function(){
            $("span:not(.NIQ):not(.glyphicon-user):not(.glyphicon-th-list):not(.label)").hide();
        });
        $("#show").click(function(){
            $("span").show();
        });
    });
    </script>
    </body>
</html>