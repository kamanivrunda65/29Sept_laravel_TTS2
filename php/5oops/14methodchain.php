<?php

class queryclass{
    public $query;
    public function select($coloum){
        $this->query="SELECT $coloum";
        return $this;
    }
    public function update($table){
        $this->query="UPDATE $table";
        return $this;
    }
    public function from($table){
        $this->query.=" FROM $table";
        return $this;
    }
    public function where($var,$value){
        $this->query.=" WHERE $var='$value'";
        return $this;
    }
    public function set($var,$value){
        $this->query.=" SET $var='$value'";
        return $this;
    }
}
$Command=new queryclass();
echo "<br>".$C=$Command->select("username")->from("user")->where("user_id",1)->query;
echo "<br>".$C=$Command->Update("user")->set("username","abc")->where("user_id",1)->query;
?>
<p>In method chaining method ar call in one line.<p>
<p>all method chain are pass/call/return in one variable at end of line.<p>
<p>that variable are declar in public in class.<p>
<p>every function or method assign or init value in that variable using this keyword.<p>
<p>every method return this keyword as that return query store varible<p>
<p>we want to add one method after another for that we add . befor assign value of query(.="value")<p>
<p>.= add in that function which append after one method. <p>