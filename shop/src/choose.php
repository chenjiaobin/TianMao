<?php 
header("Content-type:text/html;charset=utf-8");
require_once "../include.php";
$result=getAllCateInfo();
$cId=$_REQUEST['cId'];
$pageSize=9;
$sql="select * from product where cId={$cId}";
$totalRows=getResultNum($sql);
$totalPage=ceil($totalRows/$pageSize);
$page = $_REQUEST['page'] ? (int)$_REQUEST['page'] : 1;
if ($page < 1 || $page == null || !is_numeric($page)) {
    $page = 1;
}
if ($page >= $totalPage) $page = $totalPage;
$offset = ($page - 1) * $pageSize;
$sql2="select * from product where cId={$cId} limit {$offset},{$pageSize}";
$row=fetchAll($sql2);
// if(!($row&&is_array($row))){
//     alertMes("该分类下还没有商品","index.php");
// }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>筛选页面</title>
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
<div class="hr17"></div>
<div class="main_con">
<div class="comWidth">
	<div class="left_area">
    	<h3>产品分类</h3>
        <dl>
        	<dt>手机通讯</dt>
            <dd><a href="#">手机</a></dd>
            <dd><a href="#">对讲机</a></dd>
        </dl>
        <dl>
        	<dt>手机配件</dt>
            <dd><a href="#">蓝牙</a></dd>
            <dd><a href="#">耳机</a></dd>
            <dd><a href="#">蓝牙</a></dd>
            <dd><a href="#">充电宝</a></dd>
            <dd><a href="#">耳机</a></dd>
        </dl>
        <dl>
        	<dt>手机通讯</dt>
            <dd><a href="#">手机</a></dd>
            <dd><a href="#">对讲机</a></dd>
        </dl>
        <dl>
        	<dt>手机通讯</dt>
            <dd><a href="#">手机</a></dd>
            <dd><a href="#">对讲机</a></dd>
        </dl>
        <dl>
        	<dt>手机通讯</dt>
            <dd><a href="#">手机</a></dd>
            <dd><a href="#">对讲机</a></dd>
        </dl>
        <div class="left_area_bot">
            <div class="left_area_bot_item">
                <a href="#"><img src="images/left_area_bot.jpg" alt="网淘网"/></a>
                <p class="left_area_txt"><a href="#">全网底价 Apple苹果 Ipad mini</a><i>￥2088.00</i></p>
            </div>
            <div class="left_area_bot_item">
                <a href="#"><img src="images/left_area_bot.jpg" alt="网淘网"/></a>
                <p class="left_area_txt"><a href="#">全网底价 Apple苹果 Ipad mini</a><i>￥2088.00</i></p>
            </div>
            <div class="left_area_bot_item">
                <a href="#"><img src="images/left_area_bot.jpg" alt="网淘网"/></a>
                <p class="left_area_txt"><a href="#">全网底价 Apple苹果 Ipad mini</a><i>￥2088.00</i></p>
            </div>
            <div class="left_area_bot_item">
                <a href="#"><img src="images/left_area_bot.jpg" alt="网淘网"/></a>
                <p class="left_area_txt"><a href="#">全网底价 Apple苹果 Ipad mini</a><i>￥2088.00</i></p>
            </div>
        </div>
    </div><!--left_area结束-->
    <div class="right_area">
    	<div class="right_area_top">
        	<div class="select">
            	<dl class="phone">
                	<dt>手机</dt>
                    <dd>裸机（773）</dd>
                    <dd>合约机（192）</dd>
                </dl>
            </div>
            <div class="select">
            	<dl>
                <dt>品牌</dt>
                <dd class="limit">不限</dd>
                <dd>
                	<ul>
                    	<li><a href="#">SamSung/三星</a></li>
                        <li><a href="#">Apple/苹果</a></li>
                        <li><a href="#">HuaWei/华为</a></li>
                    	<li><a href="#">SamSung/三星</a></li>
                        <li><a href="#">Apple/苹果</a></li>
                        <li><a href="#">HuaWei/华为</a></li>
                        <li><a href="#">SamSung/三星</a></li>
                        <li><a href="#">Apple/苹果</a></li>
                        <li><a href="#">HuaWei/华为</a></li>
                    	<li><a href="#">SamSung/三星</a></li>
                        <li><a href="#">Apple/苹果</a></li>
                        <li><a href="#">HuaWei/华为</a></li>
                    </ul>
                    <div class="more_select"><a href="#">更多</a></div>
                </dd>
                </dl>
            </div>
            <div class="select">
            	<dl>
                <dt>品牌</dt>
                <dd class="limit">不限</dd>
                <dd>
                	<ul>
                    	<li><a href="#">SamSung/三星</a></li>
                        <li><a href="#">Apple/苹果</a></li>
                        <li><a href="#">HuaWei/华为</a></li>
                    	<li><a href="#">SamSung/三星</a></li>
                        <li><a href="#">Apple/苹果</a></li>
                        <li><a href="#">HuaWei/华为</a></li>
                    </ul>
                    <div class="more_select"><a href="#">更多</a></div>
                </dd>
                </dl>
            </div>
            <div class="select">
            	<dl>
                <dt>品牌</dt>
                <dd class="limit">不限</dd>
                <dd>
                	<ul>
                        <li><a href="#">HuaWei/华为</a></li>
                        <li><a href="#">SamSung/三星</a></li>
                        <li><a href="#">Apple/苹果</a></li>
                        <li><a href="#">HuaWei/华为</a></li>
                    	<li><a href="#">SamSung/三星</a></li>
                        <li><a href="#">Apple/苹果</a></li>
                        <li><a href="#">HuaWei/华为</a></li>
                    </ul>
                    <div class="more_select"><a href="#">更多</a></div>
                </dd>
                </dl>
            </div>
           <div class="select">
           	<dl class="more_select2">
            	<dt>更多选项</dt>
                <dd>
                	<span class="cpu"><a href="#">CPU核心数<i></i></a></span>
                    <span class="cpu"><a href="#">主摄像头像素<i></i></a></span>
                </dd>
            </dl>
           </div>
        </div>
        <div class="right_area_bot">
        	<div class="address">
            	<div class="address_where">送至<span id="where">广东<i></i></span></div>
                <div class="address_num">
                <div class="num">
                	<input type="checkbox" class="ck" onclick="haveGoods(this)" />仅显示有货<span>共<i id="shopNum"><?php echo count($row); ?></i>件商品</span>
                </div>
                </div>
            </div><!--address结束-->
            <div class="right_area_content">
            <?php 
                foreach($row as $item):
                    $productImg=getProImgById($item['id']);

             ?>
            	<div class="list">
                	<a href="shop_introduce.php?id=<?php echo $item['id'] ?>&cId=<?php echo $item['cId'] ?>"><img src="../store/uploads/<?php echo $productImg['albumPath'] ?>" alt="网淘网" width='150' height='200' /></a>
                    <p class="shop_info">
                        <a href="shop_introduce.php?id=<?php echo $item['id'] ?>&cId=<?php echo $item['cId'] ?>"><?php echo $item['pName'] ?></a>
                    </p>
                    <p class="money_comment">￥<?php echo $item['iPrice'] ?><span><i>4886</i>评论</span></p>
                    <p class="join_car"><a href="shop_introduce.php?id=<?php echo $item['id'] ?>&cId=<?php echo $item['cId'] ?>"><i></i>加入购物车</a></p>
                </div>
              <?php 
                endforeach;
               ?> 
            </div><!--conntent结束-->
            <div class="bottom_bar">
            	<div class="page_num"><?php echo showPage($page, $totalPage,"cId={$cId}");?></div>
            </div><!--bottom_bar结束-->
        </div>
    </div><!--right_area结束-->
    <hr />
</div><!--comWidth结束-->
</div><!--main结束-->
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
<div class="province">
    <span value='1'>广东</span><span value='2'>天津</span><span value='3'>上海</span><span value='4'>北京</span>
    <span value='5'>河北</span><span value='6'>湖南</span><span value='7'>海南</span><span value='8'>重庆</span>
    <span value='9'>山西</span><span value='10'>河南</span><span value='11'>四川</span><span value='12'>珠海</span>
    <span value='13'>浙江</span><span value='14'>辽宁</span><span value='15'>江苏</span><span value='16'>吉林</span>
    <span value='17'>安徽</span><span value='18'>福建</span><span value='19'>山东</span><span value='20'>湖北</span>
    <span value='21'>青海</span><span value='22'>陕西</span><span value='23'>云南</span><span value='24'>贵州</span>
</div>
<div class="citys">
    <span>广州</span><span>深圳</span><span>珠海</span>
    <span>东莞</span><span>揭阳</span><span>韶关</span>
    <span>梅州</span><span>湛江</span><span>佛山</span>
</div>
<div class="citys">
    <span>河东区</span><span>和平区</span><span>南开区</span>
    <span>津南区</span><span>东丽区</span><span>红桥区</span>
    <span>北辰区</span><span>武清区</span><span>河西区</span>
</div>
<div class="citys">
    <span>黄浦区</span><span>卢湾区</span><span>普陀区</span>
    <span>虹口区</span><span>闵行区</span><span>宝山区</span>
    <span>静安区</span><span>杨浦区</span><span>长宁区</span>
    <span>徐汇区</span><span>闸北区</span><span>嘉定区</span>
</div>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/my_js.js"></script>
<script type="text/javascript">
        function haveGoods(obj){
            if(obj.checked){
                xmlHttp("1");
                // window.location.href='goods.php?page=1&cId='+<?php echo $_REQUEST['cId'] ?>+'&state=1';
            }else{
                xmlHttp("0");
                // window.location.href='goods.php?page=1&cId='+<?php echo $_REQUEST['cId'] ?>+'&state=0';
            }
        }
        function xmlHttp($sta){
            var str="";
            $.ajax({
                type:"GET",
                url:'goods.php?page=1&cId='+<?php echo $_REQUEST['cId'] ?>+'&state='+$sta,
                data:'',
                dataType:"json",
                success:function(data){
                if(data.length>0){
                    console.log(data);
                    for(var i=0;i<data.length;i++){
                        var a=
                        str+="<div class='list'>";
                        str+="<a href='shop_introduce.php?id="+data[i].id+"&cId=<?php echo $_REQUEST['cId'] ?>'><img src='../store/uploads/"+data[i].albumPath+"' alt='网淘网' width='150' height='200' /></a>";
                        str+="<p class='shop_info'>";
                        str+=" <a href='shop_introduce.php?id="+data[i].id+"&cId=<?php echo $_REQUEST['cId'] ?>'>"+data[i].pName+"</a>";
                        str+="</p>";
                        str+="<p class='money_comment'>￥"+data[i].iPrice+"<span><i>4886</i>评论</span></p>";
                        str+="<p class='join_car'><a href='#''><i></i>加入购物车</a></p>";
                        str+="</div>";
                    }
                  var a=data[0].totalPage;
                  var b=data[0].currentPage;
                  var c=data[0].cId;
                  var p='<?php echo showPage(1,1,"cId="+c);?>';
                }
                $('#shopNum').html(data.length);
                $(".right_area_content").html(str); 
                $(".page_num").html(p);  
                },
                error:function(XMLHttpRequest, textStatus, errorThrown){
                   console.log(XMLHttpRequest.status);
                   console.log(XMLHttpRequest.readyState);
                   console.log(textStatus);
                }
            });
        }
    window.onload=function(){
        var where=document.getElementById("where"),
            province=document.getElementsByClassName("province"),
            province_span=province[0].getElementsByTagName("span"),
            citys=document.getElementsByClassName("citys"); 
        var str;
        where.onclick=function(){
            province[0].style.display="block";
            province[0].onmousemove=function(){
                province[0].style.display="block";
            province[0].onmouseout=function(){
                province[0].style.display="none";
                for (var i = 0; i < province_span.length; i++) {
                // var j=i;
                province_span[i].onclick=function(){
                    str=this.innerHTML;
                    for (var i = 0; i < citys.length; i++) {
                        citys[i].style.display="none";
                    }
                    var j=this.getAttribute("value");
                    citys[j-1].style.display="block";
                    var citys_span=citys[j-1].getElementsByTagName("span");
                    for(var z=0;z<citys_span.length;z++){
                        citys_span[z].onclick=function(){
                            where.innerHTML=str+" "+this.innerHTML+"<i></i>";
                        }
                    }
                    citys[j-1].onmousemove=function(){
                        this.style.display="block";
                        province[0].style.display="block";
                    }
                    citys[j-1].onmouseout=function(){
                        this.style.display="none";
                        province[0].style.display="none";
                    }
                }
            }
            
            }
            }
        }
        where.onmouseout=function(){
            province=document.getElementsByClassName("province");
            province[0].style.display="none";
            citys[0].style.display="none";
        }

    }
</script>
</body>
</html>
