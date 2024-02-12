<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>CSD460 Moffat Moffat Bay Lodge Attractions Page</title>
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
        <a href="./about.php">About</a>
        <a href="./contact.php">Contact Us</a>
        <a href="./attractions.php" class="active">Attractions</a>
        <a href="./reservations.php">Reservations</a>
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
          <div class="" role="">
            Hello,
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
          <div class="" role="">
            Hello,
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
      <div class="attractionsbody">
        <div class="attractionsimages">
          <img class="attractimage1" src="./images/pexels-snowboarding.jpg" />
          <img class="attractimage2" src="./images/pexels-walker.jpg" />
        </div>

        <h2>Attractions</h2>
        <br />
        Situated on a stunning coastline, the lodge boasts breathtaking
        panoramic views of turquoise waters, pristine sandy beaches, and lush
        greenery. Nature enthusiasts can explore the lodge's surrounding areas
        and discover hidden gems, such as scenic hiking trails, secluded coves,
        and vibrant marine life. With its convenient location, Moffat Bay Lodge
        offers many exciting activities.
        <br />
        <br />

        Nature lovers will find themselves captivated by the untamed beauty of
        the surrounding area. Visitors can embark on guided hiking tours through
        the nearby rainforest, exploring hidden trails and encountering some of
        the most unique wildlife.
        <br />
        <br />
        For those in search of relaxation, Moffat Bay Lodge offers an array of
        amenities to unwind and rejuvenate. The lodge boasts a magnificent
        outdoor heated pool and spa facilities, providing the perfect setting to
        unwind and soak in the natural beauty of the surroundings. Guests can
        also indulge in a luxurious massage or spa treatment, designed to soothe
        both the body and mind.
        <br />
        <br />
        This is a breathtaking location!
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
