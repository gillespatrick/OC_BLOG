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



    public function category(){

      $data = array();
      $table = 'category';
     $catModel = $this->load->model("CatModel");
     $data['cat'] = $catModel -> catList($table);
     $this->load->view("category",$data);
     
    }



    public function catById(){
      $data = array();
      $table = 'category';
      $id = 10;
     $catModel = $this->load->model("CatModel");
     $data['catbyid'] = $catModel -> catByid($table,$id);
     $this->load->view("catbyid",$data);  
    }


    public function addCategory(){

      $this->load->view("addcategory");


    }


    public function InsertCategory(){

      $table = 'category';

      $name = $_POST['name'];
      $title = $_POST['title'];

      $data = array(

        'name' => $name,
        'title' => $title
      );

      $catModel = $this->load->model("CatModel");
      $result = $catModel -> insertCat($table, $data);

      $msg = array();

      if ($result ==1) {
        $msg['msg'] = "Category added successfully...!";
      } else {
        $msg['msg'] = "Category not added";
      }
      $this->load->view("addcategory",$msg);
      
    }



   


      /*
       // Get the value of data
       
      public function getData()
      {
            return $this->data;
      }

      /**
       * Set the value of data
       *
       // @return  self
       
      public function setData($data)
      {
            $this->data = $data;

            return $this;
      }

      */
}
