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
$sql="select a.id,a.pName,a.iPrice,a.cnum,a.dsum,a.status,a.pid from orderbiao a
 where a.user_id=$id" ;
 $arr=fetchAll($sql);


/*当订单为空时,提醒添加商品*/

$result=getResultNum($sql);
if($result==0){
    alertMes("亲，您还没购买东西哦，赶快去添加商品吧","index2.php");
}
 
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
            <div class="header_logo"><a href="index2.php"><span class="img"></span></a></div>
         </div>
    </div><!--header_mid结束-->
  
    <div class="pay_content comWidth">
    	
    	
    	<div class="pay_user">
        	<div class="pay_tit"><span>订单内容</span>
                 <span style="float: right;margin-right: 10px;"><a href="../src/index2.php" style="text-decoration: none;">返回首页</a></span>
            </div>
            <div>
            	<div class="cart_head">
                	<div class="cart_item t_name cart_l">宝贝</div>
                   
                    <div class="cart_item t_price">单价</div>
                    <div class="cart_item t_back">数量</div>
                    <div class="cart_item t_sum">实付</div>
                    <div class="cart_item t_count">商家操作</div>
                </div> <?php foreach ($arr as $arr): ?>
            	<div class="cart_head cart_all" >
                
                	<div class="cart_item t_name" style="margin-top: 30px;">
                     <?php   
                        $img=getProImgById($arr['pid']);
                 ?>
                    	<a href="#" class="cart_img" ><img style="width: 50px; height:50px" src="../store/uploads/<?php echo $img['albumPath']; ?>" alt="网淘网" /  ></a>
                        <div class="cart_shopinfo">
                        	<p class="cart_link"><a href="#"><input type="" name="pName" value="<?php echo $arr['pName'] ?>"  readonly="readonly" style="margin-top: 20px;"></a></p>
                           
                        </div>
                    </div>
                     <div class="cart_item t_back">
                        <p style="margin-top: 20px;display: inline-block;"><input type="" name="iPrice" value="￥<?php echo $arr['iPrice'] ?>" readonly="readonly" style="padding-top: 30px;"></p>
                    </div>
                     <div class="cart_item t_sum">
                        <p class="cart_link" style="margin-top: 50px"><input type="" name="cnum" value="<?php echo $arr['cnum'] ?>"  readonly="readonly"  ></p>
                       
                    </div>
                    <div class="cart_item t_price">
                    	<p style="margin-top: 50px"> <input type="" name="dsum" value="￥<?php echo $arr['dsum'] ?>"  readonly="readonly" ></p>
                    </div>
                   
                   
                    <div class="cart_item t_count">
                    	<p style="margin-top: 48px">
                        
                        <?php 
                        $hid = $arr['id'];
                       echo "<form action='../admin/doAdminAction.php?act=upstatus' method='post'>";
                        if ($arr['status'] == '0') {
                            echo "<input type='submit'  value='确认收货'  
                                    style='background-color: white;'>";
                            echo  "<input type='hidden' name='hid' value='$hid'/>";
                        }
                        else if ($arr['status'] == '1') {
                            echo "<a href='comment.php?pid={$arr['pid']}' style='text-decoration:none;'>追加评论</a>";
                          
                        }
                        echo "</form>";
                        ?> 
                        </p>

                    </div> 
                </div>
             <?php  endforeach;?>
            </div>
        </div>
    	
    </div><!--pay_content结束-->
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
<script type="text/javascript">
    function tusss($did) {  
                window.location = "../admin/doAdminAction.php?act=upstatus&id="+$did;

            
    }

</script>
</body>
</html>
