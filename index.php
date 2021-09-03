

<!-- Class & Get Class  !>

<?php

class Dhaka{
    
    public function city(){
        echo "Base Class constant and class name-> ".__CLASS__."<br>";
        echo "Base Class function and class name-> ".get_class($this)."<br>";
    }
}

// spl_autoload_register(function($class_name){
//     include "classes/".$class_name.".php";
// });

class dhakaDacca extends Dhaka{

    public function mofosshol(){
        echo "Child Class constant and class name-> ".__CLASS__."<br>";
        echo "Child Class function and class name-> ".get_class($this)."<br>";
    }
}

$dhaka = new dhakaDacca();
$dhaka->city();
echo "<hr/>";
$dhaka->mofosshol();

?>