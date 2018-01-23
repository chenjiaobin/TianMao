<?php 
header("Content-type:text/html;charset=utf-8");
require_once "../include.php";
checkLogined2();
$pid=$_REQUEST['pid'];
$sql="select *  from product where id={$pid}";
$row=fetchOne($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>订单页面</title>
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
            <div class="header_logo"><span class="img"></span></div>
         </div>
    </div><!--header_mid结束-->
  
<div class="comWidth">
    <p class="shop_comment">商品评价</p>
    <form action="../admin/doAdminAction.php?act=comment&id=<?php echo $pid ?>" method="post">
    <table class="comment-info">
        <tr style="height: 50px;">
            <td>商品名称</td>
            <td style="font-size: 20px;"><?php echo $row['pName'] ?></td>
        </tr>
        <tr>
            <td>商品图片</td>
            <td>
            <?php 
                $arr=getProImgById($pid);
             ?>
             <img src="../store/uploads/<?php echo $arr['albumPath'] ?>" alt="" width='200' height='150' />
             </td>
        </tr>
        <tr style="height: 50px;">
            <td>商品价格</td>
            <td style="font-size: 20px; color: red" >￥<?php echo $row['iPrice'] ?></td>
        </tr>
        <tr>
            <td>
                商品评价
            </td>
            <td>
               <textarea name="comment" id="" cols="30" rows="10"></textarea> 
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="评论" />
            </td>
        </tr>
    </table>
    </form>
</div>
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