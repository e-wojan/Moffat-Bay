<?php
session_start();
include ("connection.php");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $c_number = isset($_POST['c_number']) ? $_POST['c_number'] : '';

    if (!empty($c_number)) {
        if (!filter_var($c_number, FILTER_VALIDATE_EMAIL)) {
            $query = "select Confirmation_Number, Total_Guests, Date_of_Check_in, Date_of_Check_out, Special_Requests, Room_ID from Reservations where Email = '$c_number' limit 1";
            $result = mysqli_query($con, $query);
            if ($result) {
                if ($result && mysqli_num_rows($result) > 0) {
                    $_SESSION['result_data'] = mysqli_fetch_assoc($result);
                    header("Location: Reservation_Search.php");
                } else {
                    $_SESSION['SearchError'] = "Sorry, the Reservation Number/Email you entered is incorrect or does not exist. Please try again.";
                    header("Location: Reservation_Search.php");
                }
            } else {
                $_SESSION['SearchError'] = "Sorry, the Reservation Number/Email you entered is incorrect or does not exist. Please try again.";
                header("Location: Reservation_Search.php");
            }
        } elseif (is_numeric($c_number)) {
            $query = "select Confirmation_Number, Total_Guests, Date_of_Check_in, Date_of_Check_out, Special_Requests, Room_ID from Reservations where Confirmation_Number = '$c_number' limit 1";
            $result = mysqli_query($con, $query);
            if ($result) {
                if ($result && mysqli_num_rows($result) > 0) {
                    $_SESSION['result_data'] = mysqli_fetch_assoc($result);
                    header("Location: Reservation_Search.php");
                } else {
                    $_SESSION['SearchError'] = "Sorry, the Reservation Number/Email you entered is incorrect or does not exist. Please try again.";
                    header("Location: Reservation_Search.php");
                }
            } else {
                $_SESSION['SearchError'] = "Sorry, the Reservation Number/Email you entered is incorrect or does not exist. Please try again.";
                header("Location: Reservation_Search.php");
            }
        } else {
            $_SESSION['SearchError'] = "Sorry, the Reservation Number/Email you entered is incorrect or does not exist. Please try again.";
            header("Location: Reservation_Search.php");
        }
    }

    
    
    
    
    /*
    ORIGINAL SEARCH FUNCTION IF NEEDED FOR REVIEW

    if (!empty($c_number)) {
        $query = "select Confirmation_Number, Total_Guests, Date_of_Check_in, Date_of_Check_out, Special_Requests, Room_ID from Reservations where Confirmation_Number = '$c_number' limit 1";
        $result = mysqli_query($con, $query);
        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                if (!filter_var($result, FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['result_data'] = mysqli_fetch_assoc($result);
                    header("Location: Reservation_Search.php");
                } elseif (is_numeric($result)) {
                    $_SESSION['result_data'] = mysqli_fetch_assoc($result);
                    header("Location: Reservation_Search.php");
                } else {
                    $_SESSION['SearchError'] = "Sorry, the Reservation Number/Email you entered is incorrect or does not exist. Please try again.";
                header("Location: Reservation_Search.php");
                }
            } else {
                $_SESSION['SearchError'] = "Sorry, the Reservation Number/Email you entered is incorrect or does not exist. Please try again.";
                header("Location: Reservation_Search.php");
            }
        }
    }
*/   