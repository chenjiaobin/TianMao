<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/17
 * Time: 16:59
 */


/**
*添加分类
 */
function addCate(){
    $arr=$_POST;
    if(insert("cate",$arr)){
        $mes="添加成功！<br/> <a href='addCate.php'>继续添加</a>|<a href='listCate.php'>查看分类</a>";
    }else{
        $mes="添加失败！<br/> <a href='addCate.php'>重新添加</a>|<a href='listCate.php'>查看分类</a>";
    }
    return $mes;
}
/**
 *根据ID得到指定分类信息
 */
function getCateById($id){
    $sql="select id,cName from cate where id={$id}";
    return fetchOne($sql);
}
/**
 *根据ID修改指定分类信息
 */
function editCate($where){
    $arr=$_POST;
    if(update("cate",$arr,$where)){
        $mes="修改成功！<br/> <a href='listCate.php'>查看分类</a>";
    }else{
        $mes="修改失败！<br/> <a href='listCate.php'>重新修改</a>";
    }
    return $mes;
}
/**
 *根据ID删除指定分类信息
 */
function delCate($id){
    if(delete("cate","id={$id}")){
        $mes = "删除成功！<br/> <a href='listCate.php'>查看分类列表</a>";
    } else {
        $mes = "删除失败！<br/> <a href='listCate.php'>请重新删除</a>";
    }
    return $mes;

}
/**
 *得到所有分类
 */
function getAllCate(){
    $sql="select id,cName from cate";
    $rows=fetchAll($sql);
    return $rows;
}