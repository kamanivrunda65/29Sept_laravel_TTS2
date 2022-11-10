
<?php

echo "<pre>";
echo "<br>============ GET ===============<br>";
print_r($_GET);
print_r($_GET['username']);
echo "<br>============ POST ===============<br>";
print_r($_POST);
echo "<br>============ REQUEST ===============<br>";
print_r($_REQUEST);
echo "<br>============ GLOBALS ===============<br>";
print_r($GLOBALS);
echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>get use URL for sending data to the server has limitaion of 2048 char only faster than post doent support file uploading</p>
    <form method="get">
        <input type="text" name="username" id="username">
        <input type="password" name="password" id="password">
        <input type="submit" name="btn" id="btn">
    </form>
    <p>post more secure then get because it doent use url  no limitation and support file uploading </p>
    <form method="post">
        <input type="text" name="data" id="data">
        <input type="submit" name="btn-post" id="btn-post">
    </form>
</body>
</html>