<!DOCTYPE html>
<html lang="en">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <title>HDS Backend</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/main.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
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
                <button type="submit" class="btn btn-default">Submit</button>
            </form>   
        </div>
    </body>
</html>
