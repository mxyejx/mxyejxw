
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="zh-cn"><![endif]--><!--[if IE 8 ]><html class="ie8" lang="zh-cn"><![endif]--><!--[if IE 9 ]><html class="ie9" lang="zh-cn"><![endif]--><!--[if (gt IE 9)|!(IE)]><!--><html class="" lang="zh-cn"><!--<![endif]-->
 
<head>
<meta charset='utf-8' />
<title>搜索结果</title>
<meta name="referrer" content="always"/>

<base target="_blank"/>

<link rel='stylesheet' href='https://s.ssl.qhimg.com/ssl/b3d85ce81abb962d,3c41ea429f5be108,b832a424e4f17473,86746727d96298e2,42970fe38cae1f63,5aed8f4453191cc5,a3e982f835ec5769,70785427009ed294,e10a7d420f0bad4a,33bc7718ef16de00.css' />


<link rel='stylesheet' href='https://s.ssl.qhimg.com/ssl/fbb6e361779591c7,d82da2f77e00e697,77238512b5e094ac,8911953e55533626,2f48ca96c21007ee,c4c21c31aaf1f2e7,346861792cbec7a2,6775ac35a3bb8754,c587580e36e522de,c995b6eb5da308ee,17e85370e062ba49,b5494d82a1a471f8,552a6fa36b23d21d,45e7d89d23d872da,714967d437e684b3,0975e01d2146e6ac,bf770514e71c3f82,3e75bd69592d1c50,268ffe514f7a215b,fc149f751929fa32,68d726e82712e44c,dbbea0bc9d24acaf,d0ce1dc7c57438e3,26a1365e1af674b7,032cb5f78e2c0ece,3c2318caae58c5f3,e1e85644d2d2d8f5,dc9b9b4f32395cd6.css' />
</head><body  >
<div class="c-top">
    <div class="c-top-main-wrap">
        <div class="c-top-main">
            
<div class="s-top g-clear s-top-dianshi" monitor-shortpv-b monitor-cid="剧集内容">
    <div class="s-top-left">
        <div class="s-cover" data-block="tj-cover" monitor-desc="大海报" monitor-shortpv  id='js-s-cover'>

    <a href="https://<?php echo $_SERVER['HTTP_HOST'].'?url='.$dsurl[1];?>" class="g-playicon s-cover-img" data-daochu="to=qq" data-num="1" 
    monitor-shortpv-c-sub="cont_inner_2_215464_cover">
        <img src="<?php echo $image ?>">
            </a>
</div>    </div>
    <div class="s-top-right">
        <div data-block="tj-info" monitor-desc="详细信息" monitor-shortpv class="s-top-info">

            <div class="s-top-info-title g-clear">
                <div class="title-left g-clear">
                    <h1><?php echo $bt ?></h1>
                            </div>
                <div class="s-title-right">
                                    </div>
            </div>

            <div id="js-desc-switch" class="s-top-info-detail g-clear">
                <div class="g-clear item-wrap">
                  
                    <p class="item"><span>类型 ：</span><?php echo $type ?></p>
                    <p class="item"><span>集数 ：</span><?php echo $jishu ?></p>
                    <p style='clear:both'></p>
                
                   
                                        <p class="link g-clear">
                        <a class="btn2 js-fenji" style="display:none;" href="http://www.so.com/s?src=360tv_story&q=%E5%88%86%E9%9B%86%E5%89%A7%E6%83%85%EF%BC%9A%E4%B8%89%E5%8D%81%E8%80%8C%E5%B7%B2" monitor-shortpv-c-sub="tab_分集介绍">分集介绍</a>                    </p>
                                    </div>

           
                <div class="item-desc-wrap g-clear js-close-wrap" style=""><p class="item-desc"><?php  echo $content  ?>


            </div>
        </div>

        <div>
                        <div id="js-siteact" class="s-top-list" data-block="tj-site" monitor-desc="剧集" monitor-shortpv>
                <div class="s-top-list-zd g-clear s-top-list-zd-wide">
                                                          
<div class='s-playsite' id='js-s-playsite'>

    <div class='sites js-sites'>
        <div class='sites-inner'>
            <p class='arrow'></p>
            <ul class='js-list'>

            </ul>
        </div>
    </div>
</div>                                    </div>

                <div id="js-site-wrap">
                    <div class="s-top-list-ji">
    <h2 class="title g-clear"><em></em>全部</h2>
    <div class="ji-tab-content js-tab-content">
    
<div class="num-tab js-tabs">

    <div class="num-tab-main g-clear js-tab">
         <?php for($i=1;$i<=$jishu;$i++){ ?>
                        <a data-num="<?php echo $i ?>" href="http://<?php echo $_SERVER['HTTP_HOST'].'?url='.$dsurl[$i];?>">
            <?php echo $i ?>
                                            </a>
        <?php } ?>
                               
                    </div>

</div>
</div>
</div>


                </div>
            </div>
                    </div>

    </div>
</div>

        </div>
    </div>
</div>

</body></html>
