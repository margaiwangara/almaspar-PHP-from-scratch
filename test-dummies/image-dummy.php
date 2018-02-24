
<?php
//include functions
include_once __DIR__.'/../functions/functions.php';

if(isset($_POST['submit-file']))
{
    $target_dir = __DIR__.'/../test-dummies/uploads';

    $upload_message = FALSE;

    $file_name = "myfile";

    //$result =
    $result = image_upload($target_dir,$file_name);


    if(is_array($result))
        echo $result['original'][0];



}


?>

<form action="" method="post" enctype="multipart/form-data">
    <label for="file-upload">Upload File</label><br>
    <input type="file" name="myfile[]" id="myfile" multiple="multiple"><br>
    <br>
    <button type="submit" name="submit-file" id="submit-file">Upload File</button>
</form>