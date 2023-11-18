<?php 
	//start session
	session_start();
	//load file config.php
	include "config.php";
	//load file model
	include "model/model.php";
	//--------------
	//kiem tra, neu user chua dang nhap thi hien thi mvc login, neu user da dang nhap thanh cong thi hien thi file master.php
	//load file master
	if(isset($_SESSION["c_email"]) == false)
		include "controller/backend/controller_login.php";
	else{	
		//lay gia tri cua bien controller truyen tu url
		$controller = isset($_GET["controller"])?$_GET["controller"]:"";
		//gan cac thanh phan de bien $controller thanh duong dan hoan chinh. VD: controller/backend/controller_user.php	
		$controller = "controller/backend/controller_$controller.php";
		include "view/backend/master.php";
	}
	//--------------
 ?>