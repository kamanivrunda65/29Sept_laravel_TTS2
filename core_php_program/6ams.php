<?php 
$s=153;
$n=$s;
$sum=0;
while($n>0){
    $r=$n%10;
    $sum=$sum+($r*$r*$r);
    $n=$n-$r;
    $n=$n/10;
}
if($s==$sum){
    echo $s." is  Armstron number.";
}
else{
    echo $s." is not Armstron number.";
}
?>