<?php
//解析计费系统 售后群1103020157
include('User.php');
include('jm.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><title><?php echo $title; ?></title><style>body,html,#baicaiyunjiexi{background-color:#000;padding:0;margin:0;color:transparent;height:100%;width:100%;}</style></head><body style="overflow-y:hidden;"><div style="width: 100%; height: 100%;"><iframe id="baicaiyunjiexi" scrolling="no" allowtransparency="true" allowfullscreen="true" frameborder="0" src="https://api.bcjbb.com/?token=<?php echo $token; if($danmu==1){ echo '&danmu=1'; }?>" width="100%" height="100%" style="background: #000000;"></iframe>