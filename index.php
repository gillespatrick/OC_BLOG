<?php
	

	include_once "system/libs/DModel.php";
	include_once "system/libs/Database.php";
	include_once "system/libs/Load.php";
	//include_once "system/libs/Main.php";
	include_once "system/libs/Dcontroller.php";

	
	$url = isset($_GET['url']) ? $_GET['url'] : Null;

		if ($url != Null) {

			$url = rtrim($url,'/');
			$url = explode('/', filter_var($url,FILTER_SANITIZE_URL));

		} else {
			unset($url);
		}
		
	
	
	
	//url controller
	if (isset($url[0])) {
		include 'app/controllers/'.$url[0].'.php';
		$ctlr = new $url[0]();


			//url parameters
			if (isset($url[2])) {

				$str = $url[1];
				$ctlr -> $str($url[2]);

			} else {


				//url method
				if (isset($url[1])) {
					$str = $url[1];
					$ctlr -> $str();
					//$ctlr -> $url[1]();
				} else {
					# code...
				}
				
			}

	} else {
	 
	 	include 'app/controllers/Index.php';
	 	$ctlr = new Index();
	 	$ctlr -> home();

	}
	

?>