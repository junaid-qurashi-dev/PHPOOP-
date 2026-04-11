<?php

class person
{
    // Default Value Set ki Huumnne jab koi value na ho to yeh value set ho jaye//
    public $name = "Junaid";
    public $age = 21;

    // Constructor Function use kiya yeh object bante hi automatically call hota hai //
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function show()
    {
        echo $this->name . " - " . $this->age;
    }
}
$p1 = new person("Junaid ", 21);
// $p1->name = "YAHOBABA";
// $p1->age = 19;
$p1->show();
