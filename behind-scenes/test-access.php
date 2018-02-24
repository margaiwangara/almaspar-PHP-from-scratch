<?php

session_start();
include_once __DIR__ . '/include/connect-db.inc.php';

echo $_SESSION['USER_EMAIL'];
$email = "margaiwangara@gmail.com";
$password = "washiali";
$hashed_passsword = password_hash($password,PASSWORD_DEFAULT);


//get data to compare to
$compare_info = mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$email'");
if(mysqli_num_rows($compare_info) > 0)
{
    $db_data = mysqli_fetch_assoc($compare_info);
    $password_data = $db_data['password'];

    if(password_verify($password,$password_data))
        echo "<span style='color: green'>User is available</span>";
    else
        echo "<span style='color: red;'>Error! User not found</span>";
}

/*
$get_data = mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$email' AND password='$hashed_passsword'");
if(mysqli_num_rows($get_data) > 0)

else
*/

?>