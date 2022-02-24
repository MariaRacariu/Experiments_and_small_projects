<?php
//-----------------------------------------------------
// This is the OOP way of making the car array
// Creating a class that will have standard values so 
// if something is not input it will be the standard.
// The function will check if the variable is an instance
// of the class car, if not it will output a message.
//-----------------------------------------------------

// Classes should be written in singular term
// also write it in UpperCamelCase
// Using a class you can create a blueprint which
// the user has to follow, so for example if someone
// doesn't input something you can tell the class
// to fill with N/A or something similar 

// Properties/attributes are just variables written in a class
class Car {
    public $manufacturer = 'N/A'; // This is a public class that means that anything can access this
    public $model = 'N/A'; // These are standard values
    public $year = 'N/A';
    public $awd = false;

    public function getInfo(){ // This is a method
        return "This car is a {$this->manufacturer} model {$this->model} from year {$this->year}<br>";
    }
}
// Invoke the class Car that creates a new car
new Car(); // Create a new instance of Car

// Hard code information about the cars 
$carOne = new Car();
$carOne->manufacturer = 'Kia';
$carOne->model = 'Picanto';
$carOne->year = 2015;

$carTwo = new Car();
$carTwo->manufacturer = "Doge";
$carTwo->model = "Viper";

// This function will fetch all the information from the class
// function getCarInfo($car){
//     // This is statement checks if an input in an instance of car
//     if(!$car instanceof Car){
//         return "This is not a car";
//     }

//     return "This car is a {$car->manufacturer} model {$car->model} from year {$car->year}<br>";
// }

// Make a loop which loops thru the class and echos everything out
// echo getCarInfo($carOne);
// echo getCarInfo($carTwo);
// echo getCarInfo(43);

// Calling the method inside class
echo $carOne->getInfo();
echo $carTwo->getInfo();

// echo "<pre>";
// var_dump($carOne);
// var_dump($carTwo);
// echo "</pre>";

// Methods are function written in a class
