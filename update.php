<?php
	include 'connect.php';
	$Gid = $_GET['id'];
	$sql = "DELETE FROM business_goods WHERE Gid='{$Gid}'";
	$mysql_result = $db -> query($sql);
	if($mysql_result){
		echo '删除成功！5s后返回~';
		echo '<meta http-equiv="refresh" content="6;url=index.php">';
	}else{
		echo '删除失败！5s后返回~';
		echo '<meta http-equiv="refresh" content="6;url=index.php">';
	}

?>