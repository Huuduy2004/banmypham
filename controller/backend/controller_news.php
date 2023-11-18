<?php 
	class controller_news{
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
					//------------
					//lay anh cu de xoa
					$old_img = $this->model->get_a_record("select c_img from tbl_news where pk_news_id=$id");
					//xoa anh
					unlink("public/upload/news/".$old_img->c_img);
					//------------
					//xoa ban ghi co id truyen vao
					$this->model->execute("delete from tbl_news where pk_news_id=$id");
					//quay tro lai trang news
					header("location:admin.php?controller=news");
				break;
			}
			//---------
			//quy dinh so ban ghi tren 1 trang
			$record_perpage = 10;
			//tinh tong so ban ghi
			$total = $this->model->get_num_rows("select pk_news_id from tbl_news");
			//tinh so trang
			$num_page = ceil($total/$record_perpage);
			//lay trang hien tai (la bien p truyen tu url)
			$page = isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
			//lay tu ban ghi nao
			$from = $page * $record_perpage;
			//lay cac ban ghi
			$arr = $this->model->get_all("select * from tbl_news order by pk_news_id desc limit $from,$record_perpage");
			//---------
			//load view
			include "view/backend/view_news.php";
		}
	}
	new controller_news();
 ?>