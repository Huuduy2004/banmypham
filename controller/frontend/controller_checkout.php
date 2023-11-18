<?php 
	class controller_checkout{
		public $model;
		public function __construct(){
			$this->model = new model();
			//-----
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$hovaten = $_POST["hovaten"];
				$diachi = $_POST["diachi"];
				$dienthoai = $_POST["dienthoai"];
				$ghichu = $_POST["ghichu"];
				//insert ban ghi vao tbl_customer, lay ra customer_id vua insert
				$customer_id = $this->model->execute("insert into tbl_customer set hovaten='$hovaten',diachi='$diachi',dienthoai='$dienthoai',ghichu='$ghichu'");
				//insert mot ban ghi vao tbl_order, lay ra order_id vua insert
				$order_id = $this->model->execute("insert into tbl_order set customer_id=$customer_id, ngaymua=now(), trangthai=0");
				//duyet cac phan tu cua session array cart, insert ban ghi vao tbl_order_detai
				foreach($_SESSION["cart"] as $product){
					 $fk_product_id = $product["pk_product_id"];
					 $number = $product["number"];
					 $this->model->execute("insert into tbl_order_detail set order_id=$order_id,fk_product_id=$fk_product_id,c_number=$number");
				}
				//xoa gio hang
				$_SESSION["cart"] = array();
				echo "<script>location.href='index.php?controller=my_order';</script>";
			}
			//-----
			include "view/frontend/view_checkout.php";
			//-----
		}
	}
	new controller_checkout();
 ?>