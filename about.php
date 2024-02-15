<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>CSD460 Moffat Moffat Bay Lodge About Page</title>
  </head>
  <script></script>
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
        <a href="./about.php" class="active">About</a>
        <a href="./contact.php">Contact Us</a>
        <a href="./attractions.php">Attractions</a>
        <a href="./reservationss.html">Reservations</a>
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

    <div class="bannerimg">
      <p>Moffat Bay Lodge</p>
    </div>

    <div class="container">
      <!--container-->
      <div class="bodyinformation">
        <div class="aboutimage">
          <h2 style="font-size: 50px; font-weight:bolder;">About Us</h2>
          <img src="./images/logintrees.jpg" />
        </div>
        
        <br />
        In today's fast-paced world, finding a tranquil retreat becomes
        paramount for those seeking respite from the daily grind. Moffat Bay
        Lodge, a picturesque haven nestled along the coast, offers a serene
        escape and promises an unforgettable experience. With its spectacular
        views, luxurious accommodations, and a plethora of exciting attractions,
        Moffat Moffat Bay Lodge caters to every visitor's desire for
        rejuvenation and adventure.

        <br />
        <br />

        To begin planning an unforgettable stay at Moffat Bay Lodge, making
        reservations is a seamless process. The lodge's user-friendly website
        provides an easy-to-navigate interface, allowing prospective guests to
        explore various accommodation options and special packages. The
        reservation system is efficient, ensuring a hassle-free booking
        experience. By inputting necessary information, such as preferred
        check-in and check-out dates, the number of guests, and any specific
        requests, guests can secure their spot in paradise effortlessly.

        <br />
        <br />
        For ease of access and personalized details, Moffat Bay Lodge offers a
        login feature on its website. By creating an account, guests can view
        their reservation details, update personal information, and access
        exclusive offers. This login feature also enables visitors to customize
        their stay further by selecting additional amenities or making
        last-minute changes to their itinerary. With this user-friendly
        approach, Moffat Bay Lodge strives to enhance guest satisfaction and
        provide a seamless experience from the initial reservation until the end
        of their stay.

        <br />
        <br />
        One of the greatest attractions of Moffat Bay Lodge is its unparalleled
        natural beauty. Situated on a stunning coastline, the lodge boasts
        breathtaking panoramic views of turquoise waters, pristine sandy
        beaches, and lush greenery. Nature enthusiasts can explore the lodge's
        surrounding areas and discover hidden gems, such as scenic hiking
        trails, secluded coves, and vibrant marine life. With its convenient
        location, Moffat Bay Lodge also offers exciting water activities,
        including snorkeling, diving, and kayaking, which allow guests to
        immerse themselves in the abundant marine wonders.
      </div>
    </div>
    <!--container-->

    <div class="footer">
      <p>
        This website was created as a class assignment
        <br />
        CSD460 Capstone in Software Development Project - Group B
        <br />
        Bellevue University
      </p>
    </div>
  </body>
</html>
