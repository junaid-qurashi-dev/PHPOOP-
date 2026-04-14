<?php

class base
{
    public $name = "Junaid";

    function calc($a, $b)
    {
        return $a * $b;
    }
}
class derived extends base
{
    public $name = "Quraishi";
    function calc($a, $b)
    {
        return $a + $b;
    }
}
$obj = new derived();
echo $obj->calc(21, 21);
