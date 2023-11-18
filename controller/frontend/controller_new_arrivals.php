<?php
	class controller_new_arrivals{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_new_arrivals.php";
		}
	}
	new controller_new_arrivals();
?>