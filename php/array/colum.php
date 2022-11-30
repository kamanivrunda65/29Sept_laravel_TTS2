<?php
$a=array(array("id"=>765,"maths"=>84,"english"=>76,"science"=>63),
array("id"=>876,"maths"=>73,"english"=>85,"science"=>95),
array("id"=>953,"maths"=>59,"english"=>95,"science"=>94));

echo "<pre>";
echo "======orignal array=======<br>";
print_r($a);
echo "======maths marks==========<br>";
echo "=======using foreach function=======<br>";
foreach($a as $key=>$value){
    $data[]=$value["maths"];
}
print_r($data);
echo "========using array_column==========<br>";
print_r(array_column($a,"maths"));
echo "</pre>";
?>