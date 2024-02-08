<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

  <title>CSD460 Moffat Bay Lodge Landing Page</title>
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
      <a href="./about.html">About</a>
      <a href="./contact.html">Contact Us</a>
      <a href="./attractions.html">Attractions</a>
      <a href="./reservations.php" class="active">Reservations</a>
      <a href="./registration_page.php">Registration</a>
      <?php
            if (isset($_SESSION['Email'])) {

                ?>
                <div class="navitemlogin"><a href="Logout.php">Logout</a></div>
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




  <div class="container">

  </div> <!--container-->
  <div class="bannerimg">
    <p>Moffat Bay Lodge</p>
  </div>

  <div class="bodyinformation">
    <h2 id="registrationheader">Book Your Stay</h2>

    <?php
    if (isset($_SESSION['status'])) {

      ?>
      <div class="successstatus" role="alert">
        <?php echo $_SESSION['status']; ?>
      </div>
      <?php

      unset($_SESSION['status']);
    }
    ?>





    <form action="register.php" method="post">
      <div class="container">

        
          
          <div class="mb-3 flexitems">
            <label for="checkin" class="form-label flex">Check-In Date</label>
            <input type="date" class="registrationinput" name="checkin" required>
          </div>
          <div class="mb-3 flexitems">
            <label for="checkout" class="form-label">Check-Out Date</label>
            <input type="date" class="registrationinput" name="checkout" required>
          </div>
       
        
          
          <div class="mb-3 flexitems">
            <label for="guests" class="form-label">Number of Guests</label>
            <input type="number" min="1" class="registrationinput" name="guests" required>
          </div>
        
       
          <div class="mb-3 flexitems">
            <label for="specialrequests" class="form-label">Do you have any special requests?</label>
            <input type="email" class="registrationinput"  name="specialrequests">
            
          </div>

          <fieldset>
            <legend>Select your Room Type</legend>
            <div class="mb-3 flexitems">
                <label for="specialrequests" class="form-label">Room A</label>
                <input type="radio" class="registrationinput"  name="specialrequests">
            </div>
            <div class="mb-3 flexitems">
                <label for="specialrequests" class="form-label">Room B</label>
                <input type="radio" class="registrationinput"  name="specialrequests">
            </div>
            <div class="mb-3 flexitems">
                <label for="specialrequests" class="form-label">Room C</label>
                <input type="radio" class="registrationinput"  name="specialrequests">
            </div>
            <div class="mb-3 flexitems">
                <label for="specialrequests" class="form-label">Room D</label>
                <input type="radio" class="registrationinput"  name="specialrequests">
            </div>

          </fieldset>
        
        



        <div class="griditem6">
          <input class="btn" type="submit" value="Book" name="bookStay">
        </div>

      </div>





    </form>

  </div>


</body>
<div class="footer">
  <p>This website was created as a class assignment</p>
  <p>CSD460 Capstone in Software Development Project - Group B</p>
  <p>Bellevue University</p>

</div>
</body>

</html>