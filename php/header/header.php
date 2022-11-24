<?php 
if(isset($_POST['header_redirect'])){
    header("location:abc.php");
}
if(isset($_POST['header_download'])){
    $size = filesize("image.png");
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="image.png"');
    header('Content-Length: ' . $size);
    readfile("image.png");
}
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
    <form method="post">
        <input type="submit" name="header_redirect" value="redirect to other page">
        <input type="submit" name="header_download" value="file download">

    </form>
</body>
</html>