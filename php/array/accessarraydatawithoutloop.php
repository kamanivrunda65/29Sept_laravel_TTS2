<?php
$arr=array(100,200,300,400,500);


echo "=======array_filter()==============";
//array_filter returen value without update
function accessArrayUseFilter($arrRec){
    return $arrRec+50;
}
$arrfilter=array_filter($arr,"accessArrayUseFilter");
echo "<pre>";
print_r($arrfilter);


echo "=======array_map()==============";
//array_map return value with update
function accessArrayUseMap($arrRec){
    return $arrRec+5;
}
$arrMapRes=array_map("accessArrayUseMap",$arr);
print_r($arrMapRes);


//accosicate array
//foreach fuction
//The array_walk() function runs each array element in a user-defined function. The array's keys and values are parameters in the function.
echo "=======array_walk()==============<br>";
function accessArrayUseWalk($arrRec,$arrData){
    echo "<br>key=>".$arrData." Value=>".$arrRec;
}
$arrWalkRes=array_walk($arr,"accessArrayUseWalk");
print_r($arrWalkRes);
echo "</pre>";
?>