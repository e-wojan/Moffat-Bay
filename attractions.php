      <!--Photos taken from https://moffat-bay.org/local-attractions/-->
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
    <div class="attractionsbody">
      <div class="attractionscontainer">
        <div class="itemcontainer">
            <div class="headercontainer">
              <h2 id="attractionsheader">Attractions</h2>
            </div>
            <div class="imagecontainer">
                <img class="attractimage2" src="./images/pexels-walker.jpg" />
            </div>
            <div class="textcontainer">
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
        </div>
        
        <div class="itemcontainer">
            <div class="headercontainer">
              <h2 id="attractionsheader">Hiking</h2>
            </div>
            <div class="textcontainer">
              <br />
              <br />
              Moffat Bay boasts a plethora of hiking trails fit for all walks of life.
              On site we have map boards at the start of each trail to indicate difficulty 
              level to ensure the adventure is best fit for you. We recently were able to 
              develop two accessability trails made of hybrid concrete sidewalk and board/plank 
              bridge accesses to retain the natural feel. Hand maps are available at the front 
              office.
            </div>
            <div class="imagecontainer">
            <img class="attractimage2" src="./images/hiking2.png" />
            </div>
            
        </div>

        <div class="itemcontainer">
            <div class="headercontainer">
              <h2 id="attractionsheader">Kayaking</h2>
            </div>
            <div class="imagecontainer">
              <img class="attractimage2" src="./images/kayaking2.png" />
            </div>
            <div class="textcontainer">
              <br />
              <br />
              
              Come enjoy the fresh spring waters of our local rivers. Our lodge has worked with the 
              state for years to ensure our water sources are kept clean and natural through preservation 
              and strict run off rules from surrounding areas. We currently have three kayaking routes on site 
              ranging from beginner, intermediate, and experienced. Whether you're searching for lazy river vibes 
              or getting a good work out while enjoying the sights, we can accommodate you.
            </div>
            
            
        </div>
        <div class="itemcontainer">
            <div class="headercontainer">
              <h2 id="attractionsheader">Whale Watching</h2>
            </div>
            <div class="textcontainer">
              <br />
              <br />
              The wildlife of Moffat Bay is second to none. From the local species in our surrounding forests or the 
              critters in our diverse ocean front, it can all be seen. Our whales in particular love seeing our guests. 
              So much so that we have a dedicated service to take you out to say hello to the friendly giants. Every 
              Tuesday and Thursday we offer boat rides on the ocean front for two hours to give plenty of time for you 
              and your new whale pals to get to know each other. More information can be found at the front office.
            </div>
            <div class="imagecontainer">
            <img class="attractimage2" src="./images/whales2.png" />
            </div>
            
            
        </div>

        <div class="itemcontainer">
            <div class="headercontainer">
              <h2 id="attractionsheader">Scuba Diving</h2>
            </div>
           
            <div class="imagecontainer">
              <img class="attractimage2" src="./images/scuba2.png" />
            </div>
            <div class="textcontainer">
              <br />
              <br />
              Whale watching wasn't enough and still want some ocean fun? Did you know we have one of the most diverse 
              coral reefs in the nation? We work hard to keep that ranking so our local wildlife can live happy and so 
              you can come see them thrive. We offer daily scuba tours to visit our reefs in all of their beauty. The trip 
              presides the whole coastline of Moffat to ensure you get the biggest bang for your buck. No equipment required 
              as we provide all scuba gear on site and have dedicated boats for the trip.
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
