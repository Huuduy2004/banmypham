<?php 
	class controller_static{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_static.php";
		}
	}
	new controller_static();
 ?>