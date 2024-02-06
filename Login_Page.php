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
            <a href="./about.html">About</a>
            <a href="./contact.html">Contact Us</a>
            <a href="./attractions.html">Attractions</a>
            <a href="./reservationss.html">Reservations</a>
            <a href="registration_page.php">Registration</a>
            <?php
            if (isset($_SESSION['Email'])) {

                ?>
                <div class="navitemlogin"><a href="Logout.php" class="active">Logout</a></div>
                <?php
            } else {
                ?>
                <div class="navitemlogin"><a href="Login_Page.php" class="active">Login</a></div>
                <?php
            }
            ?>


            <!-- <div class="navitemlogin"><a href="./login.html" class="active">Login</a></div> -->
            <div class="username">
                <?php
                if (isset($_SESSION['Email'])) {

                    ?>
                    <div class="" role="">Hello,
                        <?php echo $_SESSION['Email'] . "!"; ?>
                    </div>
                    <?php
                }
                ?>
            </div>

            <div class="username">
            <?php
            if (isset($_SESSION['Email'])) {

            ?>
            <div class="" role="">Hello, 
                <?php echo $_SESSION['Email']."!"; ?>
            </div>
            <?php
            }
            ?>
            </div>

        </div>
    </nav>

    <!--Moffat Bay Banner and Title-->
    <div class="container">
        <div class="bannerimg">
            <p>Moffat Bay Lodge</p>
        </div>

        <!--Login Box-->
        <!--NOTES FOR RACHEL. I am struggling with getting the CSS to work with this.-->
        <div class="bodyinformation">
            <div class="box">
                <form method="post" action="Loginfunction.php">
                    <div style="font-size: 40px;">Login Now</div><br>
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
                    <input type="text" name="user_name" size="50"><br><br>

                    <label for="fname">Enter Your Password:</label><br>
                    <input type="password" name="password" size="50"><br><br>

                    <input type="submit" value="Login"><br><br>

                    <a href="register_page.php">Signup</a>
                </form>
            </div>
        </div>

        <!--Bottom of Screen Color-->
        <div class="footer">

        </div>
</body>

</html>