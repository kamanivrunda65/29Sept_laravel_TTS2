<?php

print "<p> echo and print both are used for giving the respose to the client from the server </p>";
print "<p> print is a function  </p>";
print "<p> echo is a command  </p>";
print "<p> print is slower than echo because its a function and it contain functionalities </p>";
print "<p> echo is faster then print  </p>";
print "<p> echo is supports multiple para</p>";
print "<p> print is doen't supports multiple para</p>";
echo "Hello","World";
// print "Hello","World";


// developer option print and navigate array data
$arr = [123,12.12,true,'A',"Something"];
echo "<pre>";
echo "<br>///////////// print_r ////////////// <br>";
print_r($arr);
echo "<br>///////////// var_dump ////////////// <br>";
var_dump($arr);
echo "<br>///////////// var_export ////////////// <br>";
var_export($arr);


?>