<?php 
	class controller_order{
		public $model;
		public function __construct(){
			//---------
			$this->model = new model();
			//---------
			//lay bien act tu url
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			//lay bien id tu url
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			switch($act){
				case "delete":
					//xoa ban ghi co id truyen vao
					$this->model->execute("delete from tbl_order where order_id=$id");
					//xóa các bản ghi trong tbl_order_detail
					$this->model->execute("delete from tbl_order_detail where order_id=$id");
					//quay tro lai trang order
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php?controller=order">';
				break;
			}
			//---------
			//quy dinh so ban ghi tren 1 trang
			$record_perpage = 10;
			//tinh tong so ban ghi
			$total = $this->model->get_num_rows("select order_id from tbl_order");
			//tinh so trang
			$num_page = ceil($total/$record_perpage);
			//lay trang hien tai (la bien p truyen tu url)
			$page = isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
			//lay tu ban ghi nao
			$from = $page * $record_perpage;
			//lay cac ban ghi
			$arr = $this->model->get_all("select * from tbl_order order by order_id desc limit $from,$record_perpage");
			//---------
			//load view
			include "view/backend/view_order.php";
		}
	}
	new controller_order();
 ?>