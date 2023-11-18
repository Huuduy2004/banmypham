<?php 
	class controller_register{
		public $model;
		public function __construct(){
			$this->model = new model();
			//-----
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$email = $_POST["email"];
				$password = md5("password");
				$hovaten = $_POST["hovaten"];
				$diachi = $_POST["diachi"];
				$dienthoai = $_POST["dienthoai"];
				//insert ban ghi vao tbl_customer, lay ra customer_id vua insert
				$customer_id = $this->model->execute("insert into tbl_customer set email='$email',password='$password', hovaten='$hovaten',diachi='$diachi',dienthoai='$dienthoai'");
				//insert mot ban ghi vao tbl_order, lay ra order_id vua insert
				// $order_id = $this->model->execute("insert into tbl_order set customer_id=$customer_id, ngaymua=now(), trangthai=0");
				// //duyet cac phan tu cua session array cart, insert ban ghi vao tbl_order_detai
				// foreach($_SESSION["cart"] as $product){
				// 	 $fk_product_id = $product["pk_product_id"];
				// 	 $number = $product["number"];
				// 	 $this->model->execute("insert into tbl_order_detail set order_id=$order_id,fk_product_id=$fk_product_id,c_number=$number");
				
				// //xoa gio hang
				// $_SESSION["cart"] = array();
				// echo "<script>location.href='index.php?controller=cart';</script>";
			}
			//-----
			include "view/frontend/view_register.php";
			//-----
		}
	}
	new controller_register();
 ?>