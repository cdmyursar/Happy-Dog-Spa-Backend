<?php
session_start();
include 'includes/header.php';
?>
<html>
    <div class="container">
        <?php 
            include 'includes/navbar.php';
          //  include 'includes/sqlUpdate.php';
        ?>
        <div class="jumbotron">
            <?php $desc = htmlspecialchars($_POST['groom']);
            echo $desc;?>
        </div>
    </div>
</html>