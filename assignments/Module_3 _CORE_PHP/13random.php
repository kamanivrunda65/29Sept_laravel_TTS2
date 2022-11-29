<?php

$a=array("red","orange","green","brown","black","yellow","white");
$n=4;
$r_key=array_rand($a,$n);
for($i=0;$i<$n;$i++){
    echo $a[$r_key[$i]]."<br>";
}

?>