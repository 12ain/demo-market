<?php
$string='1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
$code='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string{mt_rand(0,strlen($string)-1)}.'</span>';
$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string{mt_rand(0,strlen($string)-1)}.'</span>';
$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string{mt_rand(0,strlen($string)-1)}.'</span>';
$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string{mt_rand(0,strlen($string)-1)}.'</span>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{background:#2885f8;}
        #register{font-size:60px; color:#fff; font-family:"微软雅黑"; position:absolute; left:46%; top:22%;}
        #HelloWorld{color:#fff; font-size:60px; font-family:"微软雅黑"; opacity:1; position:absolute; left:12%; top:12%;}
        .all{width:600px; height:360px; background:#fff; border:1px; position:absolute; left:30%; top:37%; border-radius:60px 60px 60px 60px;}
        #ZhuCe{outline:none; border:none; background:#2885f8; width:280px; height:50px; position:absolute; left:0%; top:130%; color:#fff; font-size:20px; border-radius:100px; font-family:"微软雅黑"; cursor:pointer;}
    </style>
</head>
<body>
    <span id="register">注册</span>
    <span id="HelloWorld">HelloWord!</span>
    <div class="all">
    <form action="doReg.php" method='post' style="position:absolute; left:30%; top:20%;">
        <table>
            账号：<input type="text" name="userName" id="" placeholder="字母开头，6-18位"><br>
            密码：<input type="password" name="password" id="" placeholder='请输入密码'><br>
            再次确认密码：<input type="password" name="password1" id="" ><br>
            邮箱：<input type="email" name="email" id=""><br>
            验证码：<input type="text" name="verify" id=""><?php echo $code;?><br>
            <input type="hidden" name="verify1" value='<?php echo strip_tags($code);?>'>
            <input id="ZhuCe" type="submit" value="注册">
        </table>
    </form>
    </div>
</body>
</html>