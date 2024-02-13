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
  
   
      
    
    <div class="container"> <!--container-->
    <div class="bodyinformation">

    <h2>Contact Us</h2>
    <br>
        <p>
            If you are searching for a peaceful and enchanting getaway, look no further than our lodge.
             Nestled in the heart of nature, our lodge offers the perfect ambiance for those seeking serenity and relaxation.
            Whether you are planning a weekend escape, a romantic retreat, or a family vacation, our lodge has something to offer for everyone.
            <br>
            <br>
            
            One of the most important aspects of any lodge experience is the ease of communication and accessibility. 
            At our lodge, we understand the importance of providing clear and efficient ways for guests to contact us. 
            We have established multiple channels of communication to ensure that your needs and preferences are met without any hassle.
            <br>
            <br>
            
            First and foremost, we have a dedicated phone line which is available 24/7.
             Our friendly and professional staff are just a phone call away, ready to assist you with any inquiries or concerns you may have.
              Whether you need assistance with reservations, want to inquire about nearby attractions, or have any specific requests, 
              our team is committed to providing you with the assistance you need to make your stay truly memorable.
              <br>
              <br>

              <h3>Email: moffatbaylodge@groupb.com
                <br>
                Telephone: (800) 555-5555
                <br>
                Social Media:

              </h3>
            </p>
</div>

</div> <!--container-->

<div class="footer">
    <p>This website was created as a class assignment
        <br>
    CSD460 Capstone in Software Development Project - Group B
    <br>
    Bellevue University</p>
</div>
</body>
</html>
