<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/16
 * Time: 15:47
 */
/**
 *检查数据库中是否有这条数据
*/
function checkAdmin($sql){
    return fetchOne($sql);
}
/**
 *检查是否有管理员登陆
 */
function checkLogined(){

    if($_SESSION['adminName']==""||$_SESSION['adminName']==null){
       alertMes("请先登录！","login.php");
   }
}
function checkLogined1(){

    if($_SESSION['storeName']==""){
        alertMes("请先登录！","../admin/login.php");
    }
}
function checkLogined2(){

    if($_SESSION['userName']==""){
        alertMes("请先登录！","../admin/login.php");
    }
}
/**
 *注销操作
 */
function logout(){
    $_SESSION=array();//将session赋值为空数组，相当于清除session
//    同时也要清清除掉cookie的值
    // if(isset($_COOKIE[session_name()])){
    //     setcookie(session_name(),"" ,time()-1);
    // }
    session_destroy();
    alertMes("已安全退出，请重新登陆","../admin/login.php");
    //header("location:login.php");
}

/**
 *添加管理员操作
 */
function addAdmin(){
    $arr=$_POST;
    $sql="select * from admin where username='{$arr["username"]}'";
    $a=getResultNum($sql);
    if($a)
   {     
        $mes="该管理员已存在，<br/> <a href='addAdmin.php'>重新添加</a>" ;
    }else
    {
        $arr['password']=md5($_POST['password']);
        if(insert("admin",$arr)){
            $mes="添加成功！<br/> <a href='addAdmin.php'>继续添加</a>|<a href='listAdmin.php'>查看管理员</a>";
        }else{
            $mes="添加失败！<br/> <a href='addAdmin.php'>重新添加</a>";
        } 
    }
  

   
    return $mes;
}
/**
 *得到所有的管理员
 */
function getAllAdmin(){

    $sql="select id,username,email from admin";
    $rows=fetchAll($sql);
    return $rows;
}
/**
 *编辑管理员
 */
function editAdmin($id){
    $arr = $_POST;
    $arr['password'] = md5($_POST['password']);
    if (update("admin",$arr,"id={$id}")){
        $mes = "编辑成功！<br/> <a href='listAdmin.php'>查看管理员列表</a>";
    } else {
        $mes = "编辑失败！<br/> <a href='listAdmin.php'>请重新编辑</a>";
    }
    return $mes;
}
/**
 *删除管理员
 */
function delAdmin($id){
    if(delete("admin","id={$id}")){
        $mes = "删除成功！<br/> <a href='listAdmin.php'>查看管理员列表</a>";
    } else {
        $mes = "删除失败！<br/> <a href='listAdmin.php'>请重新删除</a>";
    }
    return $mes;
}
/**
 *添加用户
 */
function addUser(){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    $arr['regTime']=time();
    $uploadFile=uploadFile("../uploads");
    if($uploadFile&&is_array($uploadFile)){
        $arr['face']=$uploadFile[0]['name'];
    }else{
        return "添加失败<a href='addUser.php'>重新添加</a>";
    }
    if(insert("user", $arr)){
        $mes="添加成功!<br/><a href='addUser.php'>继续添加</a>|<a href='listUser.php'>查看列表</a>";
    }else{
        $filename="../uploads/".$uploadFile[0]['name'];
        if(file_exists($filename)){
            unlink($filename);
        }
        $mes="添加失败!<br/><a href='arrUser.php'>重新添加</a>|<a href='listUser.php'>查看列表</a>";
    }
    return $mes;
}






/**
 *删除用户
 */
function delUser($id){
    $sql="select face from user where id=".$id;
    $row=fetchOne($sql);
    $face=$row['face'];
    if(file_exists("../uploads/".$face)){
        unlink("../uploads/".$face);
    }
    if(delete("user","id={$id}")){
        $mes = "删除成功！<br/> <a href='listUser.php'>查看用户列表</a>";
    } else {
        $mes = "删除失败！<br/> <a href='listUser.php'>请重新删除</a>";
    }
    return $mes;
}
/**
 *编辑用户
 */
function editUser($id){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    if(update("user", $arr,"id={$id}")){
        $mes="编辑成功!<br/><a href='listUser.php'>查看用户列表</a>";
    }else{
        $mes="编辑失败!<br/><a href='listUser.php'>请重新修改</a>";
    }
    return $mes;
}