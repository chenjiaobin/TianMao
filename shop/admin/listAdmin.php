<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/17
 * Time: 13:37
 */
require_once '../include.php';
checkLogined();
$sql = "select * from admin";
$totalRows = getResultNum($sql);//得到记录条数
$pageSize=3;
$totalPage = ceil($totalRows / $pageSize);//得到总页码数
$page = $_REQUEST['page'] ? (int)$_REQUEST['page'] : 1;
if ($page < 1 || $page == null || !is_numeric($page)) {
    $page = 1;
}
if ($page >= $totalPage) $page = $totalPage;
$offset = ($page - 1) * $pageSize;
$sql = "select * from admin limit {$offset},{$pageSize}";
$rows = fetchAll($sql);

if(!$rows){
    alertMes("对不起，目前没有管理员，请先添加管理员","addAdmin.php");
    exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="styles/backstage.css">
</head>

<body>
<div class="details">
                    <div class="details_operation clearfix">
                        <div class="bui_select">
                            <a href="addAdmin.php"><input type="button" value="添加管理员" class="add"></a>
                        </div>

                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="15%">编号</th>
                                <th width="25%">管理员名称</th>
                                <th width="30%">管理员邮箱</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;foreach ($rows as $row): ?>
                                <tr>
                                    <!--这里的id和for里面的c1 需要循环出来-->
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $row['username']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td align="center"><input type="button" value="修改" class="btn" onclick="editAdmin(<?php echo $row['id']; ?>)"><input type="button" value="删除" class="btn" onclick="delAdmin(<?php echo $row['id']; ?>)"></td>
                                </tr>
                        <?php $i++; endforeach;?>
                        <?php if($rows>$pageSize):?>
                                    <tr>
                                        <td colspan="4"><?php echo showPage($page,$totalPage); ?></td>
                                    </tr>
                        <?php endif;?>

</tbody>
</table>
</div>
</body>
<script type="text/javascript">
    function editAdmin(id) {
        window.location="editAdmin.php?id="+id;
    }
    function delAdmin(id) {
        if( window.confirm("您确定要删除吗？删除后不可恢复！！")) {
            window.location = "doAdminAction.php?act=delAdmin&id=" + id;
        }
    }

</script>
</html>