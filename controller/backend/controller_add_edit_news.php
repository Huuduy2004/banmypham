<?php 
	class controller_add_edit_news{
		public $model;
		public function __construct(){
			$this->model = new model();
			//lay bien act tu url
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			//lay bien id tu url
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_news&act=do_edit&id=$id";
					//lay ban ghi co id truyen vao
					$arr = $this->model->get_a_record("select * from tbl_news where pk_news_id=$id");
				break;
				case "do_edit":
					$c_name = $_POST["c_name"];
					$fk_category_news_id = $_POST["fk_category_news_id"];
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_hotnews =isset($_POST["c_hotnews"])?1:0;
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_news set fk_category_news_id=$fk_category_news_id,c_name='$c_name',c_description='$c_description',c_content='$c_content',c_hotnews=$c_hotnews where pk_news_id=$id");
					//-----------
					$c_img = $_FILES["c_img"]["name"];
					if($c_img != ""){
						//------------
						//lay anh cu de xoa
						$old_img = $this->model->get_a_record("select c_img from tbl_news where pk_news_id=$id");
						//xoa anh
						unlink("public/upload/news/".$old_img->c_img);
						//------------
						$tmp = $_FILES["c_img"]["tmp_name"];
						$c_img = time().$c_img;
						move_uploaded_file($tmp, "public/upload/news/$c_img");
						//update lai c_img trong csdl
						$this->model->execute("update tbl_news set c_img='$c_img' where pk_news_id=$id");
					}
					//-----------
					header("location:admin.php?controller=news");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_news&act=do_add";					
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$fk_category_news_id = $_POST["fk_category_news_id"];
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_hotnews =isset($_POST["c_hotnews"])?1:0;
					$c_img = time().$_FILES["c_img"]["name"];
					if($c_img != ""){
						$tmp = $_FILES["c_img"]["tmp_name"];
						$c_img = time().$c_img;
						move_uploaded_file($tmp, "public/upload/news/$c_img");
					}
					//insert ban ghi
					$this->model->execute("insert into tbl_news(c_name,c_description,c_content,c_img,fk_category_news_id,c_hotnews) values('$c_name','$c_description','$c_content','$c_img',$fk_category_news_id,$c_hotnews)");
					header("location:admin.php?controller=news");
				break;
			}
			//load view
			include "view/backend/view_add_edit_news.php";
		}
	}
	new controller_add_edit_news();
 ?>