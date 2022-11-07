<?php

$year=1975;
$module=$year%4;
if($year>=1901 && $year<=2016){
    if($module==0){
        echo $year." is leap year.";
    }
    else{
        echo $year." is not leap year.";
    }

}
?>