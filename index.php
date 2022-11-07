<?php


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zero one organization</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="section1.css">
    <script src="main.js"></script>

</head>

<body>
    <div class="topnav" id="nevigation">
        <a href="#home" class="active">Home</a>
        <a href="service.php" class="services">login</a>
        <a href="register.php" class="contacts">register</a>
        <div class="dropdown">
            <button class="dropbtn">services
                <i class="fas fa-angle-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">link1</a>
                <a href="#">link2</a>
                <a href="#">link 3</a>
            </div>

        </div>
        <a href="#call">call</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>

    </div>
    <section class="section1">
        <div class="row">
            <div class="column left" style="background-color:inherit;">


                <img src="logo.png" alt="logo" width="200" height="200" id="sectionlogo">
                <div class="linesize">
                    <h1 id="h1font">Zero-One</h1>
                     <br>
                     <h1 id="organization">Organization</h1>
                </div>
                <hr>
                <h1>
                    <p>Our organization with you </p>
                </h1>


            </div>
            <div class="column right" style="background-color: inherit;">

                <form action="" method="post">
                    <div class="container">
                        <div class="line1">
                            <h1 style="font-size: 40px;">Register</h1>
                            <p>Please fill in this form to create an account.</p>
                            <hr>

                            <label for="email"><b>name</b></label>
                            <input type="text" placeholder=" your name" name="yourname" id="name" required>
                            
                            <label for="email"><b>username</b></label>
                            <input type="text" placeholder="Enter Email" name="username" id="email" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" id="psw" required>

                            <label for="psw-repeat"><b>Repeat Password</b></label>
                            <input type="password" placeholder="Repeat Password" name="confirm_password" id="psw-repeat"
                                required>
                            <hr>
                            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                            <button type="submit" class="registerbtn">Register</button>


                            <div class="container-signin">
                                <p>Already have an account? <a href="login.php">Sign in</a>.</p>
                            </div>
                        </div>
                </form>
            </div>
    </section>
    <section class="section2">
        <img src="loo.png" alt="">
    </section>


</body>

</html>