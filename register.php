<?php
session_start();

$firstName = isset($_POST['fname']) ? $_POST['fname'] : '';
$lastName = isset($_POST['lname']) ? $_POST['lname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['pass']) ? $_POST['pass'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$addressLine1 = isset($_POST['address1']) ? $_POST['address1'] : '';
$addressLine2 = isset($_POST['address2']) ? $_POST['address2'] : '';
$city = isset($_POST['city']) ? $_POST['city'] : '';
$state = isset($_POST['state']) ? $_POST['state'] : '';
$zip = isset($_POST['zip']) ? $_POST['zip'] : '';
$country = isset($_POST['country']) ? $_POST['country'] : '';






$hashed_password = password_hash($password, PASSWORD_DEFAULT);


error_reporting(E_ALL);
ini_set('display_errors', 1);

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

        $stmt = $conn->prepare("insert into Users(First_Name, Last_Name, Phone, Email, User_Password, Street_Address, Street_Address_2, City, State, Zip, Country)
    values(?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param('sssssssssss', $firstName, $lastName, $phone, $email, $hashed_password, $addressLine1, $addressLine2, $city, $state, $zip, $country);
        $stmt->execute();
        $success = 1;
        $_SESSION['status'] = "Registration Successful!";
        header("Location: registration_page.php");
        
        $stmt->close();
        $conn->close();
    }
}










?>