<?php
/**
 * Category Controller
 */

 Class Category extends Dcontroller{

    function __construct()
    {
        parent::__construct();
    }




    public function categoryList(){

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
  
  



 }