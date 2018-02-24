<?php

if(session_status() == PHP_SESSION_NONE)
    //set sessions
    session_start();

function messages($message)
{
    return $message;
}

//Password functions
function password_validation($password)
{
    //validate password field
    if(empty($password))
        return false;
    else
    {
        if(preg_match ('%^(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-z])(?=[-_a-zA-Z0-9]*?[0-9])\S{8,}\z%',stripslashes(trim($password))))
        {
            $clean_password = clean_input($password);
        }
        else
        {
            $clean_password = FALSE;
        }
    }

    return $clean_password;
}
function passwords_match($password,$password_confirm)
{
    if(!$password)
        return false;
    else
    {
        if($password == $password_confirm)
            return true;
        else
            return false;
    }
}
function password_hashed($password)
{
    if(empty($password))
        return false;
    else
        $password = password_hash($password,PASSWORD_DEFAULT);
    return $password;
}

//email functions
function email_validation($email)
{
    //validate email field
    if(empty($email))
        return false;
    else
    {
        if(preg_match('%^[A-Za-z0-9._\%-]+\@[A-Za-z0-9.-]+\.[A-Za-z]{2,5}$%',stripslashes(trim($email))))
            $clean_email = clean_input($email);
        else
        {
            $clean_email = FALSE;
        }
    }
    return $clean_email;
}

//user_login
function find_user_by_id($conn,$email)
{
    if(empty($email) || empty($conn))
        return false;
    else
    {
        $email = email_validation($email);
        $query = "SELECT *";
        $query .= "FROM user_registration";
        $query .= "WHERE email = '$email'";

        $acc_accnt = mysqli_query($conn, $query);
        if(mysqli_num_rows($acc_accnt) == 1)
        {
            //get password
            $get_pass = mysqli_fetch_assoc($acc_accnt);

            return $get_pass;
        }
    }

}
function confirm_login($password,$hashed_password)
{
    if(empty($password) || empty($hashed_password))
        return false;
    else
    {
        if(password_verify($password,$hashed_password['password']))
            return true;
        else
            return false;
    }
}
function attempt_login($conn,$username, $password)
{
    if(empty($username) || empty($password))
        return false;
    else
    {
        $username = find_user_by_id($conn, $username);
    }
}

//user_registration
function user_registration($conn,$email, $password, $confirm_pass)
{
    if(empty($email) || empty($password) || empty($confirm_pass))
        return false;
    else
    {
        //validate password
        $password = password_validation($password);
        $email = email_validation($email);

        if(passwords_match($password,$confirm_pass))
        {
            //hash password
            $password = password_hash($password);

            //confirmation code
            $confirm_code = md5(uniqid(rand()));
            if($email && $password)
            {
                $query = "INSERT INTO user_registration(email,password,confirm_code,confirmed) ";
                $query .= "VALUES('$email','$password','$confirm_code','0')";

                $register_user = mysqli_query($conn, $query);
                if(mysqli_affected_rows($register_user) == 1)
                {
                    //send email
                    send_mail($email);
                }
            }
        }
    }
}

function send_mail($to,$from,$subject,$message,$headers)
{
    if(empty($to) || empty($from))
        return false;
    else
    {
        mail($to, $subject,$message,$headers);
    }

}


//image upload function
function image_upload($target_dir,$file_name)
{
    $upload_message = FALSE;
    $uploadOk = FALSE;
    $counter = 0;
    if(!empty($_FILES[$file_name])) {
        foreach ($_FILES[$file_name]['name'] as $key => $value) {
            $target_file = $target_dir . basename($_FILES[$file_name]['name'][$key]);
            $uploadOk = 1;

            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES[$file_name]["tmp_name"][$key]);
            if ($check != false) {
                $upload_message = "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $upload_message = "File is not an image.";
                $uploadOk = 0;
            }
            $pattern = "#^(image/)[^\s\n<]+$#i";

            if (!preg_match($pattern, $check['mime'])) {

                $uploadOk = 0;
                $upload_message = "Only image files are allowed!";
            }

            // Check if file already exists
            if (file_exists($target_file)) {

                $uploadOk = 0;
                $upload_message = "File already exists";
            }

            // Check file size
            if ($_FILES[$file_name]["size"][$key] > 10000000) {
                $upload_message = "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                $upload_message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $upload_message = $upload_message;
                // if everything is ok, try to upload file
            } else {
                $target_file = rename_image($target_dir, "." . $imageFileType);
                if (move_uploaded_file($_FILES[$file_name]["tmp_name"][$key], $target_file)) {
                    $upload_message = "The file " . basename($_FILES[$file_name]["name"][$key]) . " has been uploaded.";

                    //pass values
                    $original_image [] = basename($_FILES[$file_name]['name'][$key]);
                    $new_image [] = basename($target_file);
                    $mime [] = $_FILES[$file_name]['type'][$key];

                } else {
                    $uploadOk = 0;
                    $upload_message = "Sorry, there was an error uploading your file.";
                }
            }


        }
    }
        if ($uploadOk == 0)
            return $upload_message;
        else
            return array('original' => $original_image, 'new' => $new_image, 'mime' => $mime);
        //return $upload_message;

}
function rename_image($path, $suffix)
{
    do
    {
        $file = $path."/".md5(mt_rand()).$suffix;
        $fp = fopen($file,'x');
    }
    while(!$fp);

    fclose($fp);
    return $file;

}

?>