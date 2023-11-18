<?php 
	//start session
	session_start();
	//load file config
	include "config.php";
	//load file model
	include "model/model.php";
	//lay bien controller truyen tu url
	$controller = isset($_GET["controller"]) ? $_GET["controller"] : "home";
	//noi cac thanh phan de ra duong dan vat ly
	$file_controller = "controller/frontend/controller_$controller.php";
	//load file master
	//load file master
	//kiểm tra nếu tồn tại MVC ở phần main thì load file master-trangcon.php, còn nếu không tồn tại MVC ở phần main thì load file master-trangchu.php
	if(file_exists($file_controller))
		include "view/frontend/master-trangcon.php";
	else
		include "view/frontend/master-trangchu.php";
 ?>