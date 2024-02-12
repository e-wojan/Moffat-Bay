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
      <div class="alertstatus" role="alert">
        <?php echo $_SESSION['status']; ?>
      </div>
      <?php

      unset($_SESSION['status']);
    }
    ?>





    <form action="book_reservation.php" method="post">
      <div class="reservationcontainer">

        
          <div class="rescontainer1">
            <div class="mb-3 containeritem">
                <label for="checkin" class="form-label flex">Check-In Date</label>
                <input type="date" class="reservationinput" name="checkin" required>
            </div>
            <div class="mb-3 containeritem">
                <label for="checkout" class="form-label">Check-Out Date</label>
                <input type="date" class="reservationinput" name="checkout" required>
            </div>
          </div>
          
       
        
          <div class="rescontainer2">
            <div class="mb-3 containeritem">
                <label for="guests" class="form-label">Number of Guests</label>
                <input type="number" min="1" class="reservationinput" name="guests" required>
            </div>
            
        
            <div class="mb-3 containeritem">
                <label for="specialrequests" class="form-label">Do you have any special requests?</label>
                <input type="text" class="reservationinput"  name="specialrequests">
                
            </div>
          </div>
          

          <div class="rescontainer3">
            <div class="room1">
                <div class="bedroomimage">
                    <img src="images/DoubleBed.jpg" alt="Double Bed">
                </div>
               
                <div class="bedroominfo">
                    <label for="room">Double Bed 1</label>
                    <input type="radio" name="room" value="101"><br>
                    <p>Here is some text. Here is some text. Here is some text. Here is some text.</p>
                </div>
                
                    
            </div>  
            <div class="room2">
                <div class="bedroomimage">
                    <img src="images/DoubleBed.jpg" alt="Double Bed">
                </div>
                <div class="bedroominfo">
                    <label for="room">Double Bed 2</label>
                    <input type="radio" name="room" value="105"><br>
                    <p>Here is some text. Here is some text. Here is some text. Here is some text.</p>
                </div>
            </div>  
            <div class="room3">
                <div class="bedroomimage">
                    <img src="images/DoubleBed.jpg" alt="Double Bed">
                </div>
                <div class="bedroominfo">
                    <label for="room">Double Bed 3</label>
                    <input type="radio" name="room" value="107"><br>
                    <p>Here is some text. Here is some text. Here is some text. Here is some text.</p>
                </div>
            </div>  

            <div class="room4">
                 <div class="bedroomimage">
                    <img src="images/QueenBed.jpg" alt="Queen Bed">
                </div>
                <div class="bedroominfo">
                    <label for="room">Queen Bed 1</label>
                    <input type="radio" name="room" value="102"><br>
                    <p>Here is some text. Here is some text. Here is some text. Here is some text.</p>
                </div>
            </div> 
            <div class="room5">
                 <div class="bedroomimage">
                    <img src="images/QueenBed.jpg" alt="Queen Bed">
                </div>
                <div class="bedroominfo">
                    <label for="room">Queen Bed 2</label>
                    <input type="radio" name="room" value="104"><br>
                    <p>Here is some text. Here is some text. Here is some text. Here is some text.</p>
                </div>  
            </div> 
            <div class="room6">
                <div class="bedroomimage">
                    <img src="images/QueenBed.jpg" alt="Queen Bed">
                </div>
                <div class="bedroominfo">
                    <label for="room">Queen Bed 3</label>
                    <input type="radio" name="room" value="108"><br>
                    <p>Here is some text. Here is some text. Here is some text. Here is some text.</p>
                </div>
            </div> 
            <div class="room7">
                 <div class="bedroomimage">
                    <img src="images/kingbed.jpg" alt="King Bed">
                </div>
                <div class="bedroominfo">
                    <label for="room">King Bed 1</label>
                    <input type="radio" name="room" value="103"><br>
                    <p>Here is some text. Here is some text. Here is some text. Here is some text.</p>
                </div>
            </div>  
            <div class="room8">
                <div class="bedroomimage">
                    <img src="images/kingbed.jpg" alt="King Bed">
                </div>
                <div class="bedroominfo">
                    <label for="room">King Bed 2</label>
                    <input type="radio" name="room" value="106"><br>
                    <p>Here is some text. Here is some text. Here is some text. Here is some text.</p>
                </div>
            </div>  

          </div>
         
        <div class="rescontainer4">
            <div class="griditem6">
            <input class="btn" type="submit" value="Book" name="bookStay">
            </div>
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