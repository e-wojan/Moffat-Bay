<?php
//------------------SESSION CODE TO CHECK LOGIN------------------
session_start();


//Connects these files so they can call variables established here
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //If statements checks to ensure login button posts data
    //Posted variables are stored
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password)) {
        //Confirms posted data is not blank/null
        $query = "select * from Users where Email = '$user_name' limit 1";
        //mysqli uses the sql connector (con) to implement $query and ensure a match occurs
        $result = mysqli_query($con, $query);

        if ($result) {
            //If the entered email and sql email match, check to ensure the sql row for the entry exists
            //finally, store the row of user data within $user_data
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                
                //Store sql password and run hash checker
                $pass = $user_data['User_Password'];
                if (password_verify($password, $pass)) {
                    $_SESSION['Email'] = $user_data['Email'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        //an error message needs to be written here -----!!!!EMPTY AREA, STILL NEEDS TO BE CODED!!!!-----
    } else {
        //an error message needs to be written here -----!!!!EMPTY AREA, STILL NEEDS TO BE CODED!!!!-----
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CSD460 Moffat Bay Lodge Login Page</title>
</head>
<script>

</script>

<body>
    <nav>
        <!--logo-->
        <!--top navigation bar-->
        <div class="navigation">

            <a href="./index.html">Home</a>
            <a href="./about.html">About</a>
            <a href="./contact.html">Contact Us</a>
            <a href="./attractions.html">Attractions</a>
            <a href="./reservationss.html">Reservations</a>
            <a href="registration_page.php">Registration</a>
            <div class="navitemlogin"><a href="./login.html" class="active">Login</a></div>

        </div>
    </nav>

    <!--Moffat Bay Banner and Title-->
    <div class="container">
        <div class="bannerimg">
            <p>Moffat Bay Lodge</p>
        </div>

        <!--Login Box-->
        <!--NOTES FOR RACHEL. I am struggling with getting the CSS to work with this.-->
        <div class="bodyinformation">
            <div class="box">
                <form method="post">
                    <div style="font-size: 40px;">Login Now</div><br>

                    <label for="fname">Enter Your Email Address:</label><br>
                    <input type="text" name="user_name" size="50"><br><br>

                    <label for="fname">Enter Your Password:</label><br>
                    <input type="password" name="password" size="50"><br><br>

                    <input type="submit" value="Login"><br><br>

                    <a href="register_page.php">Signup</a>
                </form>
            </div>
        </div>

        <!--Bottom of Screen Color-->
        <div class="footer">

        </div>
</body>

</html>