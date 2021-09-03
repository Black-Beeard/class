<?php

include('./classes/bangla.php');


class dhakaDacca extends Dhaka
{

    public function mofosshol()
    {
        echo "Child Class constant and class name-> " . __CLASS__ . "<br>";
        echo "Child Class function and class name-> " . get_class($this) . "<br>";
    }
}

$dhaka = new dhakaDacca;
$dhaka->city();
echo "<hr/>";
$dhaka->mofosshol();