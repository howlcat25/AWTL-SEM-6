<!-- Develop a web application in PHP using various concepts of object-oriented programming
like Class, Object, Inheritance, Function, Overloading, Constructor, and Destructor

Code: -->


<?php
// Define a basic class 'Car'
class Car
{
    public $brand;
    public $color;
    public $model;

    // Constructor
    public function __construct($brand, $color, $model)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->model = $model;
        echo "A new $this->color $this->brand $this->model created.<br>";
    }

    // Method to display car information
    public function displayInfo()
    {
        echo "This is a $this->color $this->brand $this->model.<br>";
    }

    // Destructor
    public function __destruct()
    {
        echo "The $this->color $this->brand $this->model is being destroyed.<br>";
    }
}

// Inheriting class 'Car' into 'SportsCar'
class SportsCar extends Car
{
    public $speed;

    // Constructor Overloading within the inherited class
    public function __construct($brand, $color, $model, $speed)
    {
        parent::__construct($brand, $color, $model);
        $this->speed = $speed;
    }

    // Method Overriding
    public function displayInfo()
    {
        echo "This is a $this->color $this->brand $this->model and can speed up to $this->speed mph.<br>";
    }
}

// Creating objects from the classes
$car1 = new Car("Toyota", "red", "Camry");
$car1->displayInfo();

$sportsCar1 = new SportsCar("Ferrari", "red", "458 Italia", 200);
$sportsCar1->displayInfo();
?>
