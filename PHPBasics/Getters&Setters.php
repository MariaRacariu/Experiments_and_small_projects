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

    public function getEmail(){
        return $this->email;
    }
}

$userOne = new User('Maria', 'maria@email.com', 'Admin123');
$userTwo = new User('Rasmus', 'rasmus@email.com', 'Password');

echo $userOne->getEmail() ;
echo $userTwo->getEmail();