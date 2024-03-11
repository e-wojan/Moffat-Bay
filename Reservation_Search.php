<?php
session_start();
include ("connection.php");
include ("Search_Function.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>CSD460 Moffat Moffat Bay Lodge Reservation Search Page</title>
  </head>
  <script></script>
  <body>
    <nav>
        <!--logo-->
        <!--top navigation bar-->
        <div class="navigation">

            <a href="./index.php">Home</a>
            <a href="./about.php">About</a>
            <a href="./contact.php">Contact Us</a>
            <a href="./attractions.php">Attractions</a>
            <a href="./reservations.php">Reservations</a>
            <?php
            if (isset($_SESSION['Email'])) {

                ?>

                <a href="./Reservation_Search.php" class="active">My Reservations</a>


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

    <div class="container">
      <!--container-->
      <div class="bodyinformation">
        <div class="box">
            <form method="post" action="Search_Function.php">
                <div style="font-size: 40px;text-align:center;">Search Reservation</div><br>
                <?php
                if (isset($_SESSION['SearchError'])) {

                    ?>
                    <div class="alertstatus" role="alert">
                        <?php echo $_SESSION['SearchError']; ?>
                    </div>
                    <?php

                    unset($_SESSION['SearchError']);
                }
                ?>

                <label for="fname">Enter Your Confirmation Number or Email:</label><br>
                <input type="text" name="c_number"  class="registrationinput" required><br><br>

                <div id="submitbutton">
                <input class="btn" type="submit" value="Search"><br><br>
                </div>
            </form>

    <table border="1">
        <caption><h3>Reservation Summary</h3></caption>
        <tr>
            <th>Confirmation Number</th>
            <th>Guests</th>
            <th>Check In Date</th>
            <th>Check Out Date</th>
            <th>Special Requests</th>
            <th>Room Number</th>
        </tr>
        <?php 
        if (isset($_SESSION['result_data']))
            $result_data = $_SESSION['result_data'];
            //TEMP ECHO TO PRODUCE THE ARRAY PULLED CORRECTLY
            echo '<pre>'; print_r($result_data); echo '</pre>';
            while($row = $result_data->fetch_assoc()) {        
        ?>
            <tr class="data">
                <td><?php echo "{$row['Confirmation_Number']}"; ?></td>
                <td><?php echo "{$row['Total_Guests']}"; ?></td>
                <td><?php echo "{$row['Date_of_Check_in']}"; ?></td>
                <td><?php echo "{$row['Date_of_Check_out']}"; ?></td>
                <td><?php echo "{$row['Special_Requests']}"; ?></td>
                <td><?php echo "{$row['Room_ID']}"; ?></td>
            </tr>
        <?php 
            }
        ?>
    </table>
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
