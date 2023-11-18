<?php 
	class controller_cskh{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_cskh.php";
		}
	}
	new controller_cskh();
 ?>