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
            <a href="./reservations.php" class="active">Reservations</a>
            <?php
            if (isset($_SESSION['Email'])) {

                ?>
                
                <a href="">My Reservations</a>
                
                
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
               
                    <div style="font-size: 40px;">Book Now</div><br>
                    <div class="successstatus" role="alert">
                            Congrats! You booked your reservation!
                        </div>
                    <br>
                    
                    

                    
            </div>
        </div>

        <!--Bottom of Screen Color-->
        <div class="footer">

        </div>
</body>

</html>