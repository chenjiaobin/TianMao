<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/20
 * Time: 15:11
 */
require_once '../include.php';
checkLogined2();
//$id=$_SESSION['user_id'];
$id=$_REQUEST['id'];

$num=$_REQUEST['cnum'];

$row=getAllProductById($id);
//$arr=$_POST;
//$pid=$arr['p_id'];
$sql1="select albumPath from album where pid={$id}";
$rows=fetchOne($sql1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>订单表</title>
<link type="text/css" href="CSS/css.css" rel="stylesheet" />
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
            <div class="header_logo"><a href="index2.php"><span class="img"></span></a></div>
         </div>
    </div><!--header_mid结束-->
    <form action="../admin/doAdminAction.php?act=addorder&pid=<?php echo $id;?>" method="post">
    <div class="pay_content comWidth">
    	<div class="pay_user">
        	<div class="pay_tit">
                <span>收货信息</span>
                <span style="float: right;margin-right: 10px;"><a href="../src/index2.php" style="text-decoration: none;">返回首页</a></span>
            </div>
            <div class="pay_txt">
                <div class="user user_top">
                    
                </div> 
                <div class="user">
                    <span class="user_info"><i>*</i><label for="detail_add">详细地址：</label></span>
                    <input type="text" placeholder="最多输入56个汉字"  class="detail_add" id="detail_add" name="addr"/>
                </div>   
                <div class="user">
                    <span class="user_info"><i>*</i><label for="receipt">收 货 人：</label></span>
                    <input type="text" placeholder="最多10个汉字"  class="receipt" id="receipt" name="shname"/>
                </div>   
                <div class="user">
                    <span class="user_info"><i>*</i><label for="user_phone">手&nbsp;&nbsp;机：</label></span>
                    <input type="text" placeholder="如15814631049" class="user_phone" id="user_phone"
                     name="phone" />
                   
                </div>
               </br>
            </div>
        </div>
    
    	
    	<div class="pay_user">
        	<div class="pay_tit">送货清单
              
            </div>
            <div>
            	<div class="cart_head">
                	<div class="cart_item t_name cart_l">商品名称</div>
                    <div class="cart_item t_price">单价</div>
                    <div class="cart_item t_back">返现</div>
                    <div class="cart_item t_sum">数量</div>
                    <div class="cart_item t_count">小计</div>
                </div>
            	<div class="cart_head cart_all" >
                	<div class="cart_item t_name" style="margin-top: 40px">
                    	<a href="#" class="cart_img" ><img style="width: 50px; height:50px" src="../store/uploads/<?php echo $rows['albumPath']; ?>" alt="网淘网" /></a>
                        <div class="cart_shopinfo">
                        	<p class="cart_link"><a href="#"><input type="" name="pName" value="<?php echo $row['pName'] ?>" readonly="readonly" style="margin-top: 20px;font-family: '宋体';
    color: #656565;"></a></p>
                           
                        </div>
                    </div>
                    <div class="cart_item t_price">
                    	<p style="margin-top: 48px;width: 200px;
    " > ￥<input style=" font-family: '宋体';color: #656565;" type="" name="iPrice" value="<?php echo $row['iPrice'] ?>" readonly="readonly" ></p>
                    </div>
                    <div class="cart_item t_back">
                    	<p style="margin-top: 47px;">￥0.00</p>
                    </div>
                    <div class="cart_item t_sum">
                    	<p class="cart_link" style="margin-top: 55px;"><input type="" name="cnum" value="<?php echo $num ?>" readonly="readonly"></p>
                       
                    </div>
                    <div class="cart_item t_count">
                    	<p style="margin-top: 48px;">￥<?php echo $row['iPrice']*$num ?></p>
                    </div>
                </div>
             
            </div>
        </div>
    	<div class="pay_user">
        	<div class="pay_tit">订单结算</div>
            <div class="pay_txt">
            	<p class="settlement" style="margin-right: -130px;">总计<i>￥<input style="font-size: 22px;color: #EE0000;margin-r " type="" name="dsum" value="<?php echo $row['iPrice']*$num ?>.00" ></i></p>
                <p class="submit_order" style="margin-top: -10px;" ><input style="background-color: #e50007;font-size:16px;font-family: '宋体';color: white;margin-top: 5px;letter-spacing: 5px;outline:none;    " type="submit" name="" value="提交订单"
                     readonly="readonly"></p>
            </div>
        </div>
    </div><!--pay_content结束--></form>
<div class="hr40"></div>
<div class="footer">
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
</body>
</html>
