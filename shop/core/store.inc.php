<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/5/14
 * Time: 19:40
 */
/**
 *添加店家操作
 */
function addStore(){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    if(insert("store",$arr)){
        $mes="添加成功！<br/> <a href='addStore.php'>继续添加</a>|<a href='listStore.php'>查看店家列表</a>";
    }else{
        $mes="添加失败！<br/> <a href='addStore.php'>重新添加</a>";
    }
    return $mes;
}
/**
 *编辑店家
 */
function editStore($id){
    $arr = $_POST;
    $arr['password'] = md5($_POST['password']);
    if (update("store",$arr,"id={$id}")){
        $mes = "编辑成功！<br/> <a href='listStore.php'>查看店家列表</a>";
    } else {
        $mes = "编辑失败！<br/> <a href='listStore.php'>请重新编辑</a>";
    }
    return $mes;
}
/**
 *删除店家
 */
function delStore($id){
    if(delete("store","id={$id}")){
        $mes = "删除成功！<br/> <a href='listStore.php'>查看管理员列表</a>";
    } else {
        $mes = "删除失败！<br/> <a href='listStore.php'>请重新删除</a>";
    }
    return $mes;
}