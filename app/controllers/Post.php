<?php

use Dcontroller;


class Post extends DController{

function __construct()
{
    parent::__construct();
}



public function postList(){

  $data = array();
  $table = 'post';
 $postModel = $this->load->model("PostModel");
 $data['allpost'] = $postModel -> PostList($table);
 $this->load->view("post",$data);
 
}


public function postDetail($id){


  $data = array();
  $tablePost = 'post';
  $tableCat = 'category';
 $postModel = $this->load->model("PostModel");
 $data['postbyid'] = $postModel -> postById($tablePost, $tableCat,$id);

  $this->load->view("postdetails",$data);

}






/*public function blog()
{
  $this->load->view("blog");
}*/







}