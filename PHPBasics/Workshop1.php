<?php

class Horse{
    public $name;
    public $breed;
    public $color;
    public $height;
    public $weight;
    public $sex;
    public $ownerOne;
    public $ownerTwo;

    public function getInfo(){
        if($this->ownerTwo){
            $owner = ", {$this->ownerTwo}" ;
        }
        $msg = "Horse name: {$this->name}<br> Horse breed: {$this->breed}<br> Horse color: {$this->color}<br> Horse height: {$this->height}<br> Horse weight: {$this->weight}<br> Horse sex: {$this->sex}<br> Horse owner: {$this->ownerOne} {$owner}<br><br>";
        return $msg;
    }
}

$horseOne = new Horse();
$horseOne->name = "Poppy";
$horseOne->breed = "Shire";
$horseOne->color = "Black";
$horseOne->height = 1.8;
$horseOne->weight = 399;
$horseOne->sex = "female";
$horseOne->ownerOne = "Maria Racariu";
$horseOne->ownerTwo = "Big dick Drummer";

$horseTwo = new Horse();
$horseTwo->name = "Jade";
$horseTwo->breed = "Appaloosa";
$horseTwo->color = "White";
$horseTwo->height = 2;
$horseTwo->weight = 490;
$horseTwo->sex = "female";
$horseTwo->ownerOne = "Ash Bending";
$horseTwo->ownerTwo = "Big dick Drummer";

$horseThree = new Horse();
$horseThree->name = "Robbie";
$horseThree->breed = "Arabian";
$horseThree->color = "Brown";
$horseThree->height = 1.9;
$horseThree->weight = 465;
$horseThree->sex = "male";
$horseThree->ownerOne = "Jade Passmore";

$farm = [
    $horseOne,
    $horseTwo,
    $horseThree
];

foreach ($farm as $horse) {
    echo $horse->getInfo();
}