<?php
include_once("header.php");
if (isset($_SESSION['UserData'])) {
    $abc=$_SESSION['UserData']['username'];?><h2><?php
    echo $abc;
}
?>
<h2></h2>
<?php
include_once("footer.php");
?>