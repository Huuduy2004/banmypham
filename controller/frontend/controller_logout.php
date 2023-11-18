<?php 
	//huy session
	unset($_SESSION["email"]);
	//quay tro lai trang admin.php
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';   
	exit;
 ?>