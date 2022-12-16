<?php 

final class finalclass{
    public function f1(){ //if function f1 is final
        echo "abc";
    }
}
// class abc extends finalclass{--------not inherit
//     public function f1(){---------can't override final method
//     echo "not inherit";
// }
// };
$finalclassobject=new finalclass;
$finalclassobject->f1();

?>
<p>finalclass not extend by any other class. </p>
<p>final function cant be override.(not allow to same name in function )</p>
<p>The final keyword is used to prevent a class from being inherited and to prevent inherited method from being overridden.</p>