<?php
	class controller_featured{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_featured.php";
		}
	}
	new controller_featured();
?>