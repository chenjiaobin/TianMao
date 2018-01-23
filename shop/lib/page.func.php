<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/17
 * Time: 15:12
 */
/*require_once '../include.php';
$sql="select * from admin";
$totalRows=getResultNum($sql);//得到记录条数
//echo $totalRows;
$pageSize=2;
$totalPage=ceil($totalRows/$pageSize);//得到总页码数
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
if($page<1||$page==null||!is_numeric($page)){
    $page=1;
}
if($page>=$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select * from admin limit {$offset},{$pageSize}";
$rows=fetchAll($sql);
//print_r($rows);

foreach ($rows as $row){
    echo "编号:".$row['id'],"<br/>";
    echo "管理员名称:".$row['username'],"<hr/>";
}

echo showPage($page,$totalPage);
echo "<hr/>";
echo showPage($page,$totalPage,"cid=5");*/
require_once '../include.php';


function showPage1($page,$totalPage,$where=null,$sep="&nbsp;")
{
    $id=$_SESSION["storeId"];
    $where=($where==null)?null:"&".$where;
    $url = $_SERVER['PHP_SELF']."?id=$id";//得到当前脚本的路径
    $index = ($page == 1) ? "首页" : "<a href='{$url}&page=1{$where}'>首页</a>";
    $last = ($page == $totalPage) ? "尾页" : "<a href='{$url}&page={$totalPage}{$where}'>尾页</a>";
    $prev = ($page == 1) ? "上一页" : "<a href='{$url}&page=" . ($page - 1) . "{$where}'>上一页</a>";
    $next = ($page == $totalPage) ? "下一页" : "<a href='{$url}&page=" . ($page + 1) . "{$where}'>下一页</a>";
    $str = "总共{$totalPage}页/当前是第{$page}页";
    for ($i = 1; $i <= $totalPage; $i++) {
        //当前无链接
        if ($page == $i) {
            $p .= "[{$i}]";
        } else {
            $p .= "<a href='{$url}&page={$i}'>[{$i}]</a>";
        }
    }

    $pageStr = $str . $sep . $index . $sep . $prev . $sep . $p . $sep . $next . $sep . $last;
    return $pageStr;
}


function showPage($page,$totalPage,$where=null,$sep="&nbsp;")
{
    $where=($where==null)?null:"&".$where;
    $url = $_SERVER['PHP_SELF'];//得到当前脚本的路径
    $index = ($page == 1) ? "首页" : "<a href='{$url}?page=1{$where}'>首页</a>";
    $last = ($page == $totalPage) ? "尾页" : "<a href='{$url}?page={$totalPage}{$where}'>尾页</a>";
    $prev = ($page == 1) ? "上一页" : "<a href='{$url}?page=" . ($page - 1) . "{$where}'>上一页</a>";
    $next = ($page == $totalPage) ? "下一页" : "<a href='{$url}?page=" . ($page + 1) . "{$where}'>下一页</a>";
    $str = "总共{$totalPage}页/当前是第{$page}页";
    for ($i = 1; $i <= $totalPage; $i++) {
        //当前无链接
        if ($page == $i) {
            $p .= "[{$i}]";
        } else {
            $p .= "<a href='{$url}?page={$i}{$where}'>[{$i}]</a>";
        }
    }

    $pageStr = $str . $sep . $index . $sep . $prev . $sep . $p . $sep . $next . $sep . $last;
    return $pageStr;
}