<?php

require_once '../vendor/autoload.php';

use models\PDO;





class ManagerUser extends PDO
{


 // Create a new user

      public function CreateUser($first_name,$last_name, $password, $email)
    {
        $db = $this->DBconnect();
        $req = $db->prepare("INSERT INTO user (first_name,last_name,password, email) VALUES (?, ?, ?, ?)");
        $newUser = $req->execute(array($first_name,$last_name, $password, $email));

        return $NewUser;   
    }




   
}