<?php

require_once __DIR__ . "/../config.php";

class Users
{
    private $name;
    private $firstname;
    private $email;
    private $password;

    public function __construct($name, $firstname, $email, $password)
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName()
    {
        return $this->name;
    }   
    public function getfirstname()
    {
        return $this->firstname;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }

    //setters
    public function setName($name)
    {
        $this->name = $name;    
    }
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }

}