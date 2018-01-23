<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/23
 * Time: 18:22
 */
require_once '../include.php';
checkLogined1();
mysql_query("set names utf8");


$rows=getAllCate();
if(!$rows){
    alertMes("没有相应分类，请先添加分类!!", "addCate.php");
}
$id=$_REQUEST['id'];
$proInfo=getProById($id);
//print_r($proInfo);
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
 <link rel="stylesheet" href="../admin/styles/backstage.css">


</head>
<body>
<br/>
<h3>&nbsp;&nbsp;商品详情</h3>
<br/>
<table class="table" cellspacing="0" cellpadding="0">
        <tr>
            <td width="20%" align="right">商品名称</td>
            <td><?php echo $proInfo['pName']?></td>
        </tr>
        <tr>
            <td width="20%" align="right">商品分类</td>
            <td><?php echo $proInfo['cName'];?></td>
        </tr>
        <tr>
            <td width="20%" align="right">商品货号</td>
            <td><?php echo $proInfo['pSn']?></td>
        </tr>
        <tr>
            <td width="20%" align="right">商品数量</td>
            <td><?php echo $proInfo['pNum']?>件</td>
        </tr>
        <tr>
            <td width="20%" align="right">市场价</td>
            <td><?php echo $proInfo['mPrice']?>元</td>
        </tr>
        <tr>
            <td width="20%" align="right">商品价</td>
            <td><?php echo $proInfo['iPrice']?>元</td>
        </tr>
        <tr>
            <td width="20%" align="right">商品图像</td>
            <td>
                <?php
                $proImgs=getAllImgByProId($proInfo['id']);
                foreach($proImgs as $img):
                    ?>
                    <img width="100" height="100" src="uploads/<?php echo $img['albumPath'];?>" alt=""/> &nbsp;&nbsp;
                <?php endforeach;?>
            </td>
        </tr>

    </table>
<span style="display:block;width:60%; padding-left: 20px; ">
	<h4>商品描述:</h4>
    <?php echo $proInfo['pDesc'];?>
</span>

</body>
</html>