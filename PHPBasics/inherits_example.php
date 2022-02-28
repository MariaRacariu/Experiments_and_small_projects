<?php

class User{
    public $username;
    protected $email;
    private $password;
    public $role = 'member';

    public function __construct($username, $email, $password){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function message(){
        return "$this->email sent a new message";
    }

    // Getter
    public function getInfo(){
        $msg = "Username = {$this->username}<br>Email = {$this->email}<br>";
        return $msg;
    }
    // Setter
    // Checks if email is valid and changes it
    public function setEmail($email){
        if(strpos($email, '@') > -1){
            $this->email = $email;
        }
    }
}
// New class that inherits all the methods and values of class User
// User is now the parent class of AdminUser
class AdminUser extends User {
    public $admin;
    public $role = 'admin';

    public function __construct($username, $email, $password, $admin){
        $this->admin = $admin;
        parent::__construct($username, $email, $password);
    }

    public function message(){
        return "$this->email, an admin, sent a new message";
    }
}
// New instance of User
$userOne = new User('Maria', 'maria@email.com', 'Admin123');
$userTwo = new User('Rasmus', 'rasmus@email.com', 'Password');

// New instance of adminUser
$userThree = new adminUser('Best Admin man', 'admin123@gmail.com', 'admin123', 5);

// Changes the email
$userOne->setEmail('');

echo "{$userOne->getInfo()}";
echo "{$userOne->role}<br><br>";

echo "{$userTwo->getInfo()}<br>";
echo "{$userThree->getInfo()}";
echo "Admin level = {$userThree->admin}<br>";
echo "{$userThree->role}<br><br>";

echo "{$userOne->message()}<br>";
echo "{$userThree->message()}<br>";