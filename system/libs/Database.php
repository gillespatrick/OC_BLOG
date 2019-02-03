<?php



/**
 * Class database
 */
	class Database extends PDO {
	
	public function __construct()
	{
		$dns = 'mysql:dbname=oc_blog;host=localhost';
		$user = 'gilles';
		$pass = 'gillespatr9ck';

		parent::__construct($dns,$user,$pass);

	}
}