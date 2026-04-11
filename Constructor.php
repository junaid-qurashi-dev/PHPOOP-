<?php

class person
{
    // Default Value Set ki Huumnne jab koi value na ho to yeh value set ho jaye//
    public $name;
    public $age;

    // Constructor Function use kiya yeh object bante hi automatically call hota hai //
    function __construct($name = "Ali", $age = 19)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function show()
    {
        echo $this->name . " - " . $this->age . "<br>";
    }
}

// Constructor ka use krne se hmme baar-baar variable ek ek variable ko value dene ki zarurat nhi hoti 
// kyuki yeh automatic  object banate hi value lekar coustruct kai parameters mai bhej deta hai jisse hmme
// Baar Baar yeh line $p1->name = "junaid" $p1->age = 21 aise likhne ki zarurat nhi hoti //

$p1 = new person();
$p2 = new person("Sunder", 34);
$p3 = new person("Jetha", 32);
// $p1->name = "YAHOBABA";
// $p1->age = 19;
$p1->show();
$p2->show();
$p3->show();
