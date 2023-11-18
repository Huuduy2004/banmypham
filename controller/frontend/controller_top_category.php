<?php 
	class controller_top_category{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_top_category.php";
		}
	}
	new controller_top_category();
 ?>