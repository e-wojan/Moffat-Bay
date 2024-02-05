<?php
//----THIS PAGE IS NOT MEANT TO BE USED IN MOFFAT BAY MAIN FILES----

//The session code below is to be pasted
//at the top of each web page. This will
//check to ensure a user is logged in.
//------------------------------------
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
    $_SESSION;
?>
<!------------------------------------>

<!--This HTML code is to provide an example of the logout function-->
<html>
<head>
    <title>Session code and logout for landing page</title>
</head>
<body>
    <a href="logout.php">Logout</a>

    <br>

    Hello Username.
</body>
</html>