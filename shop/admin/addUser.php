<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/20
 * Time: 14:58
 */
require_once '../include.php';
checkLogined();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h3>添加用户</h3>
<form action="doAdminAction.php?act=addUser" method="post" enctype="multipart/form-data">
    <table>
        <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
            <tr>
                <td>用户名</td>
                <td><input type="text" name="username" placeholder="请输入用户名"/></td>
            </tr>
            <tr>
                <td>密码</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td>邮箱</td>
                <td><input type="text" name="email" placeholder="请输入用户邮箱"/></td>
            </tr>
            <tr>
                <td>性别</td>
                <td><input type="radio" name="sex" value="1" checked="checked"/>男
                    <input type="radio" name="sex" value="2" />女
                    <input type="radio" name="sex" value="3" />保密
                </td>
            </tr>
            <tr>
                <td>头像</td>
                <td><input type="file" name="myFile" /></td>
            </tr>

            <tr>

                <td colspan="2"><input type="submit" value="添加用户"/></td>
            </tr>
        </table>
    </table>
</form>
</body>
</html>