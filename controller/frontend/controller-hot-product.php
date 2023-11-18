<?php 
	class controller_hot_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_hot-product.php";
		}
	}
	new controller_hot_product();
 ?>