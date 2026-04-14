<?php

// Abstract class ka use krke hmm fir us class ka object ni bna skte hai

abstract class Vehicle
{
    abstract public function start();
}

class Car extends Vehicle
{
    public function start()
    {
        echo "Car start with keys<br>";
    }
}

class Bike extends Vehicle
{
    public function start()
    {
        echo "Bike start with kick";
    }
}

$car = new Car();
$bike = new Bike();
$car->start();
$bike->start();



// abstract class Animal
// {
//     abstract function sound();
// }

// class Dog extends Animal
// {
//     public function sound()
//     {
//         echo "Dog braks" . "<br>";
//     }
// }
// class Cat extends Animal
// {
//     public function sound()
//     {
//         echo "Cat mewos";
//     }
// }
// $test = new Dog();
// $test->sound();

// $test1 = new Cat();
// $test1->sound();
