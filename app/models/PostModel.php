<?php

/**
 * Post Model
 */


 class PostModel extends DModel{

    public function __construct()
    {
        parent::__construct();
    }


    public function PostList($table){
        $sql = "select * from $table order by id desc limit 3";
        return $this -> db -> select( $sql);
        
    }


    public function postById($tablePost, $tableCat,$id){
        $sql = "select $tablePost.*, $tableCat.name from $tablePost
        inner join $tableCat
        on $tablePost.categoryId = $tableCat.id
        where $tablePost.id = $id";
        return $this -> db -> select( $sql);
        
  
    }

   
 }