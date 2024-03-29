<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CSD460 Moffat Bay Lodge Login Page</title>
</head>
<script>

</script>

<body>
<?php 
    session_start();
    include "Loginfunction.php";
    ?>
    <nav>
        <!--logo-->
        <!--top navigation bar-->
        <div class="navigation">

            <a href="./index.php">Home</a>
            <a href="./about.php">About</a>
            <a href="./contact.php">Contact Us</a>
            <a href="./attractions.php">Attractions</a>
            <a href="./reservations.php">Reservations</a>
            <?php
            if (isset($_SESSION['Email'])) {

                ?>
                
                <a href="./reservation_lookup.php">My Reservations</a>
                
                
                <?php
            } else {
                ?>
                <a href="./registration_page.php">Registration</a>
                <?php
            }
            ?>
            <?php
            if (isset($_SESSION['Email'])) {

                ?>
                <div id="logout"><a href="Logout.php" id="logoutlink">Logout</a></div>
                <?php
            } else {
                ?>
                <div class="navitemlogin"><a href="Login_Page.php" class="active">Login</a></div>
                <?php
            }
            ?>


            <div class="username">
            <?php
            if (isset($_SESSION['Email'])) {

            echo "Hello, " . $_SESSION['Email']."!"; 
            
            
            }
            ?>
            </div>

        </div>
    </nav>

    <!--Moffat Bay Banner and Title-->
   
        <div class="bannerimg">
            <p>Moffat Bay Lodge</p>
        </div>
 <div class="container">
        <!--Login Box-->
        <!--NOTES FOR RACHEL. I am struggling with getting the CSS to work with this.-->
        <div class="bodyinformation">
            <div class="box">
                <form method="post" action="Loginfunction.php">
                    <div style="font-size: 40px;text-align:center;">Login Now</div><br>
                    <?php
                    if (isset($_SESSION['LoginError'])) {

                        ?>
                        <div class="alertstatus" role="alert">
                            <?php echo $_SESSION['LoginError']; ?>
                        </div>
                        <?php

                        unset($_SESSION['LoginError']);
                    }
                    ?>

                    <label for="fname">Enter Your Email Address:</label><br>
                    <input type="text" name="user_name"  class="registrationinput" required><br><br>

                    <label for="fname">Enter Your Password:</label><br>
                    <input type="password" name="password" class="registrationinput" required><br><br>
<div id="submitbutton">
                    <input class="btn" type="submit" value="Login"><br><br>
</div>
                    <a href="registration_page.php">
                        <div class="signuptext">
                            Signup
                        </div>
                    </a>
                        
                </form>
            </div>
        </div>

        <!--Bottom of Screen Color-->
        <div class="footer">
            <p>This website was created as a class assignment
                <br>
                CSD460 Capstone in Software Development Project - Group B
                <br>
                Bellevue University</p>
        </div>
</body>

</html>
