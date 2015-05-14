<?php
session_start();
include 'includes/header.php';
include 'includes/JqueryFormControl.js'
?>

<body>        
<div class="container"> 
    <?php 
    include "includes/navbar.php"; 
    include 'includes/connection.php';
    include 'petVariables.php';
    ?>
    <div class="jumbotron">
        

        <div class="row">
            <div class="col-xs-4 text-center"></div>
            <div class="col-xs-4 text-center"><h1><?php echo $petName ?></h1></div>
            <div class="col-xs-4 text-center"></div>
        </div>
        <div class="row">
            <div class="col-xs-4 text-center">Breed: <b><?php echo $petBreed ?></b></div>
            <div class="col-xs-4 text-center"><b><span class="BorG"><?php if($glBath == -1){echo"Bath";}
                else if($glGroom == -1){ echo"Groom";}
                else{echo"Undefined";}?></span></b></div>
            <div class="col-xs-4 text-center">Time: <b><?php echo $inTime?></b> </div>
        </div>                
        <div class="row">
            <div class="col-xs-4 text-center topPadding"><?php echo $lastName. ", ".$firstName; ?></div>
            <div class="col-xs-4 text-center topPadding"></div>
            <div class="col-xs-4 text-center topPadding"><?php echo $custEmail; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-4 text-center"><?php echo $custAddress; ?></div>
            <div class="col-xs-4 text-center"></div>
            <div class="col-xs-4 text-center"><?php echo $custPhone1; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-4 text-center"><?php echo $city, $state, $zipcode; ?></div>
            <div class="col-xs-4 text-center"></div>
            <div class="col-xs-4 text-center"><?php echo $custPhone2; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-4 text-center"></div>
            <div class="col-xs-4 text-center"></div>
            <div class="col-xs-4 text-center"><?php echo $custPhone3; ?></div>
        </div>
        
        <div class="row topPadding">
            <div class="form-group">
            <div class="col-xs-4">
                <div class="checkbox" >
                    <label><input type="checkbox" id="bathCheckBox">Bath: <?php echo $bathPrice; ?></label>
                </div>
                
                <div class="checkbox">
                    <label><input type="checkbox" id="groomCheckBox">Groom: <?php echo $groomPrice; ?></label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Nail File</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Teeth</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Shampoo</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">De-shed</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">De-skunk</label>
                </div>
            </div>
              
            
            <div class="col-xs-8 text-center">
                
                    <label for="comment">Description:</label>
                    <textarea class="form-control" rows="7" id="comment"><?php echo $groomDescription; ?></textarea>
                
            </div>
            </div>
            
        </div>
        
            
               
    </div>  
</div>
</body>
</html>
 
