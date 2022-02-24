<?php
//-----------------------------------------------------
// This code is supposed to show different ways to
// write arrays and print/check things.
// The function which is called getCarInfo get information
// from the multiple dimensional array called cars.
// There is also an example which shows how to check if
// something is input into the array but it is not the
// best way.
//-----------------------------------------------------


// awd stands for all-will drive, so all wheels will drive 4x4
// carOne and carTwo variables which hold an array
// manufacturer,model,year,awd are all keys
// Kia, Picanto, 2015, false are values

// $carOne=[
//     'manufacturer' => 'Kia', //string
//     'model' => 'Picanto', //string
//     'year' => 2015, //int
//     'awd' => false //bool
// ];
// $carTwo=[
//     'manufacturer' => 'Tesla',
//     'model' => 'Model 3',
//     'year' => 2021,
//     'awd' => true
// ];
// make a list which holds another list
// $cars = [
//     $carOne,
//     $carTwo
// ];

// This is a better way to store multiple arrays, just store
// them in one variable rather then store them in two different
// which then will be store in another variable
// This is also a multi dimensional array
$cars = [
    [
        'manufacturer' => 'Kia', 
        'model' => 'Picanto',
        'year' => 2015,
        'awd' => false
    ],
    [
        'manufacturer' => 'Tesla',
        'model' => 'Model 3',
        'year' => 2021,
        'awd' => true
    ],
    [
        'manufacturer' => 'Nissan',
        'model' => 'Qashqai',
        'year' => 2019,
        'awd' => false
    ],
    [
        'manufacturer' => 'Doge',
        'model' => 'Viper',
        'awd' => false
    ]
];

// Print car one information from array
// echo "Car one is a {$carOne['manufacturer']} from year {$carOne['year']} <br>";
// Print car two information from array
// echo "Car one is a {$carTwo['manufacturer']} from year {$carTwo['year']} <br>";

//to make DRY code you can make a function or loop
function getCarInfo($car){
    return "The car is a {$car['manufacturer']} from year {$car['year']} <br>";
}

// if someone inputs cars into the system and does not input a specific index
// that will break the website because it is missing an index
// to fix it you can add an if else statement
// the statement will check if there is a year = it to the year
// else = it to N/A
// function getCarInfo($car){
//     if(isset($car['year'])){ //if car year is set = to car year
//         $year = $car['year'];
//     }else{
//         $year = 'N/A'; //if something else = N/A
//     }

//     return "The car is a {$car['manufacturer']} from year {$year} <br>";
// }

// echo getCarInfo($carOne);
// echo getCarInfo($carTwo);
// The function is not the best because you are still repeating yourself in the echo
// so if you have 500 cars you need to write an echo for all 500 cars

//create a foreach loop which uses the function getCarInfo
foreach($cars as $car){
    echo getCarInfo($car);
}

