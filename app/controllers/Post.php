<?php

use Dcontroller;


class Post extends DController{

function __construct()
{
    parent::__construct();
}



public function blog()
{

  $this->load->view("blog");
}







}