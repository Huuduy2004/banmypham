<?php
	class controller_order_detail{
		public $model;
		public function __construct(){
			$this->model = new model();
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			switch ($act) {
				case 'giaohang':
					$this->model->execute("update tbl_order set trangthai=1 where order_id=$id");
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php?controller=order">';
					break;
				
				default:
					# code...
					break;
			}
			//load view
			include "view/backend/view_order_detail.php";
		}
	}
	new controller_order_detail();
?>