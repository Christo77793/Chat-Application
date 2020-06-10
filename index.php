<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Final Project</title>
    
    <link rel="stylesheet" type="text/css" href="style.css?v=4" />
</head>

<body>
    <img src="logo1.jpg" alt="LE LOGO" width="175" height="175">
    <div class="login_box">
        <!--<h1><b>Welcome!!!</b></h1>-->
        <form action="login.php" method="post">
            <!--  <div class="login_box">-->
            <h2>Login</h2>
            <b>User Name: </b>
            <input type="text" name="User_Name" id="User_Name" placeholder="Enter your name"> <br>
            <br>
            <b>Password: </b>
            <input type="text" name="Password" id="Password" placeholder="Enter your password"> <br>
            <br>
            <input type="submit" value="Login"> <br>
            <br>

        </form>
    </div>
    <br>
    <br>
    <br>
    <div class=" signup_box">
        <form action="signup.php" method="post">
            <h2>Sign-Up</h2>
            <b>User Name: </b>
            <input type="text" name="User_Name" id="User_Name" placeholder="Enter your name"> <br>
            <br>
            <b>Email: </b>
            <input type="text" name="Email_ID" id="Email_ID" placeholder="Enter your email address"> <br>
            <br>
            <b>Password: </b>
            <input type="text" name="Password" id="Password" placeholder="Enter your password"> <br>
            <br>
            <input type="submit" name = "Register" value="Register">
        </form>
    </div>
</body>
</html>