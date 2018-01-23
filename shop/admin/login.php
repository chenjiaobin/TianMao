<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/16
 * Time: 15:16
 */
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>登陆页面</title>
    <link rel="stylesheet" href="styles/style1.css">
</head>
<body>
    <section class="container" >
        <div class="login" style="margin-top:150px;">
            <h1>用户登录</h1>
            <form method="post" action="doLogin.php">
                <p><input type="text"  name="username" placeholder="请输入用户名"></p>
                <p><input type="password"  name="password"></p>
                <br/>
                <select name="role">
                    <option value=user>普通用户
                    <option value=store>店家管理
                    <option value=admin>超级管理员
                </select>
                <br/>
                <p class="submit"><input type="submit" name="commit" value="登录"></p>
            </form>
        </div>
        <a href="../src/register.php"><img src="../admin/images/icon/red_link.jpg" style="margin-left: 380px;"></a>


    </section>
<div class="footer" style="margin-top:100px;">
    <p><a href="#">商城简介</a><i>|</i><a href="#">商城公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="../src/register.php">联系我们</a><i>|</i>客服热线：1234567890</p>
    <p>Copyright &copy; 2014 - 2017 版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>

</div>
</body>
</html>




<!--<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>登陆</title>
    <link type="text/css" rel="stylesheet" href="styles/reset.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">

</head>

<body>

<div class="headerBar">
            <h3 class="welcome_title">管理员登陆</h3>
</div>

    <div class="loginBox">
        <div class="login_cont">
            <form action="doLogin.php" method="post">
                <ul class="login">
                    <li class="l_tit">管理员帐号</li>
                    <li class="mb_10"><input type="text"  name="username" placeholder="请输入管理员帐号"class="login_input user_icon"></li>
                    <li class="l_tit">密码</li>
                    <li class="mb_10"><input type="password"  name="password" class="login_input password_icon"></li>
                    <li> <select name="role">
                            <option value=user>普通用户
                            <option value=store>店家管理
                            <option value=admin>超级管理员
                        </select>
                    </li>
                    <br/>
                    <li><input type="submit" value="" class="login_btn"></li>
                </ul>
            </form>
        </div>
    </div>
</div>
<div class="hr_25"></div>
<div class="footer">
    <p><a href="#">商城简介</a><i>|</i><a href="#">商城公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：1234567890</p>
    <p>Copyright &copy; 2006 - 2014 版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>

</div>
</body>
</html>-->
