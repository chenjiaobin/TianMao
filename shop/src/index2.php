<?php
header("Content-type:text/html;charset=utf-8");
require_once '../include.php';
$userid=$_SESSION["user_id"] ;
//mysql_query("set names utf8");
$result=getAllCateInfo();
$sql2="select * from shopcart where user_id={$userid}";
if($userid){
    $row=getResultNum($sql2);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<script type="text/javascript" src="js/myfocus-2.0.1.min.js"></script>
<script type="text/javascript" src="js/setHomeSetFav.js"></script>
<script type="text/javascript" src="js/page_js.js"></script>
<link type="text/css" href="CSS/css.css" rel="stylesheet" />
<script type="text/javascript">
   //设置
myFocus.set({
    id:'myFocus',//ID
    pattern:'mF_kdui'//风格
});
</script>
</head>
<body>
<div class="header">
	<div class="header_top">
    	<div class="top comWidth">
        	<div class="top_l"><a href="javascript:void(0)">收藏网淘</a></div>

            <?php 
                if($_SESSION['userName']){
                    echo "<div class='top_r'>欢迎您，{$_SESSION['userName']}|<a href='../src/orderbiao.php'>我的订单</a>|<a href='../admin/doAdminAction.php?act=logout'>退出</a></div>";
                }else{
                    echo '<div class="top_r">欢迎来到网淘网！<a href="../admin/login.php">[登录]</a><a href="../src/register.php">[免费注册]</a></div>';
                }
             ?>
           <!--   -->
        </div>
    </div><!--header_top结束-->
    <div class="header_mid">
        <div class="banner comWidth">
            <div class="header_logo"><a href="index2.php"><span class="img"></span></a></div>
            <div class="header_input">
            	<form action="#" method="post" name="form1">
                	<input type="text" name="txt"  class="search"/><input type="button" name="btn" class="btn" value="搜索" onclick="search()" />
                </form>
            </div>
            <div class="header_shop">
            	<span class="shop_car"><i></i><a href="shop_cart.php" style="color: white; text-decoration: none; vertical-align: middle;">购物车</a></span>
                <span class="shop_num"><?php echo $row?$row:0; ?><i></i></span>
            </div>
         </div>
    </div><!--header_mid结束-->
    <div class="header_bot">
    	<div class="nav comWidth">
        	<h3>全部商品分类<i></i></h3>
            <div class="nav_list">
                <?php $i=1;foreach ($result as $item): ?>
            	<dl>
                	<dt><a href="choose.php?page=1&cId=<?php echo $item['id'] ?>" class="list_active"><?php echo $item['cName']; ?></a></dt>
                    <dd>
                        <?php
                                $row=getAllProductName($item['id']);
                                if($row&&is_array($row)){
                                    foreach ($row as $rows){
                                        echo  "<a href='shop_introduce.php?id={$item['id']}&cId={$rows['cId']}'>{$rows['pName']}</a>";
                                    }
                                } 
                        ?> 
                    </dd>
                </dl>
                <?php $i++; endforeach; ?>
            </div>
            <div class="item_list">
            	<div class="item_nav">
                	<dl>
                    	<dt>电脑整机</dt>
                        <dd><a href="#">笔记本</a><a href="#" class="select_active">超级本</a><a href="#">平板电脑</a><a href="#">上网本</a><a href="#">单反</a><a href="#">电视机</a></dd>
                    </dl>
                </div>
            	<div class="item_nav">
                	<dl>
                    	<dt>电脑整机</dt>
                        <dd><a href="#">笔记本</a><a href="#" class="select_active">超级本</a><a href="#">平板电脑</a><a href="#">上网本</a><a href="#">单反</a><a href="#">电视机</a></dd>
                    </dl>
                </div>
            	<div class="item_nav">
                	<dl>
                    	<dt>电脑整机</dt>
                        <dd><a href="#">笔记本</a><a href="#" class="select_active">超级本</a><a href="#">平板电脑</a><a href="#">上网本</a><a href="#">单反</a><a href="#">电视机</a><a href="#">平板电脑</a><a href="#">上网本</a><a href="#">单反</a><a href="#">电视机</a></dd>
                    </dl>
                </div>
            	<div class="item_nav">
                	<dl>
                    	<dt>电脑整机</dt>
                        <dd><a href="#">笔记本</a><a href="#" class="select_active">超级本</a><a href="#">平板电脑</a><a href="#">上网本</a><a href="#">单反</a><a href="#">电视机</a></dd>
                    </dl>
                </div>
            	<div class="item_nav">
                	<dl>
                    	<dt>电脑整机</dt>
                        <dd><a href="#">笔记本</a><a href="#" class="select_active">超级本</a><a href="#">平板电脑</a><a href="#">上网本</a><a href="#">单反</a><a href="#">电视机</a><a href="#">笔记本</a><a href="#" class="select_active">超级本</a><a href="#">平板电脑</a><a href="#">上网本</a><a href="#">单反</a><a href="#">电视机</a></dd>
                    </dl>
                </div>
            	<div class="item_nav">
                	<dl>
                    	<dt>电脑整机</dt>
                        <dd><a href="#">笔记本</a><a href="#" class="select_active">超级本</a><a href="#">平板电脑</a><a href="#">上网本</a><a href="#">单反</a><a href="#">电视机</a></dd>
                    </dl>
                </div>
                <div class="select_btn">
                	<span>电脑整机频道<i></i></span>
                    <span>手机特卖频道<i></i></span>
                </div>
            </div>
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
<div class="com" ><!--焦点图盒子-->
<div class="banner_img" id="myFocus">
  <div class="loading"><img src="images/loading.gif" alt="请稍候..." /></div><!--载入画面(可删除)-->
  <div class="pic"><!--图片列表-->
  	<ul>
        <li><a href="#1"><img src="images/banner.jpg" thumb="" alt="图片1来源于网络，版权属于作者" text="图片1更详细的描述文字" /></a></li>
        <li><a href="#2"><img src="images/banner.jpg" thumb="" alt="版权属于作者，图片2来源于网络" text="图片2更详细的描述文字" /></a></li>
        <li><a href="#3"><img src="images/banner.jpg" thumb="" alt="图片3来源于网络，版权属于作者" text="图片3更详细的描述文字" /></a></li>
        <li><a href="#4"><img src="images/banner.jpg" thumb="" alt="版权属于作者，图片4来源于网络" text="图片4更详细的描述文字" /></a></li>
        <li><a href="#5"><img src="images/banner.jpg" thumb="" alt="图片5来源于网络，版权属于作者" text="图片5更详细的描述文字" /></a></li>
  	</ul>
  </div>
  </div>
</div>
<div class="main">
	<div class="content comWidth">
        <?php foreach ($result as $cate): ?>
    	<div class="con_tit">
                <h3><i></i><?php echo $cate['cName']; ?></h3>
                <!-- <div class="more"><span><a href="#">更多&gt;&gt;</a></span></div> -->
        </div><!--con_tit结束-->

        <div class="con_txt" style="overflow: hidden">
        <?php 
            $a=getProductByCateId($cate['id']);
            $randInfo=$a[array_rand($a)];
            $randomImg=getAllCurrentImg($randInfo['id']);
         ?>
        	<div class="con_l">
                <a href="choose.php?cId=<?php echo $cate['id'] ?>">
                    <img src="../store/uploads/<?php echo $randomImg[array_rand($randomImg)]['albumPath'] ?>" alt="网淘网"  width='188' height='400'/>
                </a>
            </div>
            <div class="con_r">
                <?php
                    $pros=getAllProductName($cate['id']);
                    if($pros&&is_array($pros)):
                        foreach ($pros as $pro):
                            $proImg=getProImgById($pro['id']);
                ?>
            	<div class="con_r_top">
                <div class="con_item">
                	<div class="con_img">
                    	<a href="shop_introduce.php?id=<?php echo $pro['id']; ?>&cId=<?php echo $pro['cId'] ?>&user_id=<?php echo $userid; ?>"><img src="../store/uploads/<?php echo $proImg['albumPath']; ?>" alt="网淘网" width="133px" height="151px"  style="position: relative; left: 50%; margin-left:-66px; display:inline-block;"/></a>
                    </div>
                     <h3><a href="shop_introduce.php?id=<?php echo $pro['id']; ?>&cId=<?php echo $pro['cId'] ?>"><?php echo $pro['pName'] ?></a></h3>
                    <p>￥<?php echo $pro['iPrice']; ?></p>
                 </div>
                </div>
                <?php
                      endforeach;
                      endif;
                 ?>
                 <?php 
                    $product=getAllSmallProductName($cate['id']);
                    // var_dump($product);
                    if($product!=null):
                        foreach ($product as $value):
                            $proSmallImg=getProImgById($value['id']);
                 ?>
                <div class="con_r_bot">
                	<div class="con_item2">
                        <span class="con_img2"><a href="shop_introduce.php?id=<?php echo $value['id']; ?>&cId=<?php echo $pro['cId'] ?>"><img src="../store/uploads/<?php echo $proSmallImg['albumPath']; ?>" alt="网淘网" width='80px' height='62px' style="display:inline-block;"/></a></span>
                        <h3><a href="shop_introduce.php?id=<?php echo $value['id']; ?>&cId=<?php echo $pro['cId'] ?>"><?php echo $value['pName'] ?></a></h3>
                        <p><i>￥</i>149.00</p>
                    </div>
                </div>
               <?php 
                 endforeach; 
                 endif;
               ?>
            </div><!--con_r结束-->
        </div><!--con_txt结束-->
        <?php endforeach;?>
    </div><!--content结束-->
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
<!-- <script type="text/javascript">
     $(document).ready(function(){
        var back_to_top=$(".back_to_top");
        back_to_top.click(function(){
            $('html,body').animate({scrollTop:0},800);
        });
        $(window).on('scroll',function(){
            if($(window).scrollTop()>$(window).height()){
                back_to_top.fadeIn();
            }else{
                back_to_top.fadeOut();
            }
        });
        $(window).trigger('scroll');
    });   
</script> -->
</body>
</html>
