<?php 
	// require_once(".//Config/Config.php");
	// require_once("/Helpers/Helpers.php");
	require_once("../bazar_electronico/Config/Config.php");
	require_once("../bazar_electronico/Helpers/Helpers.php");
	$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
	$arrUrl = explode("/", $url);
	$controller = $arrUrl[0];
	$method = $arrUrl[0];
	$params = "";

	if(!empty($arrUrl[1]))
	{
		if($arrUrl[1] != "")
		{
			$method = $arrUrl[1];	
		}
	}

	if(!empty($arrUrl[2]))
	{
		if($arrUrl[2] != "")
		{
			for ($i=2; $i < count($arrUrl); $i++) {
				$params .=  $arrUrl[$i].',';
				# code...
			}
			$params = trim($params,',');
		}
	}
	// require_once("/Libraries/Core/Autoload.php");
	// require_once("/Libraries/Core/Load.php");
	require_once("../bazar_electronico/Libraries/Core/Autoload.php");
	require_once("../bazar_electronico/Libraries/Core/Load.php");
 ?>