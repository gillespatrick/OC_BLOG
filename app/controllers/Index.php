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

    public function contact(){

      $this->load->view("contact");
      
    }



    public function category(){

      $data = array();
     $catModel = $this->load->model("CatModel");
     $data['cat'] = $catModel -> catList();
     $this->load->view("category",$data);
     
    }



    public function catById(){

      $data = array();
      $table = 'category';
      $id = 1;
     $catModel = $this->load->model('CatModel');
      $data['catbyid'] = $catModel -> catByid($table,$id);
      $this->load->view("catbyid",$data);
    }


    public function addCategory(){

      $this->load->view("addcategory");

    }


    public function insertCategory(){

      $table ='category';

      $name = $_POST['name'];
      $title = $_POST['title'];

      $data = array(
        'name' => $name,
        'title' =>$title
      );
      $catModel = $this->load->model('CatModel');
      $catModel -> inserCat($table,$data);
      

    }

}
