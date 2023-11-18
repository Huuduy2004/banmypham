<?php
	class controller_my_order{
		public $model;
		public function __construct(){
			$this->model = new model();
			include "view/frontend/view_my_order.php";
		}
	}
	new controller_my_order();
?>