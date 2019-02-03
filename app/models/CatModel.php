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
        
        $sql ="select * from category";
        $query = $this -> db -> query($sql);
        $result = $query -> fetchAll();
        return $result;

    }
 }