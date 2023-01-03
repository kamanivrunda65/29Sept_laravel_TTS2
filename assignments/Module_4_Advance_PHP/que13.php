<?php
class classwithoutobject{
    public static $abc="Hello World-static variable";
    public static function parentfunction()
{
        echo "<br>Parent Function<br>";
}
}
classwithoutobject::parentfunction();
echo classwithoutobject::$abc;

?>