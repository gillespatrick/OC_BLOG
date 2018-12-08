<?php
require_once 'Vendor/autoload.php';
use models\ManagerUser;

//use models\FunctionUser;

class ControllerUser {

   



    function NewUser($first_name,$last_name, $password, $email)
{
    $newUser = new ManagerUser();
    $newUser -> CreateUser($first_name,$last_name, $password, $email);

    
}
}