<?php 
	class controller_contact{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_contact.php";
		}
	}
	new controller_contact();
 ?>