<?php

$phy=65;
$che=76;
$maths=57;
$bio=87;
$comp=87;

$total=$phy+$che+$maths+$bio+$comp;
$percentage= ($total/500)*100;


    if($percentage>=90 && $percentage<100){
        $grade="AA";
    }
    elseif($percentage>=80 && $percentage<90){
        $grade="AB";
    }
    elseif($percentage>=70 && $percentage<80){
        $grade="BB";
    }
    elseif($percentage>=60 && $percentage<70){
        $grade="BC";
    }
    elseif($percentage>=50 && $percentage<60){
        $grade="CC";
    }
    else{
        $grade="CD";
    }

    echo "Total Marks : ".$total."/500<br>";
    echo "Percentage : ".$percentage."%<br>";
    echo "Grade : ".$grade;


?>