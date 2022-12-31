<?php
include_once("header.php");
if (isset($_SESSION['UserData'])) {
    $abc=$_SESSION['UserData']['username'];?><h2><?php
    echo $abc;
}

   
   
?></h2><br>
<br><center>
<table><?php if (isset($_SESSION['cartdata'])){ ?>
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th></th>

    </tr>
    <tr><?php } ?>
<?php
    if (isset($_SESSION['cartdata']['product1'])) {
    $name=$_SESSION['cartdata']['product1']['productname'];
    $rs=$_SESSION['cartdata']['product1']['productprize'];
    ?><td><?php echo $name;?></td><?php
    ?><td><?php echo $rs;?></td><?php
    ?><td><a href="deletecart.php?did=1"><input type="button" value="Delete"></a></td><?php
    
    
}
?>
    </tr>
    <tr>
<?php
    if (isset($_SESSION['cartdata']['product2'])) {
    $name=$_SESSION['cartdata']['product2']['productname'];
    $rs=$_SESSION['cartdata']['product2']['productprize'];
    ?><td><?php echo $name;?></td><?php
    ?><td><?php echo $rs;?></td><?php
    ?><td><a href="deletecart.php?did=2"><input type="button" value="Delete"></a></td><?php
    
}
?>
    </tr>
    <tr>
<?php
    if (isset($_SESSION['cartdata']['product3'])) {
    $name=$_SESSION['cartdata']['product3']['productname'];
    $rs=$_SESSION['cartdata']['product2']['productprize'];
    ?><td><?php echo $name;?></td><?php
    ?><td><?php echo $rs;?></td><?php
    ?><td><a href="deletecart.php?did=3"><input type="button" value="Delete"></a></td><?php
    
}
?>
    </tr>
    <tr>
<?php
    if (isset($_SESSION['cartdata']['product4'])) {
    $name=$_SESSION['cartdata']['product4']['productname'];
    $rs=$_SESSION['cartdata']['product4']['productprize'];
    ?><td><?php echo $name;?></td><?php
    ?><td><?php echo $rs;?></td><?php
    ?><td><a href="deletecart.php?did=4"><input type="button" value="Delete"></a></td><?php
   
}
?>
    </tr>
    
</table>
<a href="deletecart.php?aid=1">Empty cart</a>
</center>
<?php
include_once("footer.php");
?>