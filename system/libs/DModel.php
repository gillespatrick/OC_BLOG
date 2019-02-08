<?php

/**
 * Main Model
 */
class DModel 
{
	

	protected $db = array();
	public  function __construct()
	{

        $dns = 'mysql:dbname=oc_blog;host=localhost';
        $user = 'gilles';
        $pass = 'gillespatr9ck';


		$this -> db = new Database($dns,$user,$pass);
	}
}