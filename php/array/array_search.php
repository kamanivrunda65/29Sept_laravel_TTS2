<?php
echo "========array_key_exists()==========<br>";
echo "function check if key is exist in array or not<br>";
$a = array("a"=>"abc","p"=>"pqr","x"=>"xyz");
if(array_key_exists("a",$a)){
    echo "<br>key exists<br>";
}
else{
    echo "<br>key does not exist<br>";
}



echo "==========in_array()=============<br>";
echo "<br>check if value is exist in array or not<br>";
$b=array("abc","pqr","xyz","stu");
if(in_array("pqr",$b)){
    echo "<br>Value is exists in array<br>";
}
else{
    echo "<br>Value is not exist in array<br>";
}



echo "============array_search()============<br>";
echo "<br>search value in array and show key of value if is it exist<br>";
$c=array("ab"=>75,"bc"=>95,"cd"=>71,"de"=>32);
echo "<br>".array_search(32,$c);
?>