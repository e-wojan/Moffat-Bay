    <!--Work In progress for reservation_summary-->



    <?php
    session_start();
    include "register.php";
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CSD460 Moffat Bay Lodge Login Page</title>
</head>

<body>
    
      <div class="navigation">

            <a href="./index.php">Home</a>
            <a href="./about.php">About</a>
            <a href="./contact.php">Contact Us</a>
            <a href="./attractions.php">Attractions</a>
            <a href="./reservations.php">Reservations</a>
        

            </div>
        </nav>
    </div>


    <div class="respic"></div>

    <br><br>

    <div class="res-summary-box">
        <div id="grid-item-1">
            <h3 style="text-align:center">Reservation Summary:</h3>
        <div id="summary">
	<div class="reservation_summary--" style="text-align:center">
    <p>Please review your choices below and confirm or cancel your reservation. </p>
    <p>Start Date: </p>
	<p>End Date: </p>
	<p>Number of Guests : </p>
    <p>Room Type: </p>
</div>	
		</div>
        </div>
		
			
				
				
				
				
        <div id="grid-item-2">
		
		<h5 style="text-align:center">
		<form action='reservations.php' method='post'>
                <div class="rescontainer4">
                    <div class="griditem6">
                        <input class="btn" type="submit" value="Confirm" name="ConfirmStay" id="bookbtn">
						<input class="btn" type="submit" value="Cancel" name="cancel-reservation" id="bookbtn">
                    </div>
                </div>
				
				

		
		
		</form>

		</h5>
        
		</div>
    </div>



</body>
<div class="footer">
    <p>This website was created as a class assignment</p>
    <p>CSD460 Capstone in Software Development Project - Group B</p>
    <p>Bellevue University</p>
</div>

</html>