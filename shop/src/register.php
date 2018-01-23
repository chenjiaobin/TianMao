<?php

require_once '../include.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册页面</title>
<link type="text/css" href="../src/CSS/css1.css" rel="stylesheet" />
</head>

<body>
<div class="res_top">
    <div class="comWidth">
        <span class="welcome">欢迎注册</span>
    </div>
</div>
<div class="res_info">
    
        <div class="comWidth">
            <form action="../store/doAdminAction1.php?act=regUser" method="post" enctype="multipart/form-data">
                <div class="res_item">
                    <span class="txt"><i>*</i><label for="info_txt">用户名:</label></span><input type="text" placeholder="邮箱/用户名/手机号" name="username" class="info_name" id="info_txt" />
                </div>
                <div class="res_item">
                    <span class="txt"><i>*</i><label for="info_pwd">请设置密码:</label></span><input type="password" name="password" class="info_pwd" id="info_pwd" />
                </div>
                <!-- <div class="res_item">
                    <span class="txt"><i>*</i><label for="info_pwd2">请确认密码:</label></span><input type="password" class="info_pwd2" id="info_pwd2" />
                </div> -->
                <div class="res_item">
                    <span class="txt"><i>*</i><label for="info_email">邮箱:</label></span><input type="email" name="email" placeholder="example@qq.com" class="info_email" id="info_email" />
                </div>
                <div class="res_sex">
                    <i>*</i>性别
                    <input type="radio" name="sex" value="1" checked="checked"/>男
                        <input type="radio" name="sex" value="2" />女
                        <input type="radio" name="sex" value="3" />保密
                </div>
                <div class="res_sex">
                    <i>*</i>头像
                <input type="file" name="myFile" />
                </div>
                <!-- <div class="ckb_note">
                    <input type="checkbox" />我已阅读并同意<a href="#">《用户注册协议》</a>
                </div> -->
                <input type="submit" value="提交"/ class="btn_sure"> 
            </form>
        </div>
   
</div>
</body>
</html>
