<?php 
	class model{
		//ham lay danh sach tat ca cac ban ghi
		public function get_all($sql){
			global $db;
			//$result = mysqli_query($db,$sql) or die("Lỗi!");
			$result = mysqli_query($db,$sql);
			$arr = array();
			while($rows = mysqli_fetch_object($result))
				$arr[] = $rows;
			return $arr;
		}
		//thuc thi cau truy van
		public function execute($sql){
			global $db;
			$result = mysqli_query($db,$sql);
		}
		//lay mot ban ghi
		public function get_a_record($sql){
			global $db;
			//$result = mysqli_query($db,$sql) or die("Lỗi!");
			$result = mysqli_query($db,$sql);
			$arr = mysqli_fetch_object($result);
			return $arr;
		}
		//tra ve so luong ban ghi
		public function get_num_rows($sql){
			global $db;
			//$result = mysqli_query($db,$sql) or die("Lỗi!");
			$result = mysqli_query($db,$sql);
			return mysqli_num_rows($result);
		}
	}
 ?>