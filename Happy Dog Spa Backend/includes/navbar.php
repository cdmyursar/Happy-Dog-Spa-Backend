<nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/profile.php">Hi, <?php
                    $varValue=$_SESSION['sessName'];
                    echo$varValue;?></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li><a href="/Schedule.php"><span class="glyphicon glyphicon-th-list"></span> Schedule&nbsp;</a></li>
                    </ul>
                </div>
            </div>    
                
            
        </nav>