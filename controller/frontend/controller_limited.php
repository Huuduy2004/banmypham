<?php
	class controller_limited{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_limited.php";
		}
	}
	new controller_limited();
?>