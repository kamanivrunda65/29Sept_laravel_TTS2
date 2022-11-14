<?php
include_once("header.php");
if (isset($_SESSION['UserData'])) {
    $abc=$_SESSION['UserData']['username'];?><h2><?php
    echo $abc;
}
?><br>
<br><center>
<table>
    <tr>
        <th>Product Name</th>
        <th>Price</th>
    </tr>
    <tr>
<?php
    if (isset($_SESSION['UserData1'])) {
    $name=$_SESSION['UserData1']['product_name1'];
    $rs=$_SESSION['UserData1']['rs1'];
    ?><td><?php echo $name;?></td><?php
    ?><td><?php echo $rs;?></td><?php
    
}
?>
    </tr>
    <tr>
<?php
    if (isset($_SESSION['UserData2'])) {
    $name=$_SESSION['UserData2']['product_name2'];
    $rs=$_SESSION['UserData2']['rs2'];
    ?><td><?php echo $name;?></td><?php
    ?><td><?php echo $rs;?></td><?php
    
}
?>
    </tr>
    <tr>
<?php
    if (isset($_SESSION['UserData3'])) {
    $name=$_SESSION['UserData3']['product_name3'];
    $rs=$_SESSION['UserData3']['rs3'];
    ?><td><?php echo $name;?></td><?php
    ?><td><?php echo $rs;?></td><?php
    
}
?>
    </tr>
    <tr>
<?php
    if (isset($_SESSION['UserData4'])) {
    $name=$_SESSION['UserData4']['product_name4'];
    $rs=$_SESSION['UserData4']['rs4'];
    ?><td><?php echo $name;?></td><?php
    ?><td><?php echo $rs;?></td><?php
   
}
?>
    </tr>
    
</table>
</center>
<?php
include_once("footer.php");
?>