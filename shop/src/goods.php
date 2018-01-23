<?php 
//这是一个ajax调用的获取数据的后台
require_once '../include.php';
$cId=$_REQUEST['cId'];
$state=$_REQUEST['state'];

$pageSize=9;
$sql="select * from product where cId={$cId}";
$totalRows=getResultNum($sql);
$totalPage=ceil($totalRows/$pageSize);
$page = $_REQUEST['page'] ? (int)$_REQUEST['page'] : 1;
if ($page < 1 || $page == null || !is_numeric($page)) {
    $page = 1;
}
if ($page >= $totalPage) $page = $totalPage;
$offset = ($page - 1) * $pageSize;

//0的时候表示显示所有商品，包括有货和无货
if($state=='0'){
$sql2="select * from product where cId={$cId} limit {$offset},{$pageSize}";
}else if($state=='1'){
$sql2="select * from product where cId={$cId} and pNum>0 limit {$offset},{$pageSize}";
}else{
$sql2="select * from product where cId={$cId} limit {$offset},{$pageSize}";
}

$row=fetchAll($sql2);
foreach ($row as $key => $value) {
	$a=getProImgById($value['id']);
	$row[$key]['albumPath']=$a['albumPath'];
	$row[$key]['currentPage']=$page;
	$row[$key]['totalPage']=$totalPage;
}
//将数据转换成json格式传递给ajax
echo (json_encode($row));

 ?>