 <?php

/**
 * Category Model
 */


 class CatModel extends DModel{

    public function __construct()
    {
        parent::__construct();
    }


    public function catList($table){

        return $this -> db -> select($table);
        
    }

    public function catById($table,$id){

        $sql = "select * from $table where id=:id";
        $stmt = $this -> db -> prepare($sql);
        $stmt -> bindParam(':id',$id);
        $stmt -> execute();
        return $stmt -> fetchAll();

    }



 }