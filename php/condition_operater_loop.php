<h2><?php
    //if_else
    $mark1 = '45';
    if ($mark1 >= 50){
        echo "pass";
    }
    else{
        echo "try again";
    }
    
    //double equals 
    if($mark1==45){
        echo "<br>same";
    }
    else{
        echo"<br>not same";
    }

    //tripal equals
    if($mark1===45){
        echo "<br>Datatype match";
    }
    else{
        echo "<br>Datatype not match";
    }
    
    //if else and elseif(nested)
    $marks= 66;
    if($marks >= 0 && $marks <= 100){
            if($marks>=50 && $marks<60){
                echo "<br>Pass";
            }
            elseif($marks>=60 && $marks<70){
                echo "<br>Pass grade-BC";
            }
            elseif($marks>=70 && $marks<80){
                echo "<br>Pass grade-BB";
            }
            elseif($marks>=80 && $marks<90){
                echo "<br>Pass grade-AB";
            }
            elseif($marks>=90 && $marks<=100){
                echo "<br>Pass grade-AA";
            }
    }
    else{
        echo "<br>Invalid";
    }

    //switch case
    $city="delhi";
    switch ($city){
        case 'delhi':
            echo "<br>Delhi Capital-New Delhi";
            break;
        case 'rajasthan':
            echo "<br>Rajsthan Capital-Jaipur";
            break;
        case 'Gujarat':
            echo "<br>Gujarat Capital-Gandhinagar";
            break;
        case 'madhyapradesh':
            echo "<br>Madhyapradesh Capital-Bhopal";
            break;
    }

    //for loop
    for ($i=0;$i<10;$i++){
        echo "<br>".$i;
    } 
    
    //array

    $lang=['php','html','css','js','python','java'];
    // foreach is use for access array elements
    foreach ($lang as $key=>$value){
        echo "<br>$key $value ";
    }


    //while

    $a='0';
    while($a<='15'){
        echo "<br>".$a;
        $a++;
    }

    //do while loop

    $a=25;
    do{
        $b=$a/5;
        $a--;
        echo "<br>".$b;
    }while($a>=20);

    //nested prints
    echo "<br>";
    for ($i=0 ; $i<10 ; $i++){
        for ($j=0 ; $j<$i ; $j++){
            echo " * ";
        }
        echo "<br>";
    }

    //pattens
    
      
    
   
   
?></h2>