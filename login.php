<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf=8">
<title>登录</title>
<style>
	body{background:#2885f8;}
	#login{font-size:60px; color:#fff; font-family:"微软雅黑"; position:absolute; left:46%; top:22%;}
    #HelloWorld{color:#fff; font-size:60px; font-family:"微软雅黑"; opacity:1; position:absolute; left:12%; top:12%;}
    .all{width:600px; height:360px; background:#fff; border:1px; position:absolute; left:30%; top:37%; border-radius:60px 60px 60px 60px;}
    #UsernameContent{height:32px; outline:none; position:absolute; left:33%; top:12%; font-family:"微软雅黑"; font-size:20px; border:1px #ccc solid; border-radius:1px; text-indent:10px; border-radius:100px;}
    #PasswordContent{height:32px; position:absolute; left:33%; top:25%; outline:none; font-family:"微软雅黑"; font-size:20px; border:1px #ccc solid; border-radius:1px; text-indent:10px; border-radius:100px;}
    #ForgetPassword{text-decoration:none; color:#000; position:absolute; left:60%; top:37%;}
    #DengLu{outline:none; border:none; background:#2885f8; width:280px; height:50px; position:absolute; left:28%; top:50%; color:#fff; font-size:20px; border-radius:100px; font-family:"微软雅黑"; cursor:pointer;}
    #ZhuCe{outline:none; border:none; background:#2885f8; width:280px; height:50px; position:absolute; left:28%; top:68%; color:#fff; font-size:20px; border-radius:100px; font-family:"微软雅黑"; cursor:pointer;}
    
</style>
</head>
<body>

<?php
	
	$dbServername="localhost";
	$dbUserName="php_businessdb";
	$dbPassword="yourpassword";
	$dbName="php_businessdb";
	
	$isInfoCanUse=false;//标识信息完整度
	
	$conn=mysqli_connect($dbServername,$dbUserName,$dbPassword,$dbName);
	// 检测连接 
	if (!$conn) { 
		die("Connection failed: " . $conn->connect_error); 
	}
	else
	{
		//echo "Connected successfully";
	}
	
	
	
	$userNameErr=$passwordErr="";
	//提交表单之后
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		//用户名
		$isInfoCanUse=true;
		if (empty($_POST["userName"])) 
		{
			$userNameErr = "用户名不能为空";
			$isInfoCanUse=false;
		} 
		else 
		{
			$userName = changeInput($_POST["userName"]);
		}
		
		
		//密码
		if (empty($_POST["password"])) 
		{
			$passwordErr = "密码不能为空";
			$isInfoCanUse=false;
	    } 
	    else 
		{
			$password = changeInput($_POST["password"]);
	    }
		
		//用户名和密码检查
		if($isInfoCanUse)
		{
			$sql="SELECT userName FROM account WHERE userName='$userName'";
			$result=mysqli_query($conn,$sql);
			$test=mysqli_fetch_assoc($result);//如果为false则是未找到
			if($test==false)
			{
				$userNameErr = "用户名不存在";
			}
			else
			{
				$sql="SELECT password FROM account WHERE (userName='$userName') and (password='$password')";
				$result=mysqli_query($conn,$sql);
				$test=mysqli_fetch_assoc($result);
				if($test==false)
				{
					$passwordErr="密码错误";
				}
				else//登陆成功
				{
					//存入session
					
					$_SESSION['userName']=$userName;
					
					
					echo "登陆成功!";
					
					//页面跳转
					echo "<script type=\"text/javascript\">";
					echo "window.location.href='index.php';";//返回上一个页面
					echo "</script>";
					
				}
			}
		}
		
			
	}
	
	
	
	
	
	
	function changeInput($data)//转换输入的数据
	{
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	
	
	
	?>
	<span id="login">登录</span>
    <span id="HelloWorld">HelloWord!</span>
    <div class="all">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div id="Username_frame">
                <input name="userName" id="UsernameContent" type="text" value="" placeholder="请输入您的账号">
				<div style="position:absolute; left:73%; top:13.2%;">
				<?php echo $userNameErr;?><br/>
				</div>
            </div>
            <div id="Password_frame">
                <input name="password" id="PasswordContent" type="password" value="" placeholder="请输入您的密码">
				<div style="position:absolute; left:73%; top:27%;">
				<?php echo $passwordErr;?><br/>
				</div>
            </div>
            <input type="submit" id="DengLu" value="登录">
            <input type="button" id="ZhuCe" value="注册" onclick="javascript:window.location.href='register.php'">
            <a href="login.php" id="ForgetPassword"><span>忘记密码</span></a>
        </form>
    </div>
    
</body>
</html>