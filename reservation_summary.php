    <!--Work In progress for reservation_summary-->



<?php


// Start the session
session_start();
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


    <div>
        <h1>Reservation Confirmation</h1>
    </div>

    <div class="respic"></div>

    <br><br>

    <div class="res-summary-box">
        <div id="grid-item-1">
            <h3 style="text-align:center">Reservation Summary:</h3>
        <div id="summary">
			

			</div>
        </div>
		
			
				
				
				
				
        <div id="grid-item-2">
		
		<h5 style="text-align:center">
				<form action='reservations.php' method='post'>
		echo ((strcat ($checkin));
		
		</form>
		
            <button class="confirm-btn-reservation-confirmation" id="cancel-reservation">Cancel</button>
            <button class="confirm-btn-reservation-confirmation" id="confirm-reservation">Confirm</button>
		</h5>
        
		</div>
    </div>



        <div class="footer">

        </div>
</body>

</html>