<?php



require_once '../include.php';
header("Content-type:text/html;charset=utf-8");

/**
 * 这是一个查询所有分类信息的查询
 * @return array
 */
function getAllCateInfo(){
    $sql="select * from  cate";
    $result=fetchAll($sql);
    return $result;
}

/**
 * 获得分类下商品的名字
 * @param $id
 * @return array
 */
function getAllProductName($id){
    $sql="select * from product WHERE cId={$id} limit 4";
    $row=fetchAll($sql);
    return $row;
}

/**
 * 获取分类下的商品下的其中一张图片(大图片)
 * @param $id
 * @return array
 */
function getProImgById($id){
    $sql="select albumPath from album where pid={$id} limit 1";
    $row=fetchOne($sql);
    return $row;
}

/**
 * 获取分类下的第四条数据开始的商品
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
function getAllSmallProductName($id){
	$sql="select * from product WHERE cId={$id} limit 4,4";
    $row=fetchAll($sql);
    return $row;
}

/**
 * 获取指定商品id下的所有信息
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
function getAllProductById($id){
	$sql="select * from product where id={$id}";
	$row=fetchOne($sql);
	return $row;
}

/**
 * 获取指定商品id下对用的分类信息
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
function getCateInfoById($id){
    $sql="select * from cate where id={$id}";
    $row=fetchOne($sql);
    return $row;
}

/**
 * 获取指定商品id下的所有图片
 */
function getAllCurrentImg($id){
    $sql="select * from album where pid={$id}";
    $row=fetchAll($sql);
    return $row;
}

/**
 * 通过分类id查询product表里面的所有数据
 */
function getProductByCateId($id){
    $sql="select * from product where cId={$id}";
    $row=fetchAll($sql);
    return $row;
}

function addComment($arr,$id){
    $username=$_SESSION["userName"];
    $com=$arr;
    $time=date('Y-m-d',time());
    $sql="select id from user where username='{$username}'";
    $num=fetchOne($sql);
    $sql2="insert into shopcomment (pid,comment,user_id,createTime) values({$id},'{$com}',{$num['id']},'{$time}')";
    $m=mysql_query($sql2);
    $sql3="select cId from  product where id={$id}";
    $n=fetchOne($sql3);
    if($m){
         $mes="<script>window.location.href='../src/shop_introduce.php?id={$id}&cId={$n['cId']}&user_id={$num['id']}'</script>";
    }else{
            $mes="<script>window.location.href='../src/comment.php?pid={$id}'</script>";
    }
    return $mes;
}

function getAllComment($id){
    $sql="select * from shopcomment where pid={$id}";
    $row=fetchAll($sql);
    return $row;
}

function getUserName($user_id){
    $sql="select username from user where id={$user_id}";
    $row=fetchOne($sql);
    return $row;
}


// 获取用户头像
function getUsePhoto($id){
    $sql="select face from user where id={$id}";
    $row=fetchOne($sql);
    return $row;
}