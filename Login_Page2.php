<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/loginstyle.css" />
    <title>CSD460 Moffat Bay Lodge Login Page</title>
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
        <a href="./attractions.php">Attractions</a>
        <a href="./reservationss.html">Reservations</a>
        <a href="./registration_page.php">Registration</a>
        <?php
            if (isset($_SESSION['Email'])) {

                ?>
        <div class="navitemlogin"><a href="Logout.php">Logout</a></div>
        <?php
            } else {
                ?>
        <div class="navitemlogin">
          <a href="Login_Page.php" class="active">Login</a>
        </div>
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
    <!--Moffat Bay Banner and Title , moved outside of container div. The container was impacting how the banner image was displaying-->
    <div class="bannerimg">
      <p>Moffat Bay Lodge</p>
    </div>

    <!--Container-->
    <div class="container">
      <!--Login Box-->
      <!--NOTES FOR RACHEL. I am struggling with getting the CSS to work with this. 
        Hi Tyler, it was easier for me to make a separate css for Login which you will see loginstyle.css . -->
      <div class="bodyinformation">
        <form method="post">
          <div class="logintextcenterofpage">Login Now</div>
          <br />

          <label for="fname">Enter Your Email Address:</label><br />
          <input type="text" name="user_name" /><br /><br />

          <label for="fname">Enter Your Password:</label><br />
          <input type="password" name="password" /><br /><br />

          <input
            type="submit"
            value="Login"
            style="font-size: 40px"
          /><br /><br />
        </form>
        <div class="signupnow">
          <a href="register_page.php">Signup</a>
        </div>
      </div>
    </div>

    <!--Bottom of Screen Color-->
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
