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
    <?php
  session_start();
  include "connection.php";
  ?>

    <nav>
        <!--logo-->
        <!--top navigation bar-->
        <div class="navigation">

            <a href="./index.php">Home</a>
            <a href="./about.php">About</a>
            <a href="./contact.php">Contact Us</a>
            <a href="./attractions.php">Attractions</a>
            <a href="./reservations.php" class="active">Reservations</a>
            <?php
            if (isset($_SESSION['Email'])) {

                ?>

                <a href="./Reservation_Search.php">My Reservations</a>


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
                        <?php echo $_SESSION['Email'] . "!"; ?>
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
    <form method="post" action="Reservation_Search.php">
        <label for="fname">Enter Your Confirmation Number:</label><br>
        <input type="number" name="c_number"  class="registrationinput" required><br><br>

        <div id="submitbutton">
        <input class="btn" type="submit" value="Search"><br><br>
        </div>
    </form>

    <?php
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $c_number = isset($_POST['c_number']) ? $_POST['c_number'] : '';

    if (!empty($c_number)) {
        $query = "select * from Reservations where Confirmation_Number = '$c_number' limit 1";
        $result = mysqli_query($con, $query);
        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
    ?>
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
        <?php }
                while($row = $result->fetch_assoc()) { 
                }
            }?>
            <tr class="data">
                <td><?php echo "{$row['Confirmation_Number']}"; ?></td>
                <td><?php echo "{$row['Total_Guests']}"; ?></td>
                <td><?php echo "{$row['Date_of_Check_in']}"; ?></td>
                <td><?php echo "{$row['Date_of_Check_out']}"; ?></td>
                <td><?php echo "{$row['Special_Requests']}"; ?></td>
                <td><?php echo "{$row['Room_ID']}"; ?></td>
            </tr>
        <?php } ?>
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
