<?php

use Dcontroller;
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
        $id = 40;
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

      public function updateCategory(){
        $data = array();
        $table = 'category';
        $id = 1;
       $catModel = $this->load->model("CatModel");
       $data['catbyid'] = $catModel -> catByid($table,$id);
       $this->load->view("updatecategory",$data); 
      }

      public function updateCat(){

        $table = 'category';
        $id = $_POST['id'];
        $name = $_POST['name'];
        $title = $_POST['title'];

        $cond = "id = $id";
        $data = array(
          'name' => $name,
          'title' => $title
        );
        $catModel = $this->load->model("CatModel");
        $result = $catModel -> catUpdate($table, $data, $cond);

        $msg = array();
  
        if ($result ==1) {
          $msg['msg'] = "Updated with success...!";
        } else {
          $msg['msg'] = "Update was not a success";
        }
        $this->load->view("updatecategory",$msg);



      }


      public function deleteCatById(){

        $table ='category';
        $cond = "id = 2";
        $catModel = $this->load->model("CatModel");
        $catModel -> delCatById($table,$cond);
    }


   


  
  



 }