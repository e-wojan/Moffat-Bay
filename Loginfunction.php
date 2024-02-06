<?php
//------------------SESSION CODE TO CHECK LOGIN------------------
session_start();


//Connects these files so they can call variables established here
include("connection.php");
include("functions.php");




    //If statements checks to ensure login button posts data
    //Posted variables are stored
    $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (!empty($user_name) && !empty($password)) {
        //Confirms posted data is not blank/null
        $query = "select * from Users where Email = '$user_name' limit 1";
        //mysqli uses the sql connector (con) to implement $query and ensure a match occurs
        $result = mysqli_query($con, $query);

        if ($result) {
            //If the entered email and sql email match, check to ensure the sql row for the entry exists
            //finally, store the row of user data within $user_data
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                //Store sql password and run hash checker
                $pass = $user_data['User_Password'];
                if (password_verify($password, $pass)) {
                    $_SESSION['Email'] = $user_data['Email'];
                    header("Location: index.php");
                    die;
                } 
                else{
                    $_SESSION['LoginError'] = "Sorry, that username or password doesn't exist. Please try again.";
                header("Location: Login_Page.php");
                }
            } 
            else{
                $_SESSION['LoginError'] = "Sorry, that username or password doesn't exist. Please try again.";
                header("Location: Login_Page.php");
            }
            

        } 

        // else{
        //     $_SESSION['LoginError'] = "Sorry, that username or password doesn't exist. Please try again.";
        //     header("Location: Login_Page.php");
        // }
        //an error message needs to be written here -----!!!!EMPTY AREA, STILL NEEDS TO BE CODED!!!!-----
    }



?>