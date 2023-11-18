<?php 
	class controller_add_edit_user{
		public $model;
		public function __construct(){
			$this->model = new model();
			//-------------
			//lay bien act tu url
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			//lay bien id tu url
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			//tao bien $form_action de xac dinh trang thai submit cua form la add hay la edit
			//kiem tra cac truong hop cua bien $act
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_user&act=do_edit&id=$id";
					//lay mot ban ghi tuong ung voi id truyen vao
					$arr = $this->model->get_a_record("select * from tbl_user where pk_user_id=$id");
				break;
				case "do_edit":
					$c_fullname = $_POST["c_fullname"];
					//-------------
					//loai bo ky tu nhay don
					$c_fullname = str_replace("'", "\'", $c_fullname);
					//-------------
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_user set c_fullname='$c_fullname' where pk_user_id=$id");
					//neu user nhap password moi
					$c_password = $_POST["c_password"];
					if($c_password != ""){
						//ma hoa password bang ham md5
						$c_password = md5($c_password);
						//update ban ghi co id truyen vao
						$this->model->execute("update tbl_user set c_password='$c_password' where pk_user_id=$id");
					}
					//quay tro lai trang user
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php?controller=user">';
					// header("location:admin.php?controller=user");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_user&act=do_add";
				break;
				case "do_add":
					$c_fullname = $_POST["c_fullname"];
					$c_email = $_POST["c_email"];
					$c_password = $_POST["c_password"];
					$c_password = md5($c_password);
					//insert ban ghi
					$this->model->execute("insert into tbl_user(c_fullname,c_email,c_password) values('$c_fullname','$c_email','$c_password')");
					//quay tro lai trang user
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php?controller=user">';
					// header("location:admin.php?controller=user");
				break;
			}
			//-------------
			//load view
			include "view/backend/view_add_edit_user.php";
		}
	}
	new controller_add_edit_user();
 ?>