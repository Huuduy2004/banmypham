<?php
	class controller_hotdeal{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_hotdeal.php";
		}
	}
	new controller_hotdeal();
?>