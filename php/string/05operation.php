<?php


$s1 = "  admin@123";

$s2 = "admin";

echo "use for the encription and its one way encription we cant decript it";
echo md5("$s2")."=>md5() encription of $s2 <br>";  
echo "encode the string<br>";
echo base64_encode($s1)."=>encode the string $s1<br>";
echo base64_decode("YWRtaW5AMTIz")."=>decode the code to string<br>";

$s3 = "Hello world";
$s4 = "Good morning";

echo strlen($s3)."=>strlen() -length of string $s3<br>"; 
echo strtoupper($s4)."=>strtoupper() -convert string in uppercase<br>"; 
echo strtolower($s4)."=>strtolower() -convert string in lowercase<br>"; 
echo ucfirst($s3)."=>ucfirst() -only first latter of string in uppercase<br>"; 
echo ucwords($s4)."=>ucword() -only first letter of word in uppercase<br>"; 
echo trim($s1)."<br>"; 
echo "This is the rtrim of (Hello World): ".rtrim($s3,'world')."<br>"; 
echo "This is the ltrim of (Good morning): ".ltrim($s4,'Good')."<br>"; 

echo "<br>without using any variable ,use only a tag in double quot.<br>";
echo "<a href='google.com'>Google</a><br><br>";
echo '$strhtmlent is used for excutr html tag and their data<br>';

echo "This is the output: ".$strhtmlent = '<a href="https://www.tops-int.com">Go to Tops Technology</a></br>';
echo '<br>htmllentities($strhtmlent) is v/s of strhtmlent<br>';
echo "htmlentities :  ".htmlentities($strhtmlent)."<br>";
echo '<br>htmlspecialchars(string) is not excutr tag from string.<br>';
echo $str = "This is some <b>bold</b> text.";
echo "<br>".htmlspecialchars($str);
exit;


?>
<!-- <a href="https://www.tops-int.com">Go to Tops Technology</a></br> -->