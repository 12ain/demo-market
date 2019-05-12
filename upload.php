<?php
	$name = $_FILES['file']['name'];
	$type = strtolower(substr($name,strrpos($name,'.')+1)); 
	$allow_type = array('jpg','jpeg','gif','png'); 
	if(!in_array($type, $allow_type)){
	    echo '格式不正确！';
	}
	if(!is_uploaded_file($_FILES['file']['tmp_name'])){
	    echo '未发现暂存文件！';
	}
	$upload_path = "xsg/news"; 
	if(move_uploaded_file($_FILES['file']['tmp_name'],$upload_path.$name)){
	    echo "Successfully!";
	}else{
	    echo "Failed!";
	}

?>
