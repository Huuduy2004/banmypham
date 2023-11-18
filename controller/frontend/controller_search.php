<?php 
	class controller_search{
		//tao bien $model
		public $model;
		public function __construct(){
			$this->model = new model();
			//------------
			$key = isset($_GET["key"])?$_GET["key"]: "";
			
			//------------
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 10;
			//Tinh tong so ban ghi trong table
			$total = $this->model->get_num_rows("select c_name from tbl_product where c_name like '%$key%' or c_description like '%like%' or c_content like '%like%'");
			//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai (bien nay truyen tren url)
			$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			//tu trang hien tai, xac dinh lay tu ban ghi nao
			$from = $page * $record_per_page;
			//------------
			$arr = $this->model->get_all("select * from tbl_product where c_name like '%$key%' or c_description like '%like%' or c_content like '%like%' order by pk_product_id desc limit $from,$record_per_page");
			//load view
			include "view/frontend/view_search.php";
			//------------
		}
	}
	new controller_search();
 ?>