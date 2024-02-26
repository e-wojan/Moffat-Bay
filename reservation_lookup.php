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
        <a href="./reservations.php">Reservations</a>
        <?php
        if (isset($_SESSION['Email'])) {

            ?>

            <a href="./reservation_lookup.php" class="active">My Reservations</a>


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

<div class="bodyinformation">
    <h2 id="registrationheader">Reservation Lookup</h2>
    <p>Please enter either your Confirmation Number or your Email Address to look up your reservation(s).</p><br/>
    <div class="box"
    <!--container-->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
        <label for="fname">Confirmation Number:</label><br>
        <input type="number" name="c_number"  class="registrationinput"><br><br>

        <label for="fname">Email:</label><br>
        <input type="text" name="email"  class="registrationinput"><br><br>

        <div id="submitbutton">
            <input class="btn" type="submit" value="Search"><br><br>
        </div>
    </form>
</div>

<?php

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$c_number = isset($_POST['c_number']) ? $_POST['c_number'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "SELECT * FROM reservationinformation WHERE Confirmation_Number = '$c_number' or Email = '$email'";
    $result = mysqli_query($con, $query);
    if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
?>
            <br><br><table class ="table-style">
                <thead>
                    <tr>
                        <th>Reservation ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Room Type</th>
                        <th>Check In Date</th>
                        <th>Check Out Date</th>
                        <th>Number of Guests</th>
                        <th>Nights Booked</th>
                    </tr>
                </thead>
                <tbody>
<?php
            while ($row = $result->fetch_assoc()) {
?>
                <tr>
                <td><?php echo "{$row['Confirmation_Number']}"; ?></td>
                <td><?php echo "{$row['First_Name']}"; ?></td>
                <td><?php echo "{$row['Last_Name']}"; ?></td>
                <td><?php echo "{$row['Email']}"; ?></td>
                <td><?php echo "{$row['Room_Type']}"; ?></td>
                <td><?php echo "{$row['Date_of_Check_in']}"; ?></td>
                <td><?php echo "{$row['Date_of_Check_out']}"; ?></td>
                <td><?php echo "{$row['Total_Guests']}"; ?></td>
                <td><?php echo "{$row['Nights_Booked']}"; ?></td>
                </tr>
<?php
            }
?>
            </tbody></table>
<?php
        } else {
            $_SESSION['SearchError'] = "Sorry, there were no reservations found with that confirmation number or email. Please try again.";
        }
    }
}
?>
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
