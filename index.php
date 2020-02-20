<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <!-- 强制移动设备以app模式打开页面(即在移动设备下全屏，仅支持部分浏览器) -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes"><!--UC强制全屏-->
    <meta name="browsermode" content="application"><!--UC应用模式-->
    <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
    <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
    <title>时光解析</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="css/player.css" />
    <link rel="stylesheet" type="text/css" href="css/dplayer.css" />
    <script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/player.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/cdnbye@latest/dist/hlsjs-p2p-engine.min.js"></script>
</head>

<body>
    <script type="text/javascript"> var play = {"auto":true,"live":false,"trys":"0","seek":"0","take":vfed.cookie.put("<?php echo($_REQUEST['url']);?>"),"urls":"<?php echo($_REQUEST['url']);?>","jump":"","logo":"img/logo.png","pics":"img/loading.jpg"};</script>
    <div id="video" style="width:100%;height:100%"></div>
	<div class="play"></div>
	<div class="total"><div class="masked"><h4><span class="peer"></span><span class="load"></span><span class="line"></span></h4></div>	
	<style>
        .masked h4{
            display: block;
            
            /*渐变背景*/
            background-image: -webkit-linear-gradient(left, #3498db, #f47920 10%, #d71345 20%, #f7acbc 30%,
            #ffd400 40%, #3498db 50%, #f47920 60%, #d71345 70%, #f7acbc 80%, #ffd400 90%, #3498db);
            color: transparent; /*文字填充色为透明*/
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;          /*背景剪裁为文字，只将文字显示为背景*/
            background-size: 200% 100%;            /*背景图片向水平方向扩大一倍，这样background-position才有移动与变化的空间*/
            /* 动画 */
            animation: masked-animation 4s infinite linear;
        }
        @keyframes masked-animation {
            0% {
                background-position: 0 0;   /*background-position 属性设置背景图像的起始位置。*/
            }
            100% {
                background-position: -100% 0;
            }
        }
    </style>
   
<script src="js/hls.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/dplayer.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">vfed.player.eplayer(play.auto, play.live, play.trys, play.seek, play.take, play.urls, play.jump, play.logo, play.pics);</script>
<!-- <span style="display: none;"></span> -->
<script src="js/p2p.min.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
