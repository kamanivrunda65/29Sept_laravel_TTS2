<?php
echo "<pre>";
echo "<br>==============array_intersect()====================<br>";
echo "Same value not same key<br>";
echo "result show the first array value with keys.<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue","a");

$result=array_intersect($a1,$a2);
print_r($result);

echo "<br>==============array_intersect_assoc()====================<br>";
echo "same key and value both<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue","e"=>"yellow");

$result=array_intersect_assoc($a1,$a2);
print_r($result);

echo "<br>==============array_intersect_key()====================<br>";
echo "same key ,not same value<br>";
echo "show key with first array value<br>.";
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_intersect_key($a1,$a2);
print_r($result);

echo "<br>==============array_intersect_uassoc()====================<br>";
echo "same value and same key<br>";
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("c"=>"red","b"=>"green","d"=>"blue");

$result=array_intersect_uassoc($a1,$a2,"myfunction");
print_r($result);

echo "<br>==============array_intersect_ukey()====================<br>";
echo "same key ,not value <br>";
function myfunctionukeys($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_intersect_ukey($a1,$a2,"myfunctionukeys");
print_r($result);

?>