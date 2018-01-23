<?php 
require_once '../include.php';
/**
 *注册用户
 */
function regUser(){
	$arr=$_POST;
	$arr['password']=md5($_POST['password']);
	$arr['regTime']=time();
	$uploadFile=uploadFile("../uploads");
	if($uploadFile&&is_array($uploadFile)){
		$arr['face']=$uploadFile[0]['name'];
	}else{
		return "注册失败";
	}
	if(insert("user", $arr)){
		$mes="注册成功!<br/>3秒钟后跳转到登陆页面!<meta http-equiv='refresh' content='3;url=../admin/login.php'/>";
	}else{
		//$filename="uploads/".$uploadFile[0]['name'];
    $filename="../uploads/".$uploadFile[0]['name'];
		if(file_exists($filename)){
			unlink($filename);
		}
		$mes="注册失败!<br/><a href='../src/regUser.php'>重新注册</a>|<a href='index2.php'>查看首页</a>";
	}
	return $mes;
}


function userOut(){
	$_SESSION=array();
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),"",time()-1);
	}

	session_destroy();
	header("location:index.php");
}
/*添加到购物车操作*/
function addcart(){
	checkLogined2();
	$id=$_SESSION['user_id'];
	/*$id=$_REQUEST['id'];*/
    $arr=$_POST;
    $arr['user_id']=$id;
    if(insert("shopcart",$arr)){
        $mes="<script>window.location.href='../src/shop_cart.php'</script>";
    }else{
        $mes="添加失败！<br/> <a href='addAdmin.php'>重新添加</a>";
    }

    return $mes;}
   

   /* 删除购物车商品*/

   function delcart($id)
   {
   	 if(delete("shopcart","id={$id}")){
        $mes = "删除成功！<br/> <a href='../src/shop_cart.php'>返回我的购物车</a>";
    } else {
        $mes = "删除失败！<br/> <a href='../src/shop_cart.php'>请重新删除</a>";
    }
    return $mes;
   }

/* 全部清空购物车商品*/
   function delallcart()
   {
     $id=$_SESSION['user_id'];
     if(delete("shopcart","user_id={$id}")){
        $mes = "删除成功！<br/> <a href='../src/shop_cart.php'>返回主页</a>";
    } else {
        $mes = "删除失败！<br/> <a href='../src/shop_cart.php'>请重新删除</a>";
    }
    return $mes;
   }


   /*  添加订单*/


function addorder($pid){
	checkLogined2();
	$id=$_SESSION['user_id'];
	/*$id=$_REQUEST['id'];*/
	
    $arr=$_POST;
    $arr['user_id']=$id;
    $arr['pid']=$pid; 
    if(insert("orderbiao",$arr)){
        $mes="<script>window.location.href='../src/orderbiao.php'</script>";
    }else{
        $mes="添加失败！<br/> <a href='addAdmin.php'>重新添加</a>";
    }

    return $mes;}

  function  upstatus($hid){

    $sql="update orderbiao set status='1' where id=$hid";

     $result=mysql_query($sql);
   
    if($result){
        return alertMes("已确认收货","../src/orderbiao.php");
    }else{
        return alertMes("收货失败，请重新确认","../src/orderbiao.php");
    }

    }
   



