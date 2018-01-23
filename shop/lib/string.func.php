<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/16
 * Time: 13:23
 */
/**
 * 生成唯一的字符串
 */
function getUniName(){
    return md5(uniqid(microtime(true),true));
}
/**
 * 得到文件的扩展名
 */
function getExt($filename){
    return strtolower(end(explode(".",$filename)));
}