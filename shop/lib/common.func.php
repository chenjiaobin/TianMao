<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/16
 * Time: 15:23
 */
//这是一个提示信息的公共函数
function alertMes($mes,$url){
    echo "<script>alert('{$mes}');</script>";
    echo "<script>window.location='{$url}';</script>";
}