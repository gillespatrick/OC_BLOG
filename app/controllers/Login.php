<?php

use Dcontroller;
/**
 * Login Controller
 */

 Class Login extends Dcontroller{

    function __construct()
    {
        parent::__construct();
    }



    public function login(){
  
        $this->load->view("login");
      }

      public function auth(){

        $table = "user";

        $username = $_POST['uesrname'];
        $password = $_POST['password'];
        $loginModel = $this->load->model("LoginModel");
        $count = $loginModel -> userControl($table,$username,$password); 
      }



}