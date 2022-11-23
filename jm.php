<?php

if($_GET['wd']!=''){
    $wd = $_GET['wd'];
    $json = getV($wd);
    if($json->bt==''){
        die('没有找到，请换一个关键词试试！');
    }
    $type= $json->type;
    if($type=='综艺' or $type=='动漫'){
       die('目前无法搜索综艺和动漫'); 
    }
    if($type=='电影'){
        $zy1=$json->zy1; 
        $zy2=$json->zy2;
        if($zy1!=''){
            $url=$zy1;
        }elseif($zy1=='' || $zy2!=''){
            $url=$zy2;
        }
        if($zy1=='' || $zy2==''){
            die('换个关键词试试【目前无法搜索综艺和动漫】');
        }
    }
    if($type=='电视剧'){
        $bt = $json->bt;
        $content = $json->content;
        $image = $json->img;
        $dsurl = $json->url;
        $jishu = $json->jishu;
        $dsurl = object_array($dsurl);
        include('cs.php');
        die();
        $url = $dsurl[1];
    }
}else{
    $url=$_GET['url'];
}
$token="$uid&$key&$url";
$token = jm($token);

function getV($wd)
{
    $api="https://api.bcjbb.com/api.php?wd=$wd";
    $json = file_get_contents($api);
    $date = json_decode($json);
    return $date;
}
function jm($txt,$key='yunhaikeji')
{
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-=+";
    $nh = rand(0,64);
    $ch = $chars[$nh];
    $mdKey = md5($key.$ch);
    $mdKey = substr($mdKey,$nh%8, $nh%8+7);
    $txt = base64_encode($txt);
    $tmp = '';
    $i=0;$j=0;$k = 0;
    for ($i=0; $i<strlen($txt); $i++) {
        $k = $k == strlen($mdKey) ? 0 : $k;
        $j = ($nh+strpos($chars,$txt[$i])+ord($mdKey[$k++]))%64;
        $tmp .= $chars[$j];
    }
    return urlencode($ch.$tmp);
}
function object_array($array) {  
    if(is_object($array)) {  
        $array = (array)$array;  
     } if(is_array($array)) {  
         foreach($array as $key=>$value) {  
             $array[$key] = object_array($value);  
             }  
     }  
     return $array;  
}