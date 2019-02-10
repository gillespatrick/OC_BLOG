<?php

ini_set('memory_limit', '1024M');



/**
 * Class database
 */
	class Database extends PDO {
	
	public function __construct($dns,$user,$pass)
	{
		parent::__construct($dns,$user,$pass);

	}


	public function select($sql,$data = array(), $fetchstyle = PDO::FETCH_ASSOC){

		$stmt = $this -> prepare($sql);
		foreach ($data as $key => $value) {
			$stmt -> bindParam($key,$value);
		}	
        $stmt -> execute();
        return $stmt -> fetchAll();

	}

	public function insert($table, $data){
		$keys = implode(",", array_keys($data));
		//$values = ":" .implode(", :", array_keys($data));
		$values = "";

		for ($i=0; $i < count ($data);$i++ ) { 
			
			if ($i+1 >= count($data)){
				$values = $values ."?";
			}else{
				$values = $values ."?,";
			}

			
		}

		

		
		$sql = "insert into $table($keys) values($values)"; 
		$stmt = $this -> prepare($sql);

		for ($i=0; $i < count($data); $i++) { 
			$stmt -> bindParam($i+1, $data[$i]);
		}
		
		
		
		return $stmt -> execute();
	}


}