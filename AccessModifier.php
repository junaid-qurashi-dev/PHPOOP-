<?php
// Public Modifire //
// class Car
// {
//     public $brand = "Toyoto";
//     public function showBrand()
//     {
//         echo $this->brand;
//     }
// }
// $car = new Car();
// echo $car->brand;
// $car->showBrand();

// class car
// {
//     protected $brand = "Honda";
//     protected function showBrand()
//     {
//         echo $this->brand;
//     }
// }

// class Bike extends car
// {
//     public function getBrand()
//     {
//         return $this->brand;
//     }
// }
// $bike = new Bike();
// echo $bike->getBrand();

// Private modifire
class car
{
    private $brand = "honda";
    function show()
    {
        return $this->brand;
    }
}
$obj = new car();
echo $obj->show();
