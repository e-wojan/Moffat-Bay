<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

    <title>CSD460 Moffat Bay Lodge Landing Page</title>
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
            <a href="./about.php">About</a>
            <a href="./contact.php">Contact Us</a>
            <a href="./attractions.php">Attractions</a>
            <a href="./reservations.php" class="active">Reservations</a>
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




   <!-- <div class="container">

    </div> container-->
    <div class="bannerimg">
        <p>Moffat Bay Lodge</p>
    </div>

    <div class="bodyinformation">
        <h2 id="registrationheader">Book Your Stay</h2>


        <?php
        if (isset($_SESSION['status'])) {

            ?>
            <div class="alertstatus" role="alert">
                <?php echo $_SESSION['status']; ?>
            </div>
            <?php

            unset($_SESSION['status']);
        }
        ?>





        <form action="book_reservation.php" method="post">
            <div class="reservationcontainer">


                <div class="rescontainer1">
                    <div class="mb-3 containeritem">
                        <label for="checkin" class="form-label flex">Check-In Date</label>
                        <input type="date" class="reservationinput" name="checkin" required>
                    </div>
                    <div class="mb-3 containeritem">
                        <label for="checkout" class="form-label">Check-Out Date</label>
                        <input type="date" class="reservationinput" name="checkout" required>
                    </div>
                    <div class="mb-3 containeritem numberofguests">
                        <label for="guests" class="form-label">Number of Guests</label>
                        <select name="guests" class="reservationinput" required>
                            <option value="">--- Choose number of Guests ---</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <div id="passwordHelpBlock" class="form-text">
                        1-2 guests are 115.00 per night; 3-5 guests are 150.00 per night.
                        </div>
                    </div>


                    <div class="mb-3 containeritem">
                        <label for="specialrequests" class="form-label">Do you have any special requests?</label>
                        <input type="text" class="reservationinput" name="specialrequests">

                    </div>
                </div>



                <div class="rescontainer2">
                   
                </div>


                <div class="rescontainer3">
                
                    <div class="room1 rooms">
                    
                            
                            <input type="radio" name="room" value="101"><br>
                        <div class="roomcontainer">
                        <h2 class="roomheader">Double Full</h2>
                            <div class="bedroomimage">
                            <img src="images/DoubleBed.jpg" alt="Double Bed">
                        </div>

                        <div class="bedroominfo">
                            <label for="room">Double Full Bed</label>
                            
                            <p>Maximum occupancy: 5<br>
                            <br>Our Double Full rooms are a perfect option for a retreat and features two full-sized beds, with additional 
                            foldouts pr cribs available upon request, to ensure a comfortable night of rest.</p>
                        </div>
                            </div>
                    
                        
                    </div>
                    
                    <!-- <div class="room2">
                <div class="bedroomimage">
                    <img src="images/DoubleBed.jpg" alt="Double Bed">
                </div>
                <div class="bedroominfo">
                    <label for="room">Double Bed 2</label>
                    <input type="radio" name="room" value="105"><br>
                    <p>Here is some text. Here is some text. Here is some text. Here is some text.</p>
                </div>
            </div>  
            <div class="room3">
                <div class="bedroomimage">
                    <img src="images/DoubleBed.jpg" alt="Double Bed">
                </div>
                <div class="bedroominfo">
                    <label for="room">Double Bed 3</label>
                    <input type="radio" name="room" value="107"><br>
                    <p>Here is some text. Here is some text. Here is some text. Here is some text.</p>
                </div>
            </div>   -->
                
                    <div class="room2 rooms">
                    
                    <input type="radio" name="room" value="102"><br>
                    <div class="roomcontainer">
                    <h2 class="roomheader">Queen</h2>
                            <div class="bedroomimage">
                                <img src="images/QueenBed.jpg" alt="Queen Bed">
                            </div>
                            <div class="bedroominfo">
                                <label for="room">Queen Bed</label>
                               
                                <p>Maximum occupancy: 5<br>
                                <br>Our Queen rooms, with additional foldouts or cribs available upon request, 
                                provide a tranquil space to decompress while enjoying your stay.</p>
                            </div>
                            </div>
                        
                    </div>
                    
                        <div class="room3 rooms">
                        <input type="radio" name="room" value="103"><br>
                        <div class="roomcontainer">
                        <h2 class="roomheader">Double Queen</h2>
                            <div class="bedroomimage">
                                <img src="images/doublequeen.jpg" alt="Queen Bed">
                            </div>
                            <div class="bedroominfo">
                                <label for="room">Double Queen Bed</label>
                                
                                <p>Maximum occupancy: 5<br>
                                <br>Our Double Queen rooms, with additional foldouts or cribs available upon request, feature two queen size beds and 
                                are a perfect choice for guest who whish to enjoy a spacious stay during their retreat.</p>
                            </div>
                            </div>
                            
                    </div>
                    
                    <!-- <div class="room6">
                <div class="bedroomimage">
                    <img src="images/QueenBed.jpg" alt="Queen Bed">
                </div>
                <div class="bedroominfo">
                    <label for="room">Queen Bed 3</label>
                    <input type="radio" name="room" value="108"><br>
                    <p>Here is some text. Here is some text. Here is some text. Here is some text.</p>
                </div>
            </div>  -->
                 
                    <div class="room4 rooms">
                    <input type="radio" name="room" value="104"><br>
                    <div class="roomcontainer">
                    <h2 class="roomheader">King</h2>
                            <div class="bedroomimage">
                                <img src="images/kingbed.jpg" alt="King Bed">
                            </div>
                            <div class="bedroominfo">
                                <label for="room">King Bed</label>
                                
                                <p>Maximum occupancy: 5<br>
                                <br>Our King rooms, with additional foldouts or cribs available upon request, are a perfect choice for 
                                guests who desire a luxurious experience with a king-sized bed.</p>
                            </div>
                        </div>
                         
                    </div>
                    
                    <!-- <div class="room8">
                <div class="bedroomimage">
                    <img src="images/kingbed.jpg" alt="King Bed">
                </div>
                <div class="bedroominfo">
                    <label for="room">King Bed 2</label>
                    <input type="radio" name="room" value="106"><br>
                    <p>Here is some text. Here is some text. Here is some text. Here is some text.</p>
                </div>
            </div>   -->

                </div>

                <div class="rescontainer4">
                    <div class="griditem6">
                        <input class="btn" type="submit" value="Book" name="bookStay" id="bookbtn">
                    </div>
                </div>

            </div>





        </form>

    </div>


</body>
<div class="footer">
    <p>This website was created as a class assignment</p>
    <p>CSD460 Capstone in Software Development Project - Group B</p>
    <p>Bellevue University</p>

</div>
</body>

</html>
