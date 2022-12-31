<?php
echo "<pre>";
echo "<br>         Fill        <br>";

//array_fill(starting,count,"value");
$a1=array_fill(5,3,"V.S.School");
print_r($a1);

//array_pad used on array
$arr = ["TOPS","SG"];
$new1=array_pad($arr,5,"php");
print_r($new1);