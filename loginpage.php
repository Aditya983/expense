<html>
<head>
    <title>CTRL BUDGET</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="loginstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>
     <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="indexpage.php" class="navbar-brand">Ctrl Budget</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="aboutuspage.php"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                    <li><a href="signuppage.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li ><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
     </nav>
     <div class="container">
        <div class="row row_style">
            <div class="col-xs-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <center>Login</center>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="login.php">
                        <b>Email:</b><br><input type="text" name="e-mail" placeholder="Email" class="form-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                        <b>Password:</b><br><input type="Password" name="Password" placeholder="Password" class="form-control" required="true" pattern=".{6,}"><br>
                        <input type="submit" value="Login" class="form-control" id="submitbutton">
                        </form>
                    </div>
                    <div class="panel-footer">
                        <p>Don't have an account?<a href="signuppage.php">Click here to Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <footer>
        <div class="container"><center>Copyright © Control Budget. All Rights Reserved|Contact Us: +91-8448444853</center></div>
     </footer>
 </body>
 </html>