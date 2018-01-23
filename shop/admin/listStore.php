<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/5/14
 * Time: 19:51
 */
require_once '../include.php';
checkLogined();
$sql1="select id,username,email from store";
$rows=fetchAll($sql1);
$sql = "select * from store";
$totalRows = getResultNum($sql);//得到记录条数
$pageSize=3;
$totalPage = ceil($totalRows / $pageSize);//得到总页码数
$page = $_REQUEST['page'] ? (int)$_REQUEST['page'] : 1;
if ($page < 1 || $page == null || !is_numeric($page)) {
    $page = 1;
}
if ($page >= $totalPage) $page = $totalPage;
$offset = ($page - 1) * $pageSize;
$sql = "select * from store limit {$offset},{$pageSize}";
$rows = fetchAll($sql);

if(!$rows){
    alertMes("对不起，目前没有店家，请先添加店家","addStore.php");
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
            <a href="addStore.php"><input type="button" value="添加店家" class="add"></a>
        </div>

    </div>
    <!--表格-->
    <table class="table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th width="15%">编号</th>
            <th width="20%">店家名称</th>
            <th width="20%">邮箱</th>
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
                <td align="center"><input type="button" value="修改" class="btn" onclick="editStore(<?php echo $row['id']; ?>)"><input type="button" value="删除" class="btn" onclick="delStore(<?php echo $row['id']; ?>)"></td>
            </tr>
            <?php $i++; endforeach;?>
        <?php if($rows>$pageSize):?>
            <tr>
                <td colspan="5"><?php echo showPage($page,$totalPage); ?></td>
            </tr>
        <?php endif;?>

        </tbody>
    </table>
</div>
</body>
<script type="text/javascript">
    function editStore(id) {
        window.location="editStore.php?id="+id;
    }
    function delStore(id) {
        if( window.confirm("您确定要删除吗？删除后不可恢复！！")) {
            window.location = "doAdminAction.php?act=delStore&id=" + id;
        }
    }

</script>
</html>