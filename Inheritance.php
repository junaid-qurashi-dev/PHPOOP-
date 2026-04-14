<?php

// Inheritance ka use krne se hmm parent class ki property or method child 
// class mai use kr skte hai 

class employee
{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    function info()
    {
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee Age: " . $this->age . "<br>";
        echo "Employee Salary: " . $this->salary;
        "<br>";
    }
}

class Manager extends employee
{
    public $ta = 2300;
    public $phone = 549;
    public $totalSalary;

    function info()
    {
        $this->totalSalary = $this->salary
            + $this->ta
            + $this->phone;
        echo "<h3>Manager Profile </h3>";
        echo "Manager Name: " . $this->name . "<br>";
        echo "Manager Age: " . $this->age . "<br>";
        echo "Manager Salary: " .  $this->totalSalary . "<br>";
    }
}
$e1 = new Manager("Junaid", 21, 10000);
$e2 = new employee("Ali", 24, 3000);
$e1->info();
$e2->info();
