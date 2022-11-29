<?php 

	class rolesModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}
        //creando la consulta para obtener los roles en la datatable
        public function selectRoles(){
            $sql="SELECT * FROM rol WHERE status !=0";
            $request=$this->select_all($sql);
            return $request;
        }	
	}
 ?>