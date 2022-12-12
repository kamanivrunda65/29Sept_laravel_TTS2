<?php


// echo "select * from users where text ='Jay\'s no'";
$s = "She’s my Sister(Display 's without slash\)";
echo $s;
echo "<br>";
echo "She\’s my Sister(add slash in statement for display)";

echo "<br>";
$s1="She's my Sister";
echo addslashes($s1);
echo "(add slash in statement through function addslash())";

?>