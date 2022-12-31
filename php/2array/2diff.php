<?php
$a1=array("maths"=>"23","science"=>"87","ss"=>"83","english"=>"32");
$a2=array("maths"=>"54","hindi"=>"94","physics"=>"64","english"=>"32");
echo "<pre>";
print_r(array_diff($a1,$a2));
print_r(array_diff_key($a1,$a2));
?>