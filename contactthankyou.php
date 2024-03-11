<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CSD460 Moffat Moffat Bay Lodge Contact Us Page</title>
</head>
<script>

</script>
<body>
    <?php
  session_start();
  include "register.php";
  ?>

    <nav>
      <!--logo-->
      <!--top navigation bar-->
      <div class="navigation">
        <a href="./index.php">Home</a>
        <a href="./about.php" >About</a>
        <a href="./contact.php" class="active">Contact Us</a>
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
                <div class="navitemlogin"><a href="Login_Page.php">Login</a></div>
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

    <div class="bannerimg">
      <p>Moffat Bay Lodge</p>
    </div>
     
    
     
    <div class="container"> <!--container-->
    <div class="bodyinformation">
   <h2 id="registrationheader">Thank you from Moffat Bay Lodge</h2>
  <p style="text-align:center;">Thank you for submitting the contact form, we will contact you soon!
</p>

</div> 
</div>

<div class="footer">
    <p>This website was created as a class assignment
        <br>
    CSD460 Capstone in Software Development Project - Group B
    <br>
    Bellevue University</p>
</div>
</body>
</html>
