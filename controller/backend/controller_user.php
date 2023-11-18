<?php 
	class controller_user{
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
					$this->model->execute("delete from tbl_user where pk_user_id=$id");
					//quay tro lai trang user
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php?controller=user">';
				break;
			}
			//---------
			//quy dinh so ban ghi tren 1 trang
			$record_perpage = 10;
			//tinh tong so ban ghi
			$total = $this->model->get_num_rows("select pk_user_id from tbl_user");
			//tinh so trang
			$num_page = ceil($total/$record_perpage);
			//lay trang hien tai (la bien p truyen tu url)
			$page = isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
			//lay tu ban ghi nao
			$from = $page * $record_perpage;
			//lay cac ban ghi
			$arr = $this->model->get_all("select * from tbl_user order by pk_user_id desc limit $from,$record_perpage");
			//---------
			//load view
			include "view/backend/view_user.php";
		}
	}
	new controller_user();
 ?>