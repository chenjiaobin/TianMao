<?php 
require_once "../include.php";
$id=$_REQUEST['id'];
/*$user_id=$_REQUEST['user_id'];*/
$cId=$_REQUEST['cId'];
$row=getAllProductById($id);
$comment=getAllComment($id);
$result=getAllCateInfo();
if(!($row&&is_array($row))){
    alertMes("该商品暂时不能查看","index.php");
}else{
    $cateInfo=getCateInfoById($cId);
    $allImg=getAllCurrentImg($id);
    $oneImg=getProImgById($id);
}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>产品介绍</title>
<link type="text/css" href="CSS/css.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
<link rel="stylesheet" href="CSS/smoothproducts.css" />
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
            <div class="header_input">
            	<form action="#" method="post">
                	<input type="text" name="txt"  class="search"/><input type="button" name="btn" class="btn" value="搜索" />
                </form>
            </div>
            <div class="header_shop">
            	<span class="shop_car"><i></i>购物车</span>
                <span class="shop_num">0<i></i></span>
            </div>
         </div>
    </div><!--header_mid结束-->
    <div class="header_bot">
    	<div class="nav comWidth">   
         	<h3>全部商品分类<i></i></h3>
    <ul>
            	<?php 
           foreach($result as $value):
                ?>
                    <li><a href="choose.php?page=1&cId=<?php echo $value['id'] ?>"><?php echo $value['cName']; ?></a></li>
                <?php 
                    endforeach;
                ?>
            </ul>
        </div>
    </div><!--header_bot结束-->
</div><!--header结束-->
<div class="hr10"></div>
<div class="main_comment">
 <div class="comWidth">
	<div class="comment_top">
    	<ul>
        	<li><a href="index2.php" class="comment_active">首页</a>&gt;</li>

            <li><a><?php echo $cateInfo['cName'] ?></a>&gt;</li>

            <li><a><?php echo $row['pSn'] ?></a></li>
        </ul>
    </div><!--comment_top结束-->
    <div class="comment_mid">
    	<div class="com_left">
            <div class="page">
                <div class="sp-wrap">
                <?php foreach ($allImg as $img): ?>
                    <a href="../store/uploads/<?php echo $img['albumPath']; ?>"><img src="../store/uploads/<?php echo $img['albumPath']; ?>" alt=""></a>
                     <?php endforeach;  ?>
                </div>
            </div>

           
        </div><!--com_left结束-->
        
        <div class="com_right">
        <form  name="form" method="post">
         <p><span>
                <input  style="width:60%; font:24px '微软雅黑';padding-top: 10px;margin-left: -18px; "
                type="text" readonly="readonly" name="pName"  value="<?php echo $row['pName']; ?>" / ></span>
           </p>
            
            <p>编号：
                <input type="text" readonly="readonly" name="p_id"  value="<?php echo $row['id']; ?>"/>
            </span></p>
            <p>优惠价<span><i>￥</i>
                <input style="color: red;font-size: 16px" type="text" name="iPrice"  readonly="readonly" value="<?php echo $row['iPrice'] ?>"/>
            </span></p>

            <p class="discount">优惠<i>满换购</i>购ipad加价优惠够配件或USB充电插座</p>
            <div class="goods">
            	<div class="goods_address">
                    <span class="goods_info">送到</span>
                    <span class="goods_input">北京市 海淀区 五环内<i></i></span>
                    
                    <?php 
                        if($row['pNum']){
                            echo "<span>有货，可当日出货</span>";
                        }else{
                            echo "<span style='color:red;'>暂时缺货</span>";
                        }
                     ?>                    
                </div>
            	<div class="goods_count">
                <span class="goods_info goods_num">数量</span>
                    <div class="add">
                    <span class="reduce" id="reduce">-</span>
                    <input   id="number" type="text" name="cnum" value="1"
                     style="height:32px; padding-left: 20px; float:left; width:15px;  cursor: pointer; display:inline-block; "/>
                    <span class="plus" id="plus">+</span>
                </div> 
                <span class="add_limit">限购<i>9</i>件</span>
                </div>
            </div>
            <!-- <p class="goods_txt">已选择<span><span id="select_color">白色</span><span id="select_spc">WIFI 16G</span></span></p> -->
            <div class="join_buy">
              <div class="join">
                  <span><i></i> <input type="submit" value="加入购物车" onclick="cart()" class="btn"
                  style="background-color: #f68500;font:20px/48px '微软雅黑'; color:#FFF;text-decoration:none;outline: none;"></span>
              </div>
               <div class="buy">
                  <span><i></i> <input type="submit" value="立即购买" onclick="purchase()" class="btn" style="background-color: #f68500;font:20px/48px '微软雅黑'; color:#FFF;text-decoration:none;outline: none;"></span>
              </div> 
            </div>

           <p class="goods_notice">注意：此商品可提供普通发票，不提供增值税发票。</p>
          </form> 
        </div><!--com_right结束-->
        </div>


<div class="comment_bot">
<div class="comment_bot_leftArea">
        <div class="comment_bot_l">
            <h3>同价位</h3>
            <div class="img_p">
                <a href="#"><img src="images/img_p.jpg" alt="木课网" /></a>
                <p class="list_item"><a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话</a></p>
                <p class="shop_money">￥3588.00</p>
            </div>
            <div class="img_p">
                <a href="#"><img src="images/img_p.jpg" alt="木课网" /></a>
                <p class="list_item"><a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话</a></p>
                <p class="shop_money">￥3588.00</p>
            </div>
            <div class="img_p">
                <a href="#"><img src="images/img_p.jpg" alt="木课网" /></a>
                <p class="list_item"><a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话</a></p>
                <p class="shop_money">￥3588.00</p>
            </div>
        </div><!--comment_bot_l结束-->
        <div class="comment_bot_l">
            <h3 class="finally">看了最终买</h3>
            <div class="img_p">
                <a href="#"><img src="images/img_p.jpg" alt="木课网" /></a>
                <p class="list_item"><a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话</a></p>
                <p class="shop_money">￥3588.00</p>
            </div>
            <div class="img_p">
                <a href="#"><img src="images/img_p.jpg" alt="木课网" /></a>
                <p class="list_item"><a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话</a></p>
                <p class="shop_money">￥3588.00</p>
            </div>
            <div class="img_p">
                <a href="#"><img src="images/img_p.jpg" alt="木课网" /></a>
                <p class="list_item"><a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话</a></p>
                <p class="shop_money">￥3588.00</p>
            </div>
        </div><!--comment_bot_l结束-->
    </div>
            <div class="comment_bot_r">
            <div class="product">
                <span class="shop_introduce"><i></i><!--<a href="" class="introduce_active">-->产品介绍<!--</a>--></span>
                <span class="shop_application "><i></i><!--<a href="">-->商品评价<span style="color: red; font-weight: bold;">(<?php echo count($comment) ?>)</span><!--</a>--></span>
            </div>
            <div class="recommend_img">
              <div class="introduce_img">
                <a href="#"><img src="images/introduce_img.jpg" alt="网淘网" /></a>
              </div>
              <div class="recommend">
                <div class="recommend_top">
                    <span class="strong_recommend">强烈推荐</span>
                    <span class="compare">货比三家，还选</span>
                </div>
                <p class="recommend_txt">
                <?php echo $row['pDesc'] ?>
                </p>
                <div class="recommend_top">
                    <span class="strong_recommend">精美图片</span>
                </div>
                <p class="recommend_txt">
                <a href="#"><img src="../store/uploads/<?php echo $oneImg['albumPath']; ?>" alt="网淘网" width="500" height="400" style='display:block; margin:10px auto 0 auto;' /></a>
                </p>
              </div>
            </div>
            <div class="all_consultation">
             <div class="consultation_top">
                <span class="consultation_top_l">全部咨询(705)</span>
                <span class="consultation_top_r"><a href="#">发表咨询</a></span>
             </div>
             <p class="prompt">提示:因厂家更改产品包装、产地或者更换随机附件等没有任何提前通知，且每位咨询者购买情况、提问时间等不同，为此以下回复信息仅供参考！若由此给您带来不便请多多谅解，谢谢！
             </p>
                    <?php 
                        if($comment&&is_array($comment)):
                            foreach($comment as $comment):
                                $username=getUserName($comment['user_id']);
                     ?>
                     <div class="detail_item">
                    <span class="item_user user_earth">
                    <?php 
                        $row=getUsePhoto($comment['user_id']);
                     ?>
                      <a href="#"><img src="../uploads/<?php echo $row['face'] ?>" alt="头像" width='35' height='35' /></a>
                      <p class="user_num"><?php echo $username['username'] ?></p>
                      <p class="user_member">铜色会员</p>
                    </span>
                    <span class="item_word">
                        <P class="item_star">[商品咨询]</P>
                        <P class="word_txt"><?php echo $comment['comment'] ?></P>
                        <P class="replay">网淘网回复：<span>您好，现在已经是活动价格了</span><i></i></P>
                    </span>
                    <span class="item_time">
                        <?php echo $comment['createTime'] ?>
                    </span>
                </div>
                   <?php 
                        endforeach;
                        endif;
                     ?>
            </div><!--bottom_bar结束-->
            </div>
        </div><!--comment_bot_r结束-->
</div>

</div><!--main_comment结束-->
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



<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/smoothproducts.min.js"></script>
<script type="text/javascript">
window.onload=function(){
    var shop_introduce=document.getElementsByClassName('shop_introduce'),
        shop_application=document.getElementsByClassName('shop_application'),
        recommend_img=document.getElementsByClassName('recommend_img');
        shop_introduce[0].style.backgroundColor="#0479CA";
        shop_introduce[0].style.fontSize='14px';
        shop_introduce[0].style.fontWeight='bold';
        shop_introduce[0].style.color='#FFF';
                
        shop_introduce[0].onclick=function(){
            shop_introduce[0].style.backgroundColor="#0479CA";
            shop_introduce[0].style.fontSize='14px';
            shop_introduce[0].style.fontWeight='bold';
            shop_introduce[0].style.color='#FFF';
            
            shop_application[0].style.backgroundColor="#EFEFEF";
            shop_application[0].style.fontSize='14px';
            shop_application[0].style.fontWeight='normal';
            shop_application[0].style.color='#000';
            
            recommend_img[0].style.display='block';
            }
            
        shop_application[0].onclick=function(){
            shop_application[0].style.backgroundColor="#0479CA";
            shop_application[0].style.fontSize='14px';
            shop_application[0].style.fontWeight='bold';
            shop_application[0].style.color='#FFF';
            
            shop_introduce[0].style.backgroundColor="#EFEFEF";
            shop_introduce[0].style.fontSize='14px';
            shop_introduce[0].style.fontWeight='normal';
            shop_introduce[0].style.color='#000';
            
            recommend_img[0].style.display='none';
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

        //选择颜色
         
        var color=document.getElementsByClassName("color"),
            select_color=document.getElementById("select_color"),
            select_spc=document.getElementById("select_spc");
            for (var i = 0; i < color.length; i++) {
                color[i].onclick=function(){
                    select_color.innerHTML=this.innerHTML;
                    for (var j = 0; j < color.length; j++) {
                        color[j].style.borderColor="#CCC";
                    }
                    this.style.borderColor="#317EE7";
                }
            }
        //选择规格
        var specification=document.getElementsByClassName("specification");

        for (var i = 0; i < specification.length; i++) {
            specification[i].onclick=function(){
                select_spc.innerHTML=this.innerHTML;
                for (var z = 0; z < specification.length; z++) {
                    specification[z].style.borderColor="#CCC";
                }
                this.style.borderColor="#317EE7";
            }
        }
    }


    
</script>

<script type="text/javascript">


    
   function cart()
   {
         document.form.action="../admin/doAdminAction.php?act=addcart";
   }
   function purchase()
   {
        var val=document.getElementById("number").value;
        document.form.action="../src/pay.php?id="+"<?php echo $id?>"+"&cnum="+val;
   } 
</script>
<script type="text/javascript">
/* wait for images to load */
$(window).load(function() {
    $('.sp-wrap').smoothproducts();
});
</script>
</body>
</html>
