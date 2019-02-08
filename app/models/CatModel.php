 <?php

/**
 * Category Model
 */


 class CatModel extends DModel{

    public function __construct()
    {
        parent::__construct();
    }


    public function catList(){

        return $this -> db -> select('category');
        
       

    }
 }