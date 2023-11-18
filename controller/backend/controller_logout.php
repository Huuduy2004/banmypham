<?php 
	//huy session
	unset($_SESSION["c_email"]);
	//quay tro lai trang admin.php
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php">';   
	exit;
 ?>