<?php
$s = "alphabest-capital-ABCDEFGHIJKLMNOPQRSTUVWXYZ <br>
alphabet-small-abcdefghtjklmnopqrstuvwxyz<br>
numbers-1234567890<br>
sign-!@#$%^&*()<br>";
echo $s;
$s1 = bin2hex($s);
echo ($s1); 
echo "<br>";

echo "A-".bin2hex("A");
echo "<br>";
echo "a-".bin2hex("a");
echo "<br>";
echo "1-".bin2hex("1");
echo "<br>";
echo "!-".bin2hex("!");
echo "<br>";
echo "{}-".bin2hex("{}");
echo "<br>";
echo "<-".bin2hex("<");
echo "<br>";
echo "+-".bin2hex("+");

echo "<br>";
echo "'-".bin2hex("'");
echo "<br>";
echo "~-".bin2hex("~");
echo "<br>";
echo ".-".bin2hex(".");
echo "<br>";
echo "!@#$%^&*()_+-={}[]|\:;<>,.?/-".bin2hex("!@#$%^&*()_+-={}[]|\:;<>,.?/");
echo "<br>";
echo ".-".bin2hex(".");
echo "<br>";
echo "ABCDEFGHIJKLMNOPQRSTUVWXYZ-".bin2hex("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
echo "<br>";
echo "abcdefghtjklmnopqrstuvwxyz-".bin2hex("abcdefghtjklmnopqrstuvwxyz");

echo "<br>";
echo "<br>";

echo "hex to binary";
echo "<br>";

echo "11-".hex2bin("11");
echo "<br>";
echo "1e-".hex2bin("1e");
echo "<br>";
echo "21-".hex2bin("21");
echo "<br>";
echo "+-".hex2bin("01");
?>