<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/17
 * Time: 17:51
 */
require_once '../include.php';
checkLogined();
mysql_query("set names utf8");
$id=$_REQUEST['id'];
$row=getCateById($id);
//print_r($row);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h3>修改分类</h3>
<form action="doAdminAction.php?act=editCate&id=<?php echo $id;?>" method="post">
    <table>
        <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
            <tr>
                <td>分类名称</td>
                <td><input type="text" name="cName" value="<?php echo $row['cName'];?>"/></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="修改分类"/></td>
            </tr>
        </table>
    </table>
</form>
</body>
</html>