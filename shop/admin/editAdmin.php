<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/17
 * Time: 14:07
 */
require_once '../include.php';
checkLogined();
$id=$_REQUEST['id'];
$sql="select id,username,password,email from admin where id='{$id}'";
$row=fetchOne($sql);
//print_r($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h3>编辑管理员</h3>
<form action="doAdminAction.php?act=editAdmin&id=<?php echo $id;?>" method="post">
    <table>
        <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
            <tr>
                <td>管理员名称</td>
                <td><input type="text" name="username" value="<?php echo $row['username'];?>"/></td>
            </tr>
            <tr>
                <td>管理员密码</td>
                <td><input type="password" name="password"/></td>
            </tr>
            <tr>
                <td>管理员邮箱</td>
                <td><input type="text" name="email" value="<?php echo $row['email'];?>"/></td>
            </tr>
            <tr>

                <td colspan="2"><input type="submit" value="确定编辑"/></td>
            </tr>
        </table>
    </table>
</form>
</body>
</html>

