<html>
<head>
    <title>CTRL BUDGET</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="signupstyle.css" rel="stylesheet" type="text/css"/>
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
                <a href="indexpage.html" class="navbar-brand">Ctrl Budget</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="aboutuspage.html"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
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
                        <center>Sign Up</center>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="signup.php">
                      <div class="form-group"> <b> Name:</b><br><input type="text" name="name" placeholder="Name" class="form-control" required="true"><div><?php echo $_GET['name_error'] ?></div></div><br>
                        <div class="form-group"><b>Email:</b><br><input type="email" name="e-mail" placeholder="enter valid e-mail" class="form-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><div><?php echo $_GET['email_error'] ?></div></div><br>
                         <div class="form-group"><b>Password:</b><br><input type="Password" name="Password" placeholder="Password(min. 6 characters)" class="form-control" required="true" pattern=".{6,}"><div><?php echo $_GET['password_error'] ?></div></div><br>
                        <div class="form-group"><b>Phone number:</b><br><input type="text" name="phone number" placeholder="Enter Valid Phone Number(Ex:8448444853)" class="form-control" required="true" pattern=".{,10}"><div><?php echo $_GET['name_error'] ?></div></div><br>
                        <input type="submit" value="Sign Up" class="form-control" id="submitbutton">
                        </form>
                    </div>
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