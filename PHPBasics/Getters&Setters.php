<?php

class User{
    public $username;
    private $email;
    private $password;

    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
    //Getter
    public function getInfo(){
        $msg = "Username = {$this->username}<br>Email = {$this->email}<br>";
        return $msg;
    }
    //Setter
    //Checks if email is valid and changes it
    public function setEmail($email){
        if(strpos($email, '@') > -1){
            $this->email = $email;
        }
    }
}

$userOne = new User('Maria', 'maria@email.com', 'Admin123');
$userTwo = new User('Rasmus', 'rasmus@email.com', 'Password');

//changes the email
$userOne->setEmail('');

echo "{$userOne->getInfo()}<br>";
echo "{$userTwo->getInfo()}<br>";