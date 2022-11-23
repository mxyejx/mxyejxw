﻿<?php
header('Content-Type:text/html; charset=utf-8');
//后台地址 https://api.bcjbb.com/

//防盗设置
define('FDL_URL','jx.bcjbb.com|api.bcjbb.com'); //填写授权的域名，留空则为不设置防盗 多个使用 | 隔开 如 123.com|234.com
$title="白菜云解析";//这里写你首页的标题
$uid="1005";//这里填写你的uid
$key="xxxxxxxxxx";//这里填写你的秘钥
$danmu=0;//这里是弹幕播放器开关 0不开启 1开启
$ts="如果您是开发者，请到api.bcjbb.com自行注册使用！如果您是普通用户请联系网站管理员";
/*
http://域名/?url=视频地址 
http://域名/?wd=电影名字
*/

if(!is_referer(FDL_URL)){
    header('HTTP/1.1 403 Forbidden');
    exit('<h2><font color="black"><center>'.$ts.'</center></font></h2>'); //未授权域名提示
}

function is_referer($domain){
 
    if($domain=='') return true;
    $referer = strtolower($_SERVER['HTTP_REFERER']);
    $agent = strtoupper($_SERVER['HTTP_USER_AGENT']);
 
    if(empty($referer)){
        if(preg_match("/(iPhone|iPad|iPod|Android|Linux)/i", $agent)){
            return true;
        }
    }else{
      
        $ext = explode("|",$domain);
        for($i=0;$i<count($ext);$i++){
            if(strpos($referer,strtolower($ext[$i])) !== FALSE ){
                return true;
            }
        }
    }
    return false;
}