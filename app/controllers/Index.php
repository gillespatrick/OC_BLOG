<?php
/**
 * Index Controller
 */

class Index extends Dcontroller {

   

  public  function __construct(){
      
    parent::__construct();
        
    }


    public function home(){

     $this->load->view("home");

    }

     public function Blog(){

     $this->load->view("blog");

    }



   


   


      
       
}
