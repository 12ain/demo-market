<?php
header('content-type:text/html;charset=utf-8');
//接收信息
$userName=$_POST['userName'];
$password=$_POST['password'];
$password1=$_POST['password1'];
$email=$_POST['email'];
$verify=$_POST['verify'];
$verify1=$_POST['verify1'];

$isInfoCanUse=false;

//echo $userName,'-',$password,'-',$password1,'-',$email,'-',$verify,'-',$verify1;
//1.判断下用户首字母是否符合规范
$char=$userName{0};
$ascii=ord($char);
if(($ascii>=97 && $ascii<=122)||($ascii>=65 && $ascii<=90)){
    $isInfoCanUse=true;
    //2.判断用户名长度是否符合规范
    $userLen=strlen($userName);
    if($userLen>=6 && $userLen<=18){
        //3.判断密码是否为空
        $pwdLen=strlen($password);
        if($pwdLen>0){
            //4.判断两次密码是否一致
            if($password===$password1){
                //5.判断邮箱的合法性
                if(strpos($email,'@')!==false){
                    //6.判断验证码是否一致
                    if(strtoupper($verify)===strtoupper($verify1)){

                        //把用户的注册的信息写入数据库中
                        //数据库连接
                        $dbServername = "localhost"; 
                        $dbuserName = "php_businessdb"; 
                        $dbPassword = "yourpassword"; 
                        $dbName="php_businessdb";//数据库名

                        // 创建连接 
                        $conn =mysqli_connect($dbServername, $dbuserName, $dbPassword,$dbName); 

                        // 检测连接 
                        if (!$conn) { 
                            die("Connection failed: " . $conn->connect_error); 
                        }
                        else
                        {
                            //echo "Connected successfully";
                        }

                        //检测用户名是否被占用
                        $sql="SELECT userName FROM account WHERE userName='$userName'";
                        $result=mysqli_query($conn,$sql);//找不到也是执行成功，返回结果集
                        $test=mysqli_fetch_assoc($result);
                        if($test !=false)//记录不为空就是找到了
                        {
                            $userNameErr="该用户名已存在，请重新注册";
                            echo $userNameErr;
                            $isInfoCanUse=false;
                        }

                        $isRegSuccess=false;//检测是否注册成功
                        if($isInfoCanUse===true)
                        {//如果信息填写完整，就注册
                            $sql="INSERT INTO account(userName,password,email) VALUES('$userName','$password','$email')";
                            if(mysqli_query($conn,$sql))
                            {
                                $isRegSuccess=true;
                            }
                            else
                            {
                                $isRegSuccess=false;
                            }
                            echo '恭喜您,注册成功<br>';
                            echo '<br>6秒钟之后跳转到主页页面<br>';
                            echo '<meta http-equiv="refresh" content="6;url=index.php">';
                        }
                    }else{
                        echo '两次验证码不一致<br>';
                        $isInfoCanUse=false;
                    }
                }else{
                    echo "{$email}邮箱不合法<br>";
                    $isInfoCanUse=false;
                }
            }else{
                echo '两次密码不一致';
                $isInfoCanUse=false;
            }
        }else{
            echo '密码不能为空';
            $isInfoCanUse=false;
        }
    }else{
        echo "{$userName}长度不符合规范<br>";
        $isInfoCanUse=false;
    }
}else{
    echo "{$userName}用户名不是以字母开始";
    $isInfoCanUse=false;
}
?>