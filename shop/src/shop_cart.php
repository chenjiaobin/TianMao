<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/20
 * Time: 15:11
 */
require_once '../include.php';
checkLogined2();
$id=$_SESSION['user_id'];

$sql1="select a.id,pName,iPrice,cnum,p_id from shopcart a  where user_id=$id";
$rows=fetchAll($sql1);

/*当购物车为空时,提醒添加商品*/
$result=getResultNum($sql1);
if($result==0){
    alertMes("亲，您的购物车空空如也，赶快去添加商品吧","index2.php");
}
   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>购物车页面</title>
<link type="text/css" href="CSS/css.css" rel="stylesheet" />
 <link rel="stylesheet" href="../admin/styles/backstage.css">
</head>

<body>
<div class="header">
	<div class="header_top">
    	<div class="top comWidth">
        	<div class="top_l"><a href="javascript:void(0)">收藏网淘</a></div>
            <?php 
                if($_SESSION['userName']){
                    echo "<div class='top_r'>欢迎您，{$_SESSION['userName']}|<a href='../admin/doAdminAction.php?act=logout'>退出</a></div>";
                }else{
                    echo '<div class="top_r">欢迎来到网淘网！<a href="../admin/login.php">[登录]</a><a href="../src/register.php">[免费注册]</a></div>';
                }
             ?>
        </div>
    </div><!--header_top结束-->
    <div class="header_mid">
        <div class="banner comWidth">
            <div class="header_logo"><a href='index2.php'><span class="img"></span></a></div>
         </div>
    </div><!--header_mid结束-->
    <div class="pay_content comWidth">
    	<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select" style="background-color: white">
        <span ><a href="../src/index2.php">首页&gt</a></span>
            <span >购物车列表</span>
        </div>

    </div>
    <from action="../admin/doAdminAction.php?act=addcart&id=<?php echo $id;?>" method="post">
    <!--表格-->
    <table class="table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th width="5%">编号</th>
            <th width="15%">商品图片</th>
            <th width="10%">商品名称</th>
            <th width="10%">商品价格</th>
            <th width="5%">购买数量</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php  $i=1; foreach ($rows as $row): ?>
            <tr>
                <!--这里的id和for里面的c1 需要循环出来-->
                <td><input type="" name="" value="<?php echo $i ?>"></td>
                <?php   
                        $img=getProImgById($row['p_id']);
                 ?>
                <td><img src="../store/uploads/<?php echo $img['albumPath']; ?>" alt="网淘网" width='60px' height='32px' style="display:inline-block;"/></td>
                <td><input type="" name="pName" value="<?php echo $row['pName']?>"></td>
                <td>
                    <input type="" name="iPrice" value="<?php
                       echo $row['iPrice'] 
                    ?>">
                </td>
                <td>
                  <div class="add" style="text-align: center;">
                    <span class="reduce" id="reduce" style="display: inline-block;">-</span>
                    <input   id="number" type="text" name="cnum" value="1" style="display: inline-block; width: 20px;margin-left: 10px"/>
                    <span class="plus" id="plus" style="display: inline-block;">+</span>
                     </div>
                     </td>
                <td align="center"><input type="button" value="确认支付" class="btn" onclick="comm()">
                    <input type="button" value="删除" class="btn" onclick="delcart(<?php echo $row['id']; ?>)"></td>
            </tr>
            <?php  $i++; endforeach;?>
        
 
        </tbody>
    </table>
               <span style="display: block; width: 100px; height:50px;background-color: red;text-align: center;
               border-radius: 10px;margin-top: 50px; margin-left:850px "
               ><input type="button" value="清空购物车" name="" style="border-style: none;text-align: center;line-height: 50px; font-size: 16px" onclick="delallcart()"></span>
               </from>
</div>
    </div><!--pay_content结束-->
<div class="hr40"></div>
<div class="footer" style="margin-top: 350px">
<div class="bottom comWidth">
	<p class="bot_nav"><a href="#">网淘简介</a>|<a href="#">网淘招募</a>|<a href="#">网淘公告</a>|<a href="#">招贤纳士</a>| 客服热线400-675-1234</p>
    <p class="bot_copy">Copyright &copy; 2006 - 2014 网淘版权所有   京ICP备09037834号   京ICP证B1034-8373号   某市公安局XX分局备案编号：123456789123</p>
    <p class="bot_img">
        <a href="#"><img src="images/footer.jpg" alt="网淘网" /></a>
         <a href="#"><img src="images/footer.jpg" alt="网淘网" /></a>
    	 <a href="#"><img src="images/footer.jpg" alt="网淘网" /></a>
          <a href="#"><img src="images/footer.jpg" alt="网淘网" /></a>
    </p>
</div>
</div>
<div class="back_to_top"><img src="images/icon/select4.png"></div>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/my_js.js"></script>
<script type="text/javascript">
    function delcart(id) {
        
            window.location = "../admin/doAdminAction.php?act=delcart&id="+id;
 
    }
 function delallcart(){
    window.location = "../admin/doAdminAction.php?act=delallcart";
 }


 //增加和减少商品数量
        
        var reduce=document.getElementById("reduce"),
            plus=document.getElementById("plus"),
            number=document.getElementById("number");
            reduce.onclick=function(){
                if (parseInt(number.value)<=1) {
                    number.value=1;
                }else {
                    number.value=parseInt(number.value)-1;
                }

                
            }
            plus.onclick=function(){
                    number.value=parseInt(number.value)+1;

            }


            function comm()
   {
        var val=document.getElementById("number").value;
        window.location="../src/pay.php?id="+"<?php echo $row['p_id']?>"+"&cnum="+val;
   }
</script>
</body>
</html>
