<?php 
include ('connect.php');
session_start();
$Uname = $_SESSION['userName'];
$sqlshop = "SELECT * FROM business_goods WHERE Uname = '$Uname' ORDER BY Gid DESC ";
$mysql_result_shop = $db -> query($sqlshop);
if ($mysql_result_shop == false){
    echo "sql语句错误";
    //exit;
}

$rows = [];
while($row = $mysql_result_shop->fetch_array(MYSQLI_ASSOC)){
    $rows[] = $row;
    if ($row['Uname']==$Uname) 
    {
        $Gname = $row['Gname'];
        $Gdes = $row['Gdescription'];
        $Gprice = $row['Gprice'];
        $Gclass = $row['Gclass'];
        $Gphone = $row['Gphone'];
        $Gqq = $row['Gqq'];
        $Gwechat = $row['Gwechat'];
        $Gimage = $row['Gimage'];
}
}

$sqlaccount = "SELECT * FROM account WHERE userName = '$Uname' ORDER BY userid DESC ";
$mysql_result_account = $db -> query($sqlaccount);
if ($mysql_result_account == false){
    echo "sql语句错误";
    //exit;
}
$accounts = [];
while($account = $mysql_result_account->fetch_array(MYSQLI_ASSOC)){
    $accounts[] = $account;
    if($account['userName']==$Uname)
    {
        $userid = $account['userid'];
        $userName = $account['userName'];
        $email = $account['email'];
    }

}




?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>青工二手交易平台</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="shortcut icon" href="images/logo1.png" type="image/x-icon"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_1128159_5o2i8ipicq.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/personal.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){
    $("#one").click(function(){
        $(".personal0_3 ul li").css("background","#d58512");
        $(".personal1_4").css("display","block");
        $(".personal2_4").css("display","none");
        $(".personal3_4").css("display","none");
        $(".personal4_4").css("display","none");
        $(".personal5_4").css("display","none");
        $(".personal6_4").css("display","none");
        $(this).css("background","#1b6d85");
    });

    $("#two").click(function(){
        $(".personal0_3 ul li").css("background","#d58512");
        $(".personal1_4").css("display","none");
        $(".personal2_4").css("display","block");
        $(".personal3_4").css("display","none");
        $(".personal4_4").css("display","none");
        $(".personal5_4").css("display","none");
        $(".personal6_4").css("display","none");
        $(this).css("background","#1b6d85");
    });

    $("#three").click(function(){
        $(".personal0_3 ul li").css("background","#d58512");
        $(".personal1_4").css("display","none");
        $(".personal2_4").css("display","none");
        $(".personal3_4").css("display","block");
        $(".personal4_4").css("display","none");
        $(".personal5_4").css("display","none");
        $(".personal6_4").css("display","none");
        $(this).css("background","#1b6d85");
    });

    $("#four").click(function(){
        $(".personal0_3 ul li").css("background","#d58512");
        $(".personal1_4").css("display","none");
        $(".personal2_4").css("display","none");
        $(".personal3_4").css("display","none");
        $(".personal4_4").css("display","block");
        $(".personal5_4").css("display","none");
        $(".personal6_4").css("display","none");
        $(this).css("background","#1b6d85");
    });

    $("#five").click(function(){
        $(".personal0_3 ul li").css("background","#d58512");
        $(".personal1_4").css("display","none");
        $(".personal2_4").css("display","none");
        $(".personal3_4").css("display","none");
        $(".personal4_4").css("display","none");
        $(".personal5_4").css("display","block");
        $(".personal6_4").css("display","none");
        $(this).css("background","#1b6d85");
    });

    $("#six").click(function(){
        $(".personal0_3 ul li").css("background","#d58512");
        $(".personal1_4").css("display","none");
        $(".personal2_4").css("display","none");
        $(".personal3_4").css("display","none");
        $(".personal4_4").css("display","none");
        $(".personal5_4").css("display","none");
        $(".personal6_4").css("display","block");
        $(this).css("background","#1b6d85");
    });
});

</script>

<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/jqthumb.js"></script>
</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://www.oucqdc.edu.cn/a/index.html">
            </a>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php" class="logo visible-lg-block">青工校园</a></li>
                <li><a href="index.php">首页</a></li>
                <li><a href="indexsecond.php">二手</a></li>
                <li><a href="indexbuy.php">求购</a></li>
                <li><a href="">联系我们</a></li>
                <li><div class="navbar-collapse collapse">
                    <form class="navbar-form" action="search.php" method="post" name="myform">
                        <div class="form-group input-group">
                            <input type="text" class="form-control" id="key-movie" placeholder="输入商品名称" name="keywords">
                            <span class="input-group-btn">
                                <a class="btn btn-default" onclick="document.myform.submit()">
                                    <span class="glyphicon glyphicon-search"></span>搜索
                                </a>
                            </span>
                        </div>
                    </form>
                    </div>
                </li>
            </ul>

            <?php
                ini_set("session.cookie_lifetime","30");
                //session_start();
                if (isset($_SESSION['userName'])) {
                    $userName = $_SESSION['userName'];
                    echo "<ul class='nav navbar-nav'><li><a href='personal.php'><img src='images/5.jpg' width='25px'></a></li>
                                <li class='L2'><a href='logout.php'>退出</a></li></ul>";
                }
                else{
                    echo "<ul class='nav navbar-nav'>
                    <li><a href='login.php'>登录</a></li>
                                <li><a href='register.php'>注册</a></li></ul>";
                }
            ?>

        </div>
        </div>
    </div>

<div class="container main">
    <div class="row bigbox">
        <div class="list-group slide-bar col-sm-1 col-md-1 visible-lg-block">
            <a href="index.php" class="list-group-item"><span class="iconfont iconsuoyou"></span>所有分类</a>
            <a href="indexclass.php?ID=<?php echo 1?>" class="list-group-item"><span class="iconfont iconzihangche"></span>代步工具</a>
            <a href="indexclass.php?ID=<?php echo 2?>" class="list-group-item"><span class="iconfont iconshouji"></span>手机</a>
            <a href="indexclass.php?ID=<?php echo 3?>" class="list-group-item"><span class="iconfont icondiannao"></span>电脑</a>
            <a href="indexclass.php?ID=<?php echo 4?>" class="list-group-item"><span class="iconfont iconcamera"></span>数码</a>
            <a href="indexclass.php?ID=<?php echo 5?>" class="list-group-item"><span class="iconfont icondianqi"></span>电器</a>
            <a href="indexclass.php?ID=<?php echo 6?>" class="list-group-item"><span class="iconfont iconyifu"></span>衣鞋伞帽</a>
            <a href="indexclass.php?ID=<?php echo 7?>" class="list-group-item"><span class="iconfont iconshu"></span>书籍教材</a>
            <a href="indexclass.php?ID=<?php echo 8?>" class="list-group-item"><span class="iconfont iconlanqiu"></span>体育健身</a>
            <a href="indexclass.php?ID=<?php echo 9?>" class="list-group-item"><span class="iconfont iconleqi"></span>乐器</a>
            <a href="indexclass.php?ID=<?php echo 10?>" class="list-group-item"><span class="iconfont iconqita"></span>其他</a><br>
        </div>
        <div class="personal0">
            <div class="personal0_1">
                <ul>
                    <li><img src="images/5.jpg"></li>
                    <li class="personal0_2"><?php echo $_SESSION['userName']; ?></li>
                    <!-- <li>共有0件商品，已卖出0件商品</li> -->
                    <li>学校： 青岛工学院</li>
                    <li>签名： ta很懒，还没有留下签名哦~</li>
                    <li>认证： 未认证</li>
                </ul>
            </div>
            <div class="personal0_3">
                <ul>
                    <li id="one">个人资料</a></li>
                    <li id="two">我发布的商品</li>
                    <li id="three">我发布的求购</li>
                    <!-- <li id="four">我的收藏</li> -->
                    <!-- <li id="five">消息中心</li>
                    <li id="six">认证信息</li> -->
                </ul>
            </div>
            <br><br>
            <div class="personal1_4" style="display: block;">
                <ul>
                    <li>账户信息</li>
                    <li>————————————————————————————————————</li>
                    <li>账号：<?php echo $userName;?></li>
                    <li>基本信息</li>
                    <li>—————————————————————————————————
                    <!-- <li>签名： ta很懒，还没有留下签名哦~</li> -->
                    <li>手机：<?php echo $Gphone;?></li>
                    <li>微信：<?php echo $Gwechat;?></li>
                    <li>QQ：<?php echo $Gqq;?></li>
                </ul>
            </div>
            <?php foreach ($rows as $row)?>          
            <div class="personal2_4" style="display:none;">
                <ul>
                    <li>我发布的商品列表</li>
                    <li>——————————————————————————————————————————————————————————————————</li>
                    <li>
                        <table align="center">
                            <?php 
                        if($row['Gsecond']=='二手'){
                        	$Gid = $row['Gid'];
                            echo "
                            <tr>
                                <td>商品名称</td><td>价格</td><td>售卖/求购</td><td>类别</td><td>操作</td>
                            </tr>
                            <tr>
                                <td>{$row['Gname']}</td><td>{$row['Gprice']}</td><td>求购</td><td>{$row['Gclass']}</td><td><form action='update.php?id=$Gid' method='post'><input type='submit' value='删除'></form><input type='submit' value='编辑'></td>
                            </tr>";
                        }else{
                        	echo '您还没有发布售卖的商品哦！';
                    	}
                    	?>

                        </table>
                    </li>
                </ul>
            </div>
            <div class="personal3_4" style="display:none">
                <ul>
                    <li>我发布的求购列表</li>
                    <li>——————————————————————————————————————————————————————————————————</li>
                    <li>
                        <table align="center">
                            

                            <?php 
                        if($row['Gsecond']=='求购'){
                        	$Gid = $row['Gid'];
                            echo "
                            <tr>
                                <td>商品名称</td><td>价格</td><td>售卖/求购</td><td>类别</td><td>操作</td>
                            </tr>
                            <tr>
                                <td>{$row['Gname']}</td><td>{$row['Gprice']}</td><td>求购</td><td>{$row['Gclass']}</td><td><form action='update.php?id=$Gid' method='post'><input type='submit' value='删除'></form><input type='submit' value='编辑'></td>
                            </tr>";
                        }else{
                        	echo '您还没有发布求购哦！';
                    	}
                    	?>
                        </table>
                    </li>
                </ul>
            </div>
            <!-- <div class="personal4_4" display="none" style="display:none">
                <ul>
                    <li>您暂时还没有收藏商品呃！你可以 <input type="botton" value="发布商品"> <input type="botton" value="浏览商城商品"></li>
                </ul>
            </div> -->
            <!-- <div class="personal5_4" style="display:none">
                <ul>
                    <li>未读信息列表</li>
                    <li>————————————————————————————————————————————————————————<input type="botton" value="全部消息"> </li>
                </ul>
            </div>
            <div class="personal6_4" style="display:none">
                <ul>
                    <li><img src="images/5.jpg"></li>
                    <li class="personal4_1">认证</li>
                    <li>认证方式：学生证，身份证，一卡通等</li>
                    <li><input type="button" value="立即认证"></li>
                </ul>
            </div> -->
        </div>

        <div class="list-group slide-bar col-sm-1 col-md-1 list-group-right">
            <a href='up.php' class="list-group-item-right">发布二手</a>
            <a href="send.php" class="list-group-item-right">发布求购</a> 
        </div>
    </div>
</div>

<div class="common-footer">
    <div class="footerNav clearfix">
        <ul class="fn">
            <li><a href="/contact">关于我们</a></li>
            <li><a href="/joinus">加入我们</a></li>
            <li><a href="/sale">校内二手</a></li>
            <li><a href="/buy">校内求购</a></li>
            <li><a href="/login">我要登录</a></li>
            <li><a href="/register">我要注册</a></li>
        </ul>
    </div>
    <div class="footerMain">
            <div class="fContact">
            <h3 class="fct">联系我们 / <span>contact us</span></h3>
            <p>Q群：123456789</p>
            <p>Q Q：123456789</p>
            <p>地址：山东省青岛市胶州市青岛工学院</p>
        </div>
        <div class="fCall">
            <p class="callN">TEL:18888888888</p>
            <span class="kfT">24小时在线客服</span>
            <a class="fxl" href="http://weibo.com/u/276233227/" target="_blank">新浪微博</a>
            <a class="fqq" href="tencent://message/?uin=307242951&amp;Site=QQ交谈&amp;Menu=yes" target="_blank">客服QQ</a>
            <a class="fwx tips">微信二维码</a>
        </div>
    </div>
    <p class="copyright">版权所有 © All Rights Reserved，yourpassword
    </p>
</div>
 



</body>
</html>            