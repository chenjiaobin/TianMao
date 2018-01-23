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
$userid=$_REQUEST['userid'];
if($act=="logout"){
    logout();
}elseif($act=="addPro"){
    $mes=addPro();
}elseif($act=="editPro"){
    $mes=editPro($id,$userid);
}elseif($act=="delPro"){
    $mes=delPro($id,$userid);
}elseif ($act=="regUser") {
    $mes=regUser();
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
