<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/19
 * Time: 12:49
 */
require_once '../include.php';
/**
 *添加商品
 */

function addPro(){
    $arr=$_POST;
    $arr['user_id']=$_SESSION['storeId'];
    $userid=$_SESSION['storeId'];
    $arr['pubTime']=time();
    $path="./uploads";
    $uploadFiles=uploadFile($path);
    $res=insert("product",$arr);
    $pid=getInsertId();
    if($res&&$pid){
        foreach($uploadFiles as $uploadFile){
            $arr1['pid']=$pid;
            $arr1['albumPath']=$uploadFile['name'];
            addAlbum($arr1);
        }
        $mes="<p>添加成功!</p><a href='../store/addPro.php' target='mainFrame'>继续添加</a>|<a href='../store/listPro.php?id= $userid' target='mainFrame'>查看商品列表</a>";
    }else{

        $mes="<p>添加失败!</p><a href='addPro.php' target='mainFrame'>重新添加</a>";

    }
    return $mes;
}
/**
 *得到商品的所有信息
 */
function getAllProByAdmin(){
    $sql="select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName from product as p join cate c on p.cId=c.Id";
    $rows=fetchAll($sql);
    return $rows;
}
/**
 *通过商品ID获得商品图片
 */
function getAllImgByProId($id){
    $sql="select albumPath from album where pid={$id}";
    $rows=fetchAll($sql);
    return $rows;
}
/**
 *通过商品id得到商品信息
 */
function getProById($id){
    $sql="select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,p.user_id,c.cName,p.cId from product as p join cate c on p.cId=c.Id where p.id={$id}";
    $row=fetchOne($sql);
    return $row;
}
/**
 *编辑商品
 */
function editPro($id,$userid){
    $arr=$_POST;
    $path="./uploads";
    $uploadFiles=uploadFile($path);
    $where="id={$id}";
    $res=update("product",$arr,$where);
    //print_r($res);exit;
    $pid=$id;
    if($res&&$pid){
        if($uploadFiles&&is_array($uploadFiles)) {
            foreach ($uploadFiles as $uploadFile) {
                $arr1['pid'] = $pid;
                $arr1['albumPath'] = $uploadFile['name'];
                addAlbum($arr1);
            }
        }
        $mes="<p>编辑成功!</p><a href='../store/listPro.php?id=$userid' target='mainFrame'>查看商品列表</a>";
    }else{

        $mes="<p>编辑失败!</p><a href='../store/listPro.php?id=$userid' target='mainFrame'>重新编辑</a>";

    }
    return $mes;
}

function editPro1($id){
    $arr=$_POST;
    $path="./uploads";
    $uploadFiles=uploadFile($path);
    $where="id={$id}";
    $res=update("product",$arr,$where);
    //print_r($res);exit;
    $pid=$id;
    if($res&&$pid){
        if($uploadFiles&&is_array($uploadFiles)) {
            foreach ($uploadFiles as $uploadFile) {
                $arr1['pid'] = $pid;
                $arr1['albumPath'] = $uploadFile['name'];
                addAlbum($arr1);
            }
        }
        $mes="<p>编辑成功!</p><a href='../admin/listPro.php' target='mainFrame'>查看商品列表</a>";
    }else{

        $mes="<p>编辑失败!</p><a href='../admin/listPro.php' target='mainFrame'>重新编辑</a>";

    }
    return $mes;
}

/**
 *删除商品
 */
function delPro($id,$userid){
    $where="id=$id";
    $res=delete("product",$where);
    $proImgs=getAllImgByProId($id);
    if($proImgs&&is_array($proImgs)){
        foreach ($proImgs as $proImg){
            if(file_exists("uploads/".$proImg['albumPath'])){
                unlink("uploads/".$proImg['albumPath']);
            }
        }
    }
    $where1="pid={$id}";
    $res1=delete("album",$where1);
    if($res&&$res1){
        $mes="<p>删除成功!</p><a href='../store/listPro.php?id=$userid' target='mainFrame'>查看商品列表</a>";
    }else{

        $mes="<p>删除失败!</p><a href='../store/listPro.php?id=$userid' target='mainFrame'>重新删除</a>";

    }
    return $mes;
}
function delPro1($id){
    $where="id=$id";
    $res=delete("product",$where);
    $proImgs=getAllImgByProId($id);
    if($proImgs&&is_array($proImgs)){
        foreach ($proImgs as $proImg){
            if(file_exists("uploads/".$proImg['albumPath'])){
                unlink("uploads/".$proImg['albumPath']);
            }
        }
    }
    $where1="pid={$id}";
    $res1=delete("album",$where1);
    if($res&&$res1){
        $mes="<p>删除成功!</p><a href='../admin/listPro.php' target='mainFrame'>查看商品列表</a>";
    }else{

        $mes="<p>删除失败!</p><a href='../admin/listPro.php' target='mainFrame'>重新删除</a>";

    }
    return $mes;
}

