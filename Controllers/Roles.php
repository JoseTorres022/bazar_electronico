<?php

class Roles extends Controllers
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Roles()
	{
		$data['page_id'] = 3;
		$data['page_tag'] = "Roles Usuario";
		$data['page_title'] = "Roles de usuario";
		$data['page_name'] = "Roles Usuario <small> Bazar Electronico";
		// $data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quis. Perspiciatis repellat perferendis accusamus, ea natus id omnis, ratione alias quo dolore tempore dicta cum aliquid corrupti enim deserunt voluptas.";
		$this->views->getView($this, "roles", $data);
	}
	public function getRoles()
	{ 
		$arrData = $this->model->selectRoles();

		//construyecto JSON
		echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
		die();
		//dep($arrData);
	}
}
