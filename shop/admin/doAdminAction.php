<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/16
 * Time: 17:34
 */
require_once '../include.php';

mysql_query("set names utf8");
$act=$_REQUEST['act'];
$id=$_REQUEST['id'];
$pid=$_REQUEST['pid'];
if($act=="logout"){
    logout();
}elseif($act=="addAdmin"){
    $mes=addAdmin();
}elseif($act=="editAdmin"){
    $mes=editAdmin($id);
}elseif($act=="delAdmin"){
    $mes=delAdmin($id);
}elseif($act=="addCate"){
    $mes=addCate();
}elseif($act=="editCate"){
    $where="id={$id}";
    $mes=editCate($where);
}elseif($act=="delCate"){
    $mes=delCate($id);
}elseif($act=="addUser"){
    $mes=addUser();
}elseif($act=="delUser"){
    $mes=delUser($id);
}elseif($act=="editUser"){
    $mes=editUser($id);
}elseif($act=="editPro"){
    $mes=editPro1($id);
}elseif($act=="delPro"){
    $mes=delPro1($id);
}elseif($act=="addStore"){
    $mes=addStore();
}elseif($act=="editStore"){
    $mes=editStore($id);
}elseif($act=="delStore"){
    $mes=delStore($id);
}elseif($act=="addcart"){
  $mes=addcart();
}elseif($act=="delcart"){
  $mes=delcart($id);}
  elseif($act=="delallcart"){
    $mes=delallcart();
}elseif($act=="addorder"){
  $mes=addorder($pid);
}elseif($act=="upstatus"){
    $mes=upstatus($_POST['hid']);
}
elseif($act="comment"){
    // print_r($_POST['comment']);
    $com=$_POST['comment'];
    $mes=addComment($com,$id);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

    if($mes){
        echo $mes;
    }
?>
</body>
</html>
