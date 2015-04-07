<?php 
session_start();
include 'includes/header.php';
?>

    <body>  
        <div class="container">
            <img class="img-responsive center-block" src="img/Happy-Dog-Spa-Logo3.png">
            <form role="form" action="login.php" method="post">
                <div class="form-group">
                    <label for="inputsuccess1">User Name:</label>
                    <input type="text" class="form-control input-lg" name="user" placeholder="Input User Name">                    
                </div> 
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control input-lg" name="pwd" placeholder="Input Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button><?php if(isset($_SESSION['loginError']))echo $_SESSION['loginError'];?>
            </form>   
        </div>
    </body>
</html>
