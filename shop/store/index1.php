<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/15
 * Time: 22:18
 */
require_once '../include.php';
checkLogined1();
$name=$_SESSION['storeName'];
$sql="select * from store where username='$name'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//echo $row['id'];
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>店家管理</title>
    <link rel="stylesheet" href="../admin/styles/backstage.css">
</head>

<body>
<div class="head">
    <h3 class="head_text" >电子商务后台管理系统</h3>
</div>
<div class="operation_user clearfix">
    <div class="link fr">
        <b>欢迎您<?php echo $_SESSION['storeName']; ?>店家
        </b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="icon icon_i">首页</a><span></span><a href="#" class="icon icon_j">前进</a><span></span><a href="#" class="icon icon_t">后退</a><span></span><a href="#" class="icon icon_n">刷新</a><span></span><a href="doAdminAction1.php?act=logout" class="icon icon_e">退出</a>
    </div>
</div>
<div class="content clearfix">
    <div class="main">
        <!--右侧内容-->
        <div class="cont">
            <div class="title">店家管理</div>
            <!-- 嵌套网页开始 -->
            <iframe src="main.php"  frameborder="0" name="mainFrame" width="100%" height="600"></iframe>
            <!-- 嵌套网页结束 -->
        </div>
    </div>
    <!--左侧列表-->
    <div class="menu">
        <div class="cont">
            <div class="title">管理员</div>
            <ul class="mList">
                <li>
                    <h3><span onclick="show('menu1','change1')" id="change1">+</span>商品管理</h3>
                    <dl id="menu1" style="display:none;">
                        <dd><a href="../store/addPro.php" target="mainFrame">添加商品</a></dd>
                        <dd><a href="../store/listPro.php?id=<?php echo $row['id'];?>" target="mainFrame">商品列表</a></dd>
                    </dl>
                </li>
                
            </ul>
        </div>
    </div>
    
</div>
<script type="text/javascript">
    function show(num,change){
        var menu=document.getElementById(num);
        var change=document.getElementById(change);
        if(change.innerHTML=="+"){
            change.innerHTML="-";
        }else{
            change.innerHTML="+";
        }
        if(menu.style.display=='none'){
            menu.style.display='';
        }else{
            menu.style.display='none';
        }
    }
</script>
</body>
</html>

