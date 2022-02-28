<?php

class Horse{
    public $name;
    public $age;
    public $breed;
    public $color;
    public $height;
    public $weight;
    public $sex;
    public $ownerOne;
    public $ownerTwo;

    public function __construct($name, $age, $breed, $color, $height, $weight, $sex, $ownerOne, $ownerTwo){
        $this->name = $name;
        $this->age = $age;
        $this->breed = $breed;
        $this->color = $color;
        $this->height = $height;
        $this->weight = $weight;
        $this->sex = $sex;
        $this->ownerOne = $ownerOne;
        $this->ownerTwo = $ownerTwo;
    }

    public function getInfo(){
        if($this->ownerTwo){
            $owner = ", {$this->ownerTwo}" ;
        }
        $msg = "Horse name: {$this->name}<br> Horse age: {$this->age}<br> Horse breed: {$this->breed}<br> Horse color: {$this->color}<br> Horse height: {$this->height}<br> Horse weight: {$this->weight}kg<br> Horse sex: {$this->sex}<br> Horse owner: {$this->ownerOne} {$owner}<br><br>";
        return $msg;
    }
}

$horseOne = new Horse('Poppy', '3', 'Shire', 'Black', 1.8, 399, 'female', 'Maria Racariu', 'Rasmus Liiv');
$horseTwo = new Horse('Jade', '4', 'Appaloosa', 'White', 2, 490, 'female', 'Ash Bending', 'Rasmus Liiv');
$horseThree = new Horse('Robbie', '1', 'Arabian', 'Brown', 1.9, 465, 'male', 'Jade Passmore', '');

$barn = [
    $horseOne,
    $horseTwo,
    $horseThree
];

foreach ($barn as $horse) {
    echo $horse->getInfo();
}