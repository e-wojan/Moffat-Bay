<?php
session_start();
$confirmation = $_SESSION['confirmation'];
$roomtype = $_SESSION['roomtype'];


error_reporting(E_ALL);
ini_set('display_errors', 1);


if (isset($_SESSION['Email'])) {


    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    $host = 'localhost';
    $username = 'moffat_user';
    
    $sqlpassword = 'groupb';
    
    $database = 'MoffatBay_Lodge';
    
    $conn = new mysqli($host, $username, $sqlpassword, $database);
    if ($conn->connect_error) {


        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        die('Connection Failed: ' . $conn->connect_error);
    
    } 
    else {


        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        
            
                $stmt = $conn->prepare("delete from Reservations where Confirmation_Number = '$confirmation'");
                $stmt->execute();
                
                if($stmt){
                    $stmt = $conn->prepare("update Rooms set Availability = 1 where Room_ID = '$roomtype'");
                    $stmt->execute();

                    if($stmt){
                    $_SESSION['confirmation'] = '';
                    $_SESSION['status'] = 'Your reservation was successfully cancelled!';
                    header("Location: reservations.php");
                    }

                }
                else{
                    echo "An Error occurred while cancelling your reservation. Please try again";
                }
                    
                   
                $stmt->close();
                $conn->close();
             
    
    }
}





?>