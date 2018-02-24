<?php

if(session_status() == PHP_SESSION_NONE)
    //set session
    session_start();

//add db
require_once __DIR__.'/../include/connect-db.inc.php';

$newsletters_message = FALSE;

    //validate email field
    if(preg_match('%^[A-Za-z0-9._\%-]+\@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$%',stripslashes(trim($_GET['newletters_user']))))
        $user_email = clean_input($_POST['newletters_user']);
    else
    {
        $user_email = FALSE;
        $newsletters_message = "Please enter a valid email";
    }

    if($user_email)
    {
        //check if user already exists in db
        $user_exists = mysqli_query($conn, "SELECT * FROM newsletters WHERE user_email = '$user_email'") or trigger_error("User existance query failed to execute");
        if(mysqli_num_rows($user_exists) == 1)
        {
            //Inform the user
            echo "<script>alert('You are already registered for our newsletters');</script>";
        }
        else
        {
            //input into db
            $add_email = mysqli_query($conn, "INSERT INTO newsletters(user_email) VALUES ('$user_email')") or trigger_error("Query failed to execute");
            if(mysqli_affected_rows($conn) == 1)
                echo "<script>alert('Congratulations! Your email has been added to our list');</script>";
            else
                echo "<script>alert('Failed to input email into our newsletter list');</script>";


        }
    }
    else
        echo "<script>alert('This field is required');</script>";





?>