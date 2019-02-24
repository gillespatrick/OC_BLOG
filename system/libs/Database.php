 <?php





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
		$values = ":" .implode(", :",array_keys($data));

		$sql = "INSERT INTO $table($keys) VALUES ($values)"; 
		$stmt = $this -> prepare($sql);

		foreach ($data as $key => $value) {
			$stmt -> bindParam(":$key",$value);
		}	
		return $stmt -> execute();

		
	} 


	public function update($table, $data, $cond){

		$UpdateKeys = null;
		foreach ($data as $key => $value) {
			$UpdateKeys .= "$key=:$key,";
		}

		$UpdateKeys = rtrim($UpdateKeys, ',');

		$sql = "UPDATE $table SET $UpdateKeys WHERE $cond";
		$stmt = $this ->prepare($sql);
		foreach ($data as $key => $value) {
			$stmt -> bindParam(":$key",$value);
		}	
		return $stmt -> execute();	

	}


	public function delete($table,$cond,$limit = 1){

		$sql = "DELETE FROM $table where $cond LIMIT $limit ";
		return $this -> exec($sql);

	}


}