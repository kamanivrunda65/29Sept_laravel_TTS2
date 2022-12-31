<?php
$s = "The book has words and sentences that are commonly used while talking and writing ";
echo $s;
echo "<br>======== stristr true==========<br>";
echo "<br>Finds the first occurrence of a string inside another string (case-insensitive) and display till that  <br>=>";
echo stristr($s,"and",true);
echo "<br>======== stristr ==========<br>";
echo "<br>Finds the first occurrence of a string inside another string (case-insensitive) and start pring there to end<br>=>";
echo stristr($s,"are");
?>