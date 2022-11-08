<?php 



for ($i=0 ; $i<5 ; $i++){
    if($i%4==0){
        for($j=0;$j<5;$j++){
            echo " * ";
        }
        echo "<br>";
    }
    else{
        echo " * <br>";
    }
}

?>