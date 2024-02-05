<?php
session_start();

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['pass'];
$phone = $_POST['phone'];
$addressLine1 = $_POST['address1'];
$addressLine2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];






$hashed_password = password_hash($password, PASSWORD_DEFAULT);

//Uncomment to display any errors on the page that occur on backend
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

//Database Connection
$success = 0;
$host = 'localhost';
$username = 'moffat_user';
$sqlpassword = 'groupb';
$database = 'MoffatBay_Lodge';

$conn = new mysqli($host, $username, $sqlpassword, $database);
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);

} else {
    if (isset($_POST['formSubmit'])) {

        $stmt = $conn->prepare("insert into Users(First_Name, Last_Name, Phone, Email, User_Password, Street_Address, Street_Address2, City, State, Zip, Country)
    values(?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param('sssssssssss', $firstName, $lastName, $phone, $email, $hashed_password, $addressLine2, $addressLine1, $city, $state, $zip, $country);
        $stmt->execute();
        $success = 1;
        $_SESSION['status'] = "Registration Successful!";
        header("Location: registration_page.php");
        
        $stmt->close();
        $conn->close();
    }
}










?>