<?php
if(session_status() == PHP_SESSION_NONE)
    //start session
    session_start();

//require db
require_once __DIR__.'/../../include/connect-db.inc.php';

//include functions
include_once __DIR__.'/../../functions/functions.php';

$logo_message = FALSE;
$new_image = FALSE;

if(isset($_POST['logo-update-submit']))
{

    $target_dir = __DIR__.'/../images/logos/';
    $filename = "logo-update";

    //run loop
    $result = image_upload($target_dir,$filename);

    if(is_array($result))
    {
        $original = "logos/originals/".$result['original'];
        $new = "logos/".$result['new'];
        $mime = $result['mime'];

        //update in db
        $update_logo = mysqli_query($conn, "UPDATE site_images SET image_path = '$new',orig_image = '$original' WHERE img_status = 'logo'") or trigger_error("Logo not updated".mysqli_error($conn));
        if(mysqli_affected_rows($conn) == 1)
        {
            $logo_message = "Logo Updated Successfully";
        }
        else
        {
            $logo_message = "Logo failed to update";
        }
    }
    else
        $logo_message = $result;


}
//get item from db

$get_logo = mysqli_query($conn, "SELECT * FROM site_images WHERE img_status = 'logo'") or trigger_error("Logo not acquired");
if(mysqli_num_rows($get_logo) == 1)
{
    $logo_data = mysqli_fetch_assoc($get_logo);

    $new_image = "/../almas-parlour/admin/images/".$logo_data['image_path'];
}


?>

