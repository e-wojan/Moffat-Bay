<?php
//----IMPORTANT DETAILS WHEN LOGGING OUT

//Whenever another page needs a logout button, simply write the below HTML and they will
//be logged out and returned to the landing page

//<a href="logout.php">Logout</a>

//----SESSION CODE TO LOGOUT USER----
session_start();

if(isset($_SESSION['Email']))
{
    unset($_SESSION['Email']);
}

header("Location: index.php");