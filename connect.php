<?php

	$host = 'localhost';
	$user = 'php_businessdb';
	$pwd = 'yourpassword';
	$dbname = 'php_businessdb';
	$db = new mysqli($host,$user,$pwd,$dbname);
	$link = mysqli_connect($host,$user,$pwd,$dbname);
	mysqli_set_charset($link,'utf8');
	if($link){
		// echo '连接成功！';
	}else{
		echo '失败：'.mysqli_connect_error();
	}
	$db->query("SET NAMES UTF8");
	// $insert = 'INSERT INTO `seller` (`Sno`,`Sname`,`Pno`,`Description`,`Price`,`Class`) VALUES ("",$name,"",$des,$price,$var)';
	// $res_link = mysqli_query($link,$insert);
	// if($res_link){
	// 	echo '插入成功！';
	// }else{
	// 	echo '插入失败！';
	// }
	?>