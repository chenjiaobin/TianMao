<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/16
 * Time: 12:21
 */

header("Content-type:text/html;charset=utf-8");
date_default_timezone_set("PRC");
session_start();
define("ROOT",dirname(__FILE__));
set_include_path(".".PATH_SEPARATOR.ROOT."/lib".PATH_SEPARATOR.ROOT."/core".PATH_SEPARATOR.ROOT."/configs".PATH_SEPARATOR.get_include_path());
require_once "mysql.func.php";
require_once "configs.php";
require_once "image.func.php";
require_once "string.func.php";
require_once "common.func.php";
require_once "admin.inc.php";
require_once "page.func.php";
require_once "cate.inc.php";
require_once "upload.func.php";
require_once "pro.inc.php";
require_once "album.inc.php";
require_once "market.inc.php";
require_once "store.inc.php";
require_once "user.inc.php";

connect();
//设定mysql连接编码
mysql_query("set names utf8");