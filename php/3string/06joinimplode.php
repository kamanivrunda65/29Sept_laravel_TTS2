<?php
echo $s = "The book has words and sentences that are commonly used while talking and writing to help your child understand conversational English easily";
echo "<br>explode(charchter where we want to cut,string) =>cut thesentance in part by specific charcter.<br>";
$arr = explode(' ', $s);
echo "<pre>"; 
print_r($arr);
echo "<br>implode convert array to string using join charcater implode(joincharchter,array)<br>";
echo $simplode = implode(' ',$arr);
echo "<br><br>join() is join array values with joining charcter parameter ";
echo $sjoin = join('%',$arr);
// implode(glue, pieces)

echo $s1 = "conversational English easily";
echo "<br> ============ Split ==============<br>";
echo "<br>split the string into array in no of charcter.<br>";

$split_array = str_split($s1,4);
// print_r(explode(' ',$md5str ));
print_r($split_array);



?>