<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/16
 * Time: 15:21
 */
require_once '../include.php';
$username=$_POST['username'];
$username=addslashes($username);
$password=md5($_POST['password']);
$role=$_POST['role'];

if($username==""||$password==""){
    alertMes("用户名或者密码不能为空，请重新登陆","login.php");
}else {
    if ($role == "admin")
        $sql = "select * from admin where username='$username'";
    else if ($role == "store")
        $sql = "select * from store where username='$username'";
    else
        $sql = "select * from user where username='$username'";
    $row=checkAdmin($sql);
    if ($row["password"] == $password) {
        if ($role == "admin") {
            $_SESSION["adminName"] = $row["username"];
            $_SESSION["role"] = $role;
            alertMes("登陆成功", "index.php");
        } else if ($role == "store") {
            $_SESSION["storeName"] = $row["username"];
            $_SESSION["storeId"]=$row["id"];
            $_SESSION["role"] = $role;
            alertMes("登陆成功", "../store/index1.php");
        } else{
            $_SESSION["userName"] = $row["username"];
             $_SESSION["user_id"]=$row["id"];
            $_SESSION["role"] = $role;
            alertMes("登陆成功", "../src/index2.php");
        }
    } else {
        alertMes("登陆失败，重新登陆", "login.php");
    }
}

