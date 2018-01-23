<?php
/**
 * Created by PhpStorm.
 * User: 10160
 * Date: 2017/3/18
 * Time: 16:49
 */
//构建上传文件信息
function buildInfo(){

    $i=0;
    foreach ($_FILES as $v) {
        //单文件
        if(is_string($v['name'])){
            $files[$i]=$v;
            $i++;
        }else{
            //多文件
            foreach($v['name']as $key=>$val){
                $files[$i]['name']=$val;
                $files[$i]['size']=$v['size'][$key];
                $files[$i]['tmp_name']=$v['tmp_name'][$key];
                $files[$i]['error']=$v['error'][$key];
                $files[$i]['type']=$v['type'][$key];
                $i++;
            }
        }
    }
    return $files;
}
//上传文件
function uploadFile($path = "uploads",$allowExt = array("gif", "jpeg", "jpg", "png", "wbmp"),$maxSize = 2097152,$imgFlag = true)
{
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    $i=0;
    $files = buildInfo();
    if(!($files&&is_array($files))){
        return;
    }
    foreach ($files as $file) {
        if ($file['error'] == UPLOAD_ERR_OK) {
            $ext = getExt($file['name']);//得到扩展名
            //检查文件的扩展名
            if (!in_array($ext, $allowExt)) {
                exit("非法文件类型");
            }
            //验证图片是否是真正的图片类型
            if ($imgFlag) {
                if (!$info = getimagesize($file['tmp_name'])) {
                    exit("不是真正的图片类型");
                }
            }
            //检查文件大小
            if ($file['size'] > $maxSize) {
                exit("文件过大");
            }
            if(!is_uploaded_file($file['tmp_name'])){
                exit("不是通过HTTP POST方式上传上来的");
            }
            $filename=getUniName().".".$ext;
            $destination=$path."/".$filename;
            if(move_uploaded_file($file['tmp_name'],$destination)){
                $file['name']=$filename;
                unset($file['error'],$file['tmp_name'],$file['size'],$file['type']);
                $uploadedFiles[$i]=$file;
                $i++;
            }
        }else{
            switch ($file['error']) {
                case 1:
                    $mes = "超过配置文件上传文件的大小";
                    break;
                case 2:
                    $mes = "超过了表单设置上传文件的大小";
                    break;
                case 3:
                    $mes = "文件部分被上传";
                    break;
                case 4:
                    $mes = "没有文件被上传";
                    break;
                case 5:
                    $mes = "没有找到临时目录";
                    break;
                case 6:
                    $mes = "文件不可写";
                    break;
                case 7:
                    $mes = "由于PHP的扩展程序终端了文件上传";
                    break;
            }
            echo $mes;
        }
    }
    return $uploadedFiles;
}