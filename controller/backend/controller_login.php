<?php 
	class controller_login{
		//tao bien model
		public $model;
		public function __construct(){
			//khoi tao object cua class model, gan vao bien model
			$this->model = new model();
			//----------------
			//neu user an nut submit
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$c_email = $_POST["c_email"];
				$c_password = $_POST["c_password"];
				//kiem tra dang nhap
				$check = $this->model->get_a_record("select c_email, c_password from tbl_user where c_email='$c_email'");
				if(isset($check->c_email)){
					if($check->c_password == md5($c_password)){
						//gan vao session
						$_SESSION["c_email"] = $c_email;
						//quay tro lai trang admin
						header("location:admin.php");
					}
				}
			}
			//----------------
			//load view
			include "view/backend/view_login.php";
		}
	}
	new controller_login();
 ?>