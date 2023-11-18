<?php 
	class controller_policy{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_policy.php";
		}
	}
	new controller_policy();
 ?>