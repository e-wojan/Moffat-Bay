<?php
session_start();

$checkIn = isset($_POST['checkin']) ? $_POST['checkin'] : '';
$checkOut = isset($_POST['checkout']) ? $_POST['checkout'] : '';
$guests = isset($_POST['guests']) ? $_POST['guests'] : '';
$requests = isset($_POST['specialrequests']) ? $_POST['specialrequests'] : '';
$roomId = isset($_POST['room']) ? $_POST['room'] : '';
$status = 'Confirmed';
$user = $_SESSION['Email'];

switch($roomId){
    case '101':
        $roomId = 101;
        break;
    case '102':
        $roomId = 102;
        break;
    case '103':
        $roomId = 103;
        break;
}




error_reporting(E_ALL);
ini_set('display_errors', 1);




if (isset($_SESSION['Email'])) {
    
    $host = 'localhost';
    $username = 'moffat_user';
    
    $sqlpassword = 'groupb';
    
    $database = 'MoffatBay_Lodge';
    
    $conn = new mysqli($host, $username, $sqlpassword, $database);
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    
    } 
    else {
        
        if (isset($_POST['bookStay'])) {
            
            $query = "select * from Users where Email = '$user' limit 1";
            //mysqli uses the sql connector (con) to implement $query and ensure a match occurs
            $result = mysqli_query($conn, $query);
    
            if ($result) {
                //If the entered email and sql email match, check to ensure the sql row for the entry exists
                //finally, store the row of user data within $user_data
                if ($result && mysqli_num_rows($result) > 0) {
                    $user_data = mysqli_fetch_assoc($result);
    
                    //Store sql password and run hash checker
                    $userId = $user_data['User_ID'];
                }  
                
                
                if($roomId == 101){
                    echo $roomId;
                    
                    $query = "select * from Rooms where Room_ID = '$roomId' limit 1";

                    //mysqli uses the sql connector (con) to implement $query and ensure a match occurs
                    $result = mysqli_query($conn, $query);
        
                    $available = mysqli_fetch_assoc($result);
                    echo $available['Availability'];
                   
                    if($available['Availability'] == 0){
                        
                        $roomId = 105;
                        echo $roomId;
                        $query = "select * from Rooms where Room_ID = '$roomId' limit 1";

                    
                        $result = mysqli_query($conn, $query);
        
                        $available = mysqli_fetch_assoc($result);
                        echo $available['Availability'];
                        if($available['Availability'] == 0){
                            
                            $roomId = 107;
                            $query = "select * from Rooms where Room_ID = '$roomId' limit 1";

                    
                            $result = mysqli_query($conn, $query);
        
                            $available = mysqli_fetch_assoc($result);
                        }
                        
                        if($available['Availability'] == 0){
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);
                            setError();
                            // $_SESSION['status'] = 'Sorry, that room is no longer available.';
                            // header("Location: reservations.php");
                        }
                        else {
                            $stmt = $conn->prepare("insert into Reservations(Date_of_check_in, Date_of_check_out, Reservation_Status, Room_ID, Special_Requests, Total_Guests, User_ID)
                            values(?,?,?,?,?,?,?)");
                            $stmt->bind_param('sssisii', $checkIn, $checkOut, $status, $roomId, $requests, $guests, $userId);
                            $stmt->execute();
                            
                            if($stmt){
                                $zero = 0;
                                $stmt = $conn->prepare("update Rooms set Availability = '$zero' where Room_ID = '$roomId'");
                                $stmt->execute();
                                header("Location: Reservation_Success.php");
                            }
                
                        
                            $stmt->close();
                            $conn->close();
                         }
                        
                        
                    }
                    else{
                    $stmt = $conn->prepare("insert into Reservations(Date_of_check_in, Date_of_check_out, Reservation_Status, Room_ID, Special_Requests, Total_Guests, User_ID)
                    values(?,?,?,?,?,?,?)");
                        $stmt->bind_param('sssisii', $checkIn, $checkOut, $status, $roomId, $requests, $guests, $userId);
                        $stmt->execute();
                        
                        if($stmt){
                            $zero = 0;
                            $stmt = $conn->prepare("update Rooms set Availability = '$zero' where Room_ID = '$roomId'");
                            $stmt->execute();
                            header("Location: Reservation_Success.php");
                        }
                
                        
                        $stmt->close();
                        $conn->close();
                    }
                }
                elseif($roomId == 102){
                        
                        $query = "select * from Rooms where Room_ID = '$roomId' limit 1";
        
                        //mysqli uses the sql connector (con) to implement $query and ensure a match occurs
                        $result = mysqli_query($conn, $query);
            
                        $available = mysqli_fetch_assoc($result);
                        if($available['Availability'] == 0){
                            $roomId = 104;
                            $query = "select * from Rooms where Room_ID = '$roomId' limit 1";
        
                        
                            $result = mysqli_query($conn, $query);
            
                            $available = mysqli_fetch_assoc($result);
                            if($available['Availability'] == 0){
                                $roomId = 108;
                                $query = "select * from Rooms where Room_ID = '$roomId' limit 1";
        
                        
                                $result = mysqli_query($conn, $query);
            
                                $available = mysqli_fetch_assoc($result);
                            }
                            else{
                                $stmt = $conn->prepare("insert into Reservations(Date_of_check_in, Date_of_check_out, Reservation_Status, Room_ID, Special_Requests, Total_Guests, User_ID)
                                values(?,?,?,?,?,?,?)");
                                    $stmt->bind_param('sssisii', $checkIn, $checkOut, $status, $roomId, $requests, $guests, $userId);
                                    $stmt->execute();
                                    
                                    if($stmt){
                                        $zero = 0;
                                        $stmt = $conn->prepare("update Rooms set Availability = '$zero' where Room_ID = '$roomId'");
                                        $stmt->execute();
                                        header("Location: Reservation_Success.php");
                                    }
                            
                                    
                                    $stmt->close();
                                    $conn->close();
                             }
                            if($available['Availability'] == 0){
                                setError();
                                // $_SESSION['status'] = 'Sorry, that room is no longer available.';
                                // header("Location: reservations.php");
                            }
                            else{
                                $stmt = $conn->prepare("insert into Reservations(Date_of_check_in, Date_of_check_out, Reservation_Status, Room_ID, Special_Requests, Total_Guests, User_ID)
                                values(?,?,?,?,?,?,?)");
                                    $stmt->bind_param('sssisii', $checkIn, $checkOut, $status, $roomId, $requests, $guests, $userId);
                                    $stmt->execute();
                                    
                                    if($stmt){
                                        $zero = 0;
                                        $stmt = $conn->prepare("update Rooms set Availability = '$zero' where Room_ID = '$roomId'");
                                        $stmt->execute();
                                        header("Location: Reservation_Success.php");
                                    }
                            
                                    
                                    $stmt->close();
                                    $conn->close();
                            }
                        }
                        else {
                            $stmt = $conn->prepare("insert into Reservations(Date_of_check_in, Date_of_check_out, Reservation_Status, Room_ID, Special_Requests, Total_Guests, User_ID)
                            values(?,?,?,?,?,?,?)");
                                $stmt->bind_param('sssisii', $checkIn, $checkOut, $status, $roomId, $requests, $guests, $userId);
                                $stmt->execute();
                                
                                if($stmt){
                                    $zero = 0;
                                    $stmt = $conn->prepare("update Rooms set Availability = '$zero' where Room_ID = '$roomId'");
                                    $stmt->execute();
                                    header("Location: Reservation_Success.php");
                                }
                        
                                
                                $stmt->close();
                                $conn->close();
                        }
                }
                elseif($roomId == 103){
                        $query = "select * from Rooms where Room_ID = '$roomId' limit 1";
        
                        //mysqli uses the sql connector (con) to implement $query and ensure a match occurs
                        $result = mysqli_query($conn, $query);
            
                        $available = mysqli_fetch_assoc($result);
                        if($available['Availability'] == 0){
                            $roomId = 106;
                            $query = "select * from Rooms where Room_ID = '$roomId' limit 1";
        
                        
                            $result = mysqli_query($conn, $query);
            
                            $available = mysqli_fetch_assoc($result);
                            
                            if($available['Availability'] == 0){
                                setError();
                                // $_SESSION['status'] = 'Sorry, that room is no longer available.';
                                // header("Location: reservations.php");
                            }
                            else{
                                $stmt = $conn->prepare("insert into Reservations(Date_of_check_in, Date_of_check_out, Reservation_Status, Room_ID, Special_Requests, Total_Guests, User_ID)
                                values(?,?,?,?,?,?,?)");
                                    $stmt->bind_param('sssisii', $checkIn, $checkOut, $status, $roomId, $requests, $guests, $userId);
                                    $stmt->execute();
                                    
                                    if($stmt){
                                        $zero = 0;
                                        $stmt = $conn->prepare("update Rooms set Availability = '$zero' where Room_ID = '$roomId'");
                                        $stmt->execute();
                                        header("Location: Reservation_Success.php");
                                    }
                            
                                    
                                    $stmt->close();
                                    $conn->close();
                            }
                        }
                        else{
                            $stmt = $conn->prepare("insert into Reservations(Date_of_check_in, Date_of_check_out, Reservation_Status, Room_ID, Special_Requests, Total_Guests, User_ID)
                            values(?,?,?,?,?,?,?)");
                                $stmt->bind_param('sssisii', $checkIn, $checkOut, $status, $roomId, $requests, $guests, $userId);
                                $stmt->execute();
                                
                                if($stmt){
                                    $zero = 0;
                                    $stmt = $conn->prepare("update Rooms set Availability = '$zero' where Room_ID = '$roomId'");
                                    $stmt->execute();
                                    header("Location: Reservation_Success.php");
                                }
                        
                                
                                $stmt->close();
                                $conn->close();
                        }
                }
                else
                {
                    $stmt = $conn->prepare("insert into Reservations(Date_of_check_in, Date_of_check_out, Reservation_Status, Room_ID, Special_Requests, Total_Guests, User_ID)
                    values(?,?,?,?,?,?,?)");
                        $stmt->bind_param('sssisii', $checkIn, $checkOut, $status, $roomId, $requests, $guests, $userId);
                        $stmt->execute();
                        
                        if($stmt){
                            $zero = 0;
                            $stmt = $conn->prepare("update Rooms set Availability = '$zero' where Room_ID = '$roomId'");
                            $stmt->execute();
                            header("Location: Reservation_Success.php");
                        }
                
                        
                        $stmt->close();
                        $conn->close();
                }
           }
        }

    }
}

else{
    header('Location: Reservation_Login.php');
}

function setError(){
    $_SESSION['status'] = 'Sorry, that room is no longer available.';
    header("Location: reservations.php");
}





//Database Connection











?>