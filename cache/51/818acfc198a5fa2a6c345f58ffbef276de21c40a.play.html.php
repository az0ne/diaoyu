<?php /*%%SmartyHeaderCode:171047073353654729bf8c84-69068424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '818acfc198a5fa2a6c345f58ffbef276de21c40a' => 
    array (
      0 => '/var/www/mayhope/app/hope/templates/play.html',
      1 => 1398597005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171047073353654729bf8c84-69068424',
  'has_nocache_code' => false,
  'cache_lifetime' => 1200,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?><!DOCTYPE html>
<html>
<head>
    <title>The Magic of the Wizards  - 初见电台|Radio</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="初见电台 社区"/>
    <meta property="wb:webmaster" content="bfa312168408a5bc" />
    <meta property="qc:admins" content="315111741107056375" />
	<meta name="description" content="初见电台是一个干净的音乐电台，用来在闲暇时光享受唯美音乐时光的神秘社区。"/>
    <link href="/images/hope/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <link href="/css/hope/main.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/hope/jquery.jplayer.min.js"></script>
    <script src="/js/hope/jquery.bgstretcher.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var stack  = [];
        var id = '9';
        var _data = '{"id":"9","songname":"The Magic of the Wizards ","artist":"Rhapsody","album":"Best Ballads","img":"http:\/\/img5.douban.com\/lpic\/s2837359.jpg","mp3":"http:\/\/mayhope.com\/images\/mp3\/1.mp3","publish_time":"1384531200","pv":"14"}';
        $(document).ready(function(){
            $("#player").jPlayer({
                    swfPath: "/js/Jplayer.swf",
                    solution: "flash,html",
                    supplied: "mp3,m4a",
                    cssSelectorAncestor: "",
                    cssSelector: {
                        play: ".play",
                        pause: ".pause",
                        currentTime: "#currenttime"    
                    },
                    ready: function () {
                                                $("#player").jPlayer("setMedia", {
                            mp3: 'http://mayhope.com/images/mp3/1.mp3',
                        }).jPlayer("play");
                        _data = eval('('+_data+')');
                        share(_data);
                                            },
                    ended: function() {
                        getnext();
                    }
            });
            $("#cover_a img").hover(function() {
                 $(this).fadeTo("fast", 0.5)
                 },function() {
                 $(this).fadeTo("fast", 1)
            });
            $('#r_next').click(function(){
               getnext();     
            });
            function getnext(){
                $("#player").jPlayer("stop");
                $("#cover_a img").fadeOut();
                if (stack.length == 0) {
                     $.ajax({
                         type:'get',
                         url:'/?s=m&a=get&format=json',
                         dataType:'json',
                         data:{id:id},
                         success:function(result){
                               stack = result.data;
                               $("#cover_a").attr("href", "/m/" + stack[0].id);
                               playsong(stack[0]);
                               stack.splice(0, 1)
                         }
                     }); 
                }else{
                     $("#cover_a").attr("href", "/m/" + stack[0].id);
                    playsong(stack[0]);
                    stack.splice(0, 1);
                }     
                $("#r_next").blur()
            }
            function playsong(data){
                $("#player").jPlayer("setMedia", {
                    mp3: data.mp3,
                }).jPlayer("play");
                document.title = data.songname + " - 初见电台 | Radio";
                var a = "/m/" + data.id;
                $("#cover_a").attr("href", a);
                $("#songname").html("<a href='" + a + "'>" + data.songname + "</a>");
                $("#artistname").html(data.artist);
                $("#albumname").html("<a href='" + a + "'>" + data.album + "</a>");      
                $("#cover").attr("src", data.img).fadeIn(400);
                share(data);
            }    
            $("body").bgStretcher({
                images: [
                    "/images/mp3/bg/sample-1.jpg",
                    "/images/mp3/bg/sample-2.jpg", 
                    "/images/mp3/bg/sample-3.jpg", 
                    "/images/mp3/bg/sample-4.jpg",
                    "/images/mp3/bg/sample-5.jpg", 
                    "/images/mp3/bg/sample-6.jpg",
                    "/images/mp3/bg/sample-7.jpg", 
                    "/images/mp3/bg/sample-8.jpg", 
                    "/images/mp3/bg/sample-9.jpg",
                    "/images/mp3/bg/sample-10.jpg", 
                    "/images/mp3/bg/sample-11.jpg",
					"/images/mp3/bg/sample-13.jpg",
					"/images/mp3/bg/sample-14.jpg",
				    "/images/mp3/bg/sample-15.jpg"
                ],
                imageWidth: 1366,
                imageHeight: 768,
                slideDirection: "N",
                slideShowSpeed: 3000,
                transitionEffect: "fade",
                sequenceMode: "normal",
                anchoring: "left center",
                anchoringImg: "left center",
                nextSlideDelay: 12000,
            });
        });
    </script>
</head>
<body>
    <div id="player"></div>
    <div class="header">
        <div class="container">
            <div class="brand">初见</div>
            <div class="login">
				                <a href="javascript:;" onclick="window.open('https://api.weibo.com/oauth2/authorize?client_id=1028039693&amp;redirect_uri=http%3A%2F%2Fmayhope.com%2F%3Fs%3Dpublic%26a%3Dcallback&amp;response_type=code','初见','height=300,width=700,top=200,left=500,toolbar=no,menubar=no,scrollbars=auto,resizeable=no,location=no,status=no');">登录</a>
                            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="radio-box-wrap">
            <div class="radio-box">
                <div class="album-cover">
                    <a href="" id="cover_a" target="_blank">
                        <img id="cover" width=240 style="display:inline;" 
                        src="http://img5.douban.com/lpic/s2837359.jpg">
                    </a>
                </div>
                <div class="radio">
                    <h1 id="songname"><a href="">The Magic of the Wizards </a></h1>
                    <p id="artistname" class="artist">Rhapsody</p>
                    <p id="albumname" class="album"><a href="">Best Ballads</a></p>
                    <div class="jp-progress">
                        <div title="点击可以拖动快进" class="jp-seek-bar" style="width: 100%;">
                            <div class="jp-play-bar" style="width: 17.3385%;"></div>
                        </div>                                              
                    </div>
                    <p id="currenttime" class="playtime">00:00</p>  
                    <div class="radio-btn">
                        <div class="jp-volume-bar-icon"></div>
                        <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value" style="width: 80%;"></div>
                        </div>
                        <p id="r_next" class="next" >
                            <a title="下一曲" href="javascript:void(0);"><span></span></a>
                        </p>
                        <p id="r_start" class="play" style="display: block;">
                                <a title="播放" href="javascript:void(0);"><span></span></a>
                        </p>
                        <p id="r_stop" class="pause" style="display: none;">
                                <a title="暂停" href="javascript:void(0);"><span></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="share-wrap">        
            <div class="share clearfix">            
                <span class="share-label">分享这首歌</span>
                <span class="share-sites" style="overflow: hidden; width: 0px;">
                    <span class="inner">
                        <a class="douban" target="_blank" href="javascript:;" style="opacity: 0.6;">豆瓣</a>
                        <a class="kaixin" target="_blank" href="javascript:;" style="opacity: 0.6;">开心网</a>
                        <a class="qqweibo" target="_blank" href="javascript:;" style="opacity: 0.6;">腾讯微博</a>
                        <a class="qzone" href="javascript:;" target="_blank" style="opacity: 0.6;">QQ空间</a>
                        <a class="renren" href="javascript:;" target="_blank" style="opacity: 0.6;">人人网</a>
                        <a class="sina" href="javascript:;" target="_blank" style="opacity: 0.6;">新浪微博</a>
                    </span>
                </span>
        </div>  
    </div>
</body>
</html>
<script src="/js/hope/play.js" type="text/javascript"></script>
<?php } ?>