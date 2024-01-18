<?php

class viecule{
    protected $marque;
    protected $model;
    protected $year;
    public function __construct($marque, $model, $year){
        $this->marque = $marque;
        $this->model = $model;
        $this->year = $year;
    }

    public function start(){
        echo"{$this->marque}start the engine";
    }
    public function stop(){
        echo "stop the viecule";
    }
    public function speedUp(){
        echo "don't rush!";
    }
}

class car extends viecule{
    
}

class moto extends viecule{
    
}

class User {
    private $name;
    private $email;
    private $password;
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }

}

class Users{
    private $users;
    public function __construct() {
        $this->users = array();
    }
    public function addUser(User $user) {
        $this->users[] = $user;
    }
    public function removeUser(User $user) {
        foreach ($this->users as $key=>$row){
            if ($row->getEmail()== $user->getEmail() ){
                unset($this->users[$key]);
            }
        }
    }
    public function getUsers() {
        foreach( $this->users as $row ){
            print_r($row->getName());
            print_r($row->getEmail());
            print_r($row->getPassword());
            echo"<br>";
        }
    }
}

$userDAO = new Users();

$user1 = new User('user1','user1@mail.com', 'user1psw');
$user2 = new User('user2','user2@mail.com','user2psw');
$user3 = new User('user3','user3@mail.com','user3psw');

$userDAO->addUser($user1);
$userDAO->addUser($user2);
$userDAO->addUser($user3);

$userDAO->getUsers();



$userDAO->removeUser($user2);

$userDAO->getUsers();


?>