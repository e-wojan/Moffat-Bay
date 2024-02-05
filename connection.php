<?php
//----SQL DB CONNECTOR----
$dbhost = "localhost";
$dbuser = "moffat_user";
$dbpass = "groupb";
$dbname = "moffatbay_lodge";

//con is used in the login page to verify the login inputs match the SQL DB
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}