<?php

    var_dump($_FILES);
    if(is_uploaded_file($_FILES['file']['tmp_name'])){
        $arr =  pathinfo($_FILES['file']['name']);
        $newName = date('YmdGis').rand(1000,9999);
        if( move_uploaded_file($_FILES['file']['tmp_name'],"upload/{$newName}.{$arr['extension']}")){
            echo "恭喜你上传成功";
        }else{
            echo "文件上传失败";
        }
    }else{
        exit('可能会有攻击');
    }
   

?>