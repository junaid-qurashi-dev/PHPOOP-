<?php

class Student
{
    public $a, $b, $c;
    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
$c1 = new Student();
$c1->a = 10;
$c1->b = 20;
$c2 = new Student();
$c2->a = 90;
$c2->b = 20;
echo  "This is a Object C1: " . $c1->sum() . "<br>";
echo "This is a Object C2: " . $c2->sub();
