<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Items</title>
</head>
<body>
<div class="my-items">
    <form action="dummy-code-php.php" method="get">
        <table>
            <tr>
                <td><input type="text" name="item_code" placeholder="Item Code"/></td>
            </tr>
            <tr>
                <td><input type="text" name="item_name" placeholder="Item Name"/></td>
            </tr>
            <tr>
                <td><input type="text" name="item_type" placeholder="Item Type"/></td>
            </tr>
            <tr>
                <td><input type="text" name="item_color" placeholder="Item Color"/></td>
            </tr>
            <tr>
                <td><input type="text" name="image_path" placeholder="Image Path"/></td>
            </tr>
            <tr>
                <td>
                    <textarea rows="5" cols="50" name="item_descr" placeholder="Item Description" style="resize: none;"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea rows="5" cols="50" name="add_info" placeholder="Additional Info" style="resize: none; "></textarea>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="item_submit" value="Upload Item"/></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
