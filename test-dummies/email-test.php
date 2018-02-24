<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Test</title>
</head>
<body>
<div class="main-box">
    <form action="email-test-backend.php" method="get">
        <table>
            <tr>
                <td>To </td>
                <td><input type="email" name="email_to" placeholder="someone@example.com" autocomplete="off" required/></td>
            </tr>
            <tr>
                <td>Subject </td>
                <td><input type="text" name="email_sub" placeholder="Subject" autocomplete="off" required/></td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <textarea rows="10" cols="50" placeholder="Message" name="email_txtarea" style="resize: none;" required autocomplete="off"></textarea>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Send" name="send_mail" id="email_submit"/></td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>