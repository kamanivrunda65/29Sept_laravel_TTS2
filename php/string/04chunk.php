<?php
echo $s = "The book has words and sentences that are commonly used while talking and writing to 
help your child understand conversational English easily.";

echo "<br>============== Chunk Split==============<br>";
echo "<br>chunk_split(stringname,lenght of chunkstring,end character)<br>";
echo "<br>after lenght of chunk string add end charachter<br>";


echo chunk_split($s,5,"E");

echo "<br>============== Count Chars==============<br>";
echo "<br>count the character in string<br>";
echo $str = "aaa bbbb 222   75e43,,,";
echo "<pre>";
// print_r( count_chars($str)); // give 1 where ascii values stored char
// print_r( count_chars($str,1)); // give only thoes keys where char stored
// print_r( count_chars($str,2)); // remove thoes keys where char stored
// print_r( count_chars($str,3)); // show the value charcter in string
?>