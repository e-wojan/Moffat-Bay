<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CSD460 Moffat Bay Lodge Landing Page</title>
</head>
<script>

</script>

<body>
    <?php 
    session_start();
    
    ?>
    <nav>
        <!--logo-->
        <!--top navigation bar-->
        <div class="navigation">

            <a href="./index.php" class="active">Home</a>
            <a href="./about.php">About</a>
            <a href="./contact.php">Contact Us</a>
            <a href="./attractions.php">Attractions</a>
            <a href="./reservations.php">Reservations</a>
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
                <div class="navitemlogin"><a href="Login_Page.php">Login</a></div>
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


    <div class="landingtopbannerimgcontainer">
        <div class="landingtopbannertexttitle">
            Moffat Bay Lodge
            <br>
        </div>
        <div class="centeredtextlanding">Welcome! Your adventure starts here.
            <br>
            Start exploring for your next adventure.
            <a href="./about.html">Start Here</a>

        </div>
    </div>



    <div class="footer">
        <p>This website was created as a class assignment
            <br>
            CSD460 Capstone in Software Development Project - Group B
            <br>
            Bellevue University
        </p>

    </div>
</body>

</html>