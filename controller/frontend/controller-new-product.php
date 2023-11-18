<?php 
	class controller_new_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view 
			include "view/frontend/view_new-product.php";
		}
	}
	new controller_new_product();
 ?>