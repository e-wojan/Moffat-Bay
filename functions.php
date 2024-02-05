<?php
//----SESSION CHECK TO ENSURE USER IS LOGGED IN----

//this is the bulk code called by the session start of each web page
function check_login($con)
{
    if(isset($_SESSION['Email'])) 
    {
        $id = $_SESSION['Email'];
        $query = "select * from Users where Email = '$id' limit 1";

        $result = mysqli_query($con, $query);

        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    
    //User is not logged in if statement returns false/0. Redirect to login page
    header("Location: Login_Page.php");
    die;
}