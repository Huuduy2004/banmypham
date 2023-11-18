<?php 
	class controller_intro{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_intro.php";
		}
	}
	new controller_intro();
 ?>