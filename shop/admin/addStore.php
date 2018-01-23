<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/5/14
 * Time: 19:35
 */
require_once '../include.php';
checkLogined();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加店家</title>
</head>
<body>
<h3>添加店家</h3>
<form action="doAdminAction.php?act=addStore" method="post">
    <table>
        <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
            <tr>
                <td>店家名称</td>
                <td><input type="text" name="username" placeholder="请输入店家名称"/></td>
            </tr>
            <tr>
                <td>店家密码</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td>店家邮箱</td>
                <td><input type="text" name="email" placeholder="请输入店家邮箱"/></td>
            </tr>
            <tr>

                <td colspan="2"><input type="submit" value="添加店家"/></td>
            </tr>
        </table>
    </table>
</form>
</body>
</html>

