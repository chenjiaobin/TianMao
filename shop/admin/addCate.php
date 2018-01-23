<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/17
 * Time: 16:55
 */
require_once '../include.php';
checkLogined();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加分类</title>
</head>
<body>
<h3>添加分类</h3>
<form action="doAdminAction.php?act=addCate" method="post">
    <table>
        <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
            <tr>
                <td>分类名称</td>
                <td><input type="text" name="cName" placeholder="请输入分类名称"/></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="添加分类"/></td>
            </tr>
        </table>
    </table>
</form>
</body>
</html>