<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/23
 * Time: 16:43
 */
require_once '../include.php';
checkLogined1();
mysql_query("set names utf8");
$id=$_REQUEST['id'];
//$user_id=$_REQUEST['user_id'];
//排序判断
$order=$_REQUEST['order']?$_REQUEST['order']:null;
$orderBy=$order?"order by p.".$order:null;
//搜索判断
$keywords=$_REQUEST['keywords']?$_REQUEST['keywords']:null;
$where=$keywords?" where p.pName like '%{$keywords}%'":"where user_id={$id}";
//得到数据库中所有的商品
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
$sql="select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,p.user_id,c.cName from product as p join cate c on p.cId=c.Id {$where}";
$totalRows=getResultNum($sql);
$pageSize=8;
$totalPage=ceil($totalRows/$pageSize);
if($page<1||$page==null||!is_numeric($page))$page=1;
if($page>=$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,p.user_id,c.cName from product as p join cate c on p.cId=c.Id {$where} {$orderBy} limit {$offset},{$pageSize}";
$rows=fetchAll($sql);
//print_r($rows);
if(!$rows){
    alertMes("sorry,没有符合条件的商品,请添加!","../store/addPro.php");
    exit;
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../admin/styles/backstage.css">

</head>

<body>

<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <a href="../store/addPro.php"><input type="button" value="添加商品" class="add"></a>
        </div>
        <div class="fr">
            
            
            <div class="text">
                <span>搜索</span>
                <input type="text" value="" class="search"  id="search" onkeypress="search()" >
            </div>
        </div>
    </div>
    <!--表格-->
    <table class="table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th width="10%">编号</th>
            <th width="15%">商品名称</th>
            <th width="10%">商品分类</th>
            <th width="10%">是否上架</th>
            <th width="15%">上架时间</th>
            <th width="10%">价格</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($rows as $row):?>
            <tr>
                <!--这里的id和for里面的c1 需要循环出来-->
                <td><?php echo $i;?></label></td>
                <td><?php echo $row['pName']; ?></td>
                <td><?php echo $row['cName'];?></td>
                <td>
                    <?php echo $row['isShow']==1?"上架":"下架";?>
                </td>
                <td><?php echo date("Y-m-d H:i:s",$row['pubTime']);?></td>
                <td><?php echo $row['iPrice'];?>元</td>

                <td align="center">
                    <input type="button" value="详情" class="btn" onclick="showPro(<?php echo $row['id'];?>)"><input type="button" value="修改" class="btn" onclick="editPro(<?php echo $row['id'];?>)"><input type="button" value="删除" class="btn"onclick="delPro(<?php echo $row['id'];?>,<?php echo $row['user_id'];?>)">

                </td>
            </tr>
        <?php $i++; endforeach;?>
        <?php if($totalRows>$pageSize):?>
            <tr>
                <td colspan="7"><?php echo showPage1($page, $totalPage,"keywords={$keywords}&order={$order}");?></td>
            </tr>
        <?php endif;?>
        </tbody>
    </table>
</div>
<script type="text/javascript">


    function editPro(id){
        window.location='editPro.php?id='+id;
    }
    function showPro(id){
        window.location='showPro.php?id='+id;
    }
    function delPro(id,userid){
        if(window.confirm("您确认要删除嘛？添加一次不易，且删且珍惜!")){
            window.location="doAdminAction1.php?act=delPro&id="+id+"&userid="+userid;
        }
    }
    function search(){
        if(event.keyCode==13){
            var val=document.getElementById("search").value;
            window.location="listPro.php?keywords="+val+"&id="+<?php echo $_SESSION["storeId"] ?>;
        }
    }
    function change(val){
        window.location="listPro.php?order="+val;
    }
</script>
</body>
</html>