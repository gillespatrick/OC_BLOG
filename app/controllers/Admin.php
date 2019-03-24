<?php

use Dcontroller;
/**
 * Admin Controller
 */

 Class Admin extends Dcontroller{

    function __construct()
    {
        parent::__construct();
    }


public function login(){
  
    $this->load->view("login");
  }


  public function forg_password(){

    $this -> load -> view("forgot-password");

  }


  public function register(){

    $this -> load -> view("register");

  }



}