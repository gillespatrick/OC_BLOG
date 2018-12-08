<?php

require_once '../vendor/autoload.php';

use models\Hydrate;



class User extends Hydrate
{
    private $id;
    private $first_name;
    private $last_ame;
    private $email;
    private $password;

    // GETTERS

    public function getId()
    {
        return $this -> id;
    }

    public function getFirst_name()
    {
        return $this -> first_name;
    }

    public function getLast_name()
    {
        return $this -> last_name;
    }


    public function getEmail()
    {
        return $this -> email;
    }


    public function getPassword()
    {
        return $this-> password;
    }



    // SETTERS

    public function setId($id)
    {
        $this-> id = (int) $id;
    }

    public function setFirst_name($first_name)
    {
        if (is_string($first_name)) {
            $this -> first_name = $first_name;
        }
    }

    public function setLast_name($last_name)
    {
        if (is_string($last_Name)) {
            $this -> last_name = $last_name;
        }
    }

  

    public function setEmail($email)
    {
        if (is_string($email)) {
            $this->email = $email;
        }
    }

   

    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }


    
}