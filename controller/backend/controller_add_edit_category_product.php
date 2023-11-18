<?php 
	class controller_add_edit_category_product{
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
					$form_action = "admin.php?controller=add_edit_category_product&act=do_edit&id=$id";
					//lay mot ban ghi tuong ung voi id truyen vao
					$arr = $this->model->get_a_record("select * from tbl_category_product where pk_category_product_id=$id");
				break;
				case "do_edit":
					$c_name = $_POST["c_fullname"];
					//-------------
					//loai bo ky tu nhay don
					$c_name = str_replace("'", "\'", $c_name);
					//-------------
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_category_product set c_name='$c_name' where pk_category_product_id=$id");
					//quay tro lai trang category_product
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php?controller=category_product">';
					// header("location:admin.php?controller=category_product");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_category_product&act=do_add";
				break;
				case "do_add":
					$c_name = $_POST["c_fullname"];
					//insert ban ghi
					$this->model->execute("insert into tbl_category_product (c_name) values ('$c_name')");
					//quay tro lai trang category_product
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php?controller=category_product">';
					// header("location:admin.php?controller=category_product");
				break;
				case "delete":
					$form_action = "admin.php?controller=add_edit_category_product&act=delete&id=$id";
					$this->model->execute("delete from tbl_category_product where pk_category_product_id=$id");
					//quay tro lai trang category_product
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php?controller=category_product">';
					// header("location:admin.php?controller=category_product");
				break;
			}
			//-------------
			//load view
			include "view/backend/view_add_edit_category_product.php";
		}
	}
	new controller_add_edit_category_product();
 ?>