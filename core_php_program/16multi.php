<?php

$balance=array(
    array(65.4,65.8,65.7,8.6,94.5),
    array(54.6,75.5,75.5,54.87,34.65),
    array(4.65,76.8,97.6,87.57,54.65));
    for($i=0;$i<3;$i++){
        for($j=0;$j<5;$j++){
            echo $balance[$i][$j]." ";

        }
        echo "<br>";
    }

?>
