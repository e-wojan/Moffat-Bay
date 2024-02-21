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
<?php 
    session_start();
    include "Loginfunction.php";
    
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
                <div class="navitemlogin"><a href="Login_Page.php" class="active">Login</a></div>
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

    <!--Moffat Bay Banner and Title-->
        <div class="bannerimg">
            <p>Moffat Bay Lodge</p>
        </div>
 <div class="container">
        <!--Login Box-->
        <!--NOTES FOR RACHEL. I am struggling with getting the CSS to work with this.-->
        <div class="bodyinformation">
            <div class="box">
               
                    <div style="font-size: 40px;">Reservation Summary</div><br>
                    <div class="successstatus" role="alert">
                            Congrats! You booked your reservation! Your confirmation number is <?php echo $_SESSION['confirmation']?>
                        </div>
                    <div class="bigcontainer">
                        <div class="summarycontainer">

                            <div class="summaryitem">
                                <label class="form-label flex" for="checkin">Check In Date</label>
                                <input class="reservationinput" type="text" name="checkin" value=<?php echo $_SESSION['checkin'];?> readonly>
                            </div>
                            <div class="summaryitem">
                                <label class="form-label flex" for="checkout">Check Out Date</label>
                                <input class="reservationinput" type="text" name="checkout" value=<?php echo $_SESSION['checkout'];?> readonly>
                            </div>
                            <div class="summaryitem">
                                <label class="form-label flex" for="guests">Total Guests</label>
                                <input class="reservationinput" type="text" name="guests" value=<?php echo $_SESSION['guests'];?> readonly>
                            </div>
                            <div class="imageflex">
                                <div class="roomtypestuff">
                                    <div class="roomtypeimage">
                                    <?php 
                                        if($_SESSION['roomtype'] == 101 || $_SESSION['roomtype'] == 105 || $_SESSION['roomtype'] == 109 || $_SESSION['roomtype'] == 113 || $_SESSION['roomtype'] == 117){
                                            echo "<img src='images\DoubleBed.jpg' alt='doublebed'>" ;
                                        }
                                        elseif($_SESSION['roomtype'] == 102 || $_SESSION['roomtype'] == 106 || $_SESSION['roomtype'] == 110 || $_SESSION['roomtype'] == 114 || $_SESSION['roomtype'] == 118){
                                            echo "<img src='images\QueenBed.jpg' alt='queenbed'>";
                                        }
                                        elseif($_SESSION['roomtype'] == 103 || $_SESSION['roomtype'] == 107 || $_SESSION['roomtype'] == 111 || $_SESSION['roomtype'] == 115 || $_SESSION['roomtype'] == 119){
                                            echo "<img src='images\doublequeen.jpg' alt='doublequeenbed'>";
                                        }
                                        else{
                                            echo "<img src='images\kingbed.jpg' alt='kingbed'>";
                                        }
                                        ?> 
                                    </div>;
                                <div class="roomtypeinfo">
                                <label class="form-label flex" for="room">Room Type: </label>
                                    <!-- <input class="reservationinput" type="text" name="room" value= -->
                                    <?php 
                                        if($_SESSION['roomtype'] == 101 || $_SESSION['roomtype'] == 105 || $_SESSION['roomtype'] == 109 || $_SESSION['roomtype'] == 113 || $_SESSION['roomtype'] == 117){
                                            echo "Double-Full" ."<br>";
                                            echo "Our Double Full rooms are a perfect option for a retreat and features two full-sized beds, with additional 
                                            foldouts pr cribs available upon request, to ensure a comfortable night of rest.";
                                        }
                                        elseif($_SESSION['roomtype'] == 102 || $_SESSION['roomtype'] == 106 || $_SESSION['roomtype'] == 110 || $_SESSION['roomtype'] == 114 || $_SESSION['roomtype'] == 118){
                                            echo "Queen" . "<br>";
                                            echo "Our Queen rooms, with additional foldouts or cribs available upon request, 
                                            provide a tranquil space to decompress while enjoying your stay.";
                                        }
                                        elseif($_SESSION['roomtype'] == 103 || $_SESSION['roomtype'] == 107 || $_SESSION['roomtype'] == 111 || $_SESSION['roomtype'] == 115 || $_SESSION['roomtype'] == 119){
                                            echo "Double-Queen" ."<br>";
                                            echo "Our Double Queen rooms, with additional foldouts or cribs available upon request, feature two queen size beds and 
                                            are a perfect choice for guest who whish to enjoy a spacious stay during their retreat.";
                                        }
                                        else{
                                            echo "King" ."<br>";
                                            echo "Our King rooms, with additional foldouts or cribs available upon request, are a perfect choice for 
                                            guests who desire a luxurious experience with a king-sized bed.";
                                        }
                                        ?> 
                                        <!-- readonly> -->
                                </div>
                                </div>
                            <div class="requests">
                                <label class="form-label flex" for="requests">Special Requests</label>
                                <input class="reservationinput" type="textarea" name="requests" value=<?php echo $_SESSION['requests'];?> readonly>
                            </div>
                                
                            </div>
                            
                            
                        </div>
                        <div class="costcontainer">
                                <div>
                                    <label class="form-label flex" for="requests">Total Cost:</label>
                                    <br>
                                    <br>
                                    Length of Stay:
                                    <?php
                                     $date1 = strtotime($_SESSION['checkin']);
                                     $date2 = strtotime($_SESSION['checkout']);
                                     $diff = $date2 - $date1;
                                     $days = floor($diff / (60 * 60 * 24));
                                     echo $days . " day(s)";
                                    
                                    ?>
                                    <br>
                                    <br>
                                    Guests:
                                    <?php
                                    echo $_SESSION['guests'];
                                    ?>
                                    <br>
                                    <br>
                                    Room Type: 
                                    <?php 
                                        if($_SESSION['roomtype'] == 101 || $_SESSION['roomtype'] == 105 || $_SESSION['roomtype'] == 109 || $_SESSION['roomtype'] == 113 || $_SESSION['roomtype'] == 117){
                                            echo "Double-Full";
                                        }
                                        elseif($_SESSION['roomtype'] == 102 || $_SESSION['roomtype'] == 106 || $_SESSION['roomtype'] == 110 || $_SESSION['roomtype'] == 114 || $_SESSION['roomtype'] == 118){
                                            echo "Queen";
                                        }
                                        elseif($_SESSION['roomtype'] == 103 || $_SESSION['roomtype'] == 107 || $_SESSION['roomtype'] == 111 || $_SESSION['roomtype'] == 115 || $_SESSION['roomtype'] == 119){
                                            echo "Double-Queen";
                                        }
                                        else{
                                            echo "King";
                                        }
                                        ?> 
                                    <br>
                                    <br>
                                    Room Cost:
                                    <?php 
                                        if($_SESSION['roomtype'] == 101 || $_SESSION['roomtype'] == 105 || $_SESSION['roomtype'] == 109 || $_SESSION['roomtype'] == 113 || $_SESSION['roomtype'] == 117){
                                            echo "$120";
                                        }
                                        elseif($_SESSION['roomtype'] == 102 || $_SESSION['roomtype'] == 106 || $_SESSION['roomtype'] == 110 || $_SESSION['roomtype'] == 114 || $_SESSION['roomtype'] == 118){
                                            echo "$140";
                                        }
                                        elseif($_SESSION['roomtype'] == 103 || $_SESSION['roomtype'] == 107 || $_SESSION['roomtype'] == 111 || $_SESSION['roomtype'] == 115 || $_SESSION['roomtype'] == 119){
                                            echo "$130";
                                        }
                                        else{
                                            echo "$150";
                                        }
                                        ?> 
                                    <br>
                                    <br>
                                    Cost per Guest: 
                                    <?php
                                    if($_SESSION['guests'] == 1 or $_SESSION['guests'] == 2){
                                        echo "$115 per night";
                                    }
                                    else{
                                        echo "$150 per night";
                                    }
                                    ?>
                                    <br>
                                    -----------------
                                    <br>
                                    Total: 
                                    <?php 
                                    $rate;
                                    $date1 = strtotime($_SESSION['checkin']);
                                    $date2 = strtotime($_SESSION['checkout']);
                                    $diff = $date2 - $date1;
                                    $days = floor($diff / (60 * 60 * 24));
                                    
                                    if($_SESSION['guests'] == 1 || $_SESSION['guests'] == 2){
                                        $rate = 115;
                                    }
                                    else{
                                        $rate = 150;
                                    }

                                    
                                    echo "$" .$rate * $days * $_SESSION['guests'];;
                                    ?>
                                </div>
                        </div>
                    </div>
                
                        
                    <br>
                    
                    

                    
            </div>
            <div class="buttonContainer">
                <div class="ressummarybtn">
                    <form action="cancel_reservation.php" method="post">
                        <input id="cancelres" type="submit" value="Cancel Reservation" class="cancelreservation">
                        
                    </form>
                 </div>
                 
            </div>

            
        </div>

        <!--Bottom of Screen Color-->
        <div class="footer">

        </div>
</body>

</html>
