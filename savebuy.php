<?php
	include('connect.php');
	include 'upload_file.php';
	session_start();
	$Uname = $_SESSION['userName'];
	$Gname = $_POST['sname'];
	$Gprice = $_POST['sprice'];
	$Gdescription = $_POST['sdes'];
	$Gclass = $_POST['svar'];
	// $Gimage = $_POST['file'];
	$Gimage = "upload/{$newName}.{$arr['extension']}" ;
	$Gphone = $_POST['Gphone'];
	$Gqq = $_POST['Gqq'];
	$Gwechat = $_POST['Gwechat'];
	//$Glocation = $_POST['slocation'];

	$time = time();

	$sql = "INSERT INTO business_goods (Gname, Gprice, Gdescription, Gclass, Gimage, Gphone, Gqq, Gwechat, Glocation, Gtime,Gsecond, Uname) values('{$Gname}','{$Gprice}','{$Gdescription}','{$Gclass}', '{$Gimage}', '{$Gphone}', '{$Gqq}', '{$Gwechat}', '青岛工学院', '{$time}','求购','{$Uname}')";
    // echo "$sql";
    $db->query($sql);


    header("location:indexbuy.php");
?>