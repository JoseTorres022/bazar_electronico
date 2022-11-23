<?php 
	
	class Views
	{
		function getView($controller,$view,$data="")
		{
			$controller = get_class($controller);
			if($controller == "Home"){
				// $view = "/Views/".$view.".php";
				// $view="./".$view.".php";
				// $view=VIEWS.$view.".php";
				$view="Views/".$view.".php";
			}else{
				// $view = "/Views/".$controller."/".$view.".php";
				// $view=VIEWS.$controller."/".$view.".php";
				$view="Views/".$controller."/".$view.".php";
			}
			require_once ($view);
		}
	}

 ?>