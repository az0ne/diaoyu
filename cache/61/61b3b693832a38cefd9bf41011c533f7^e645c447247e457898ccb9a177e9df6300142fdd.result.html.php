<?php /*%%SmartyHeaderCode:48361964953650a06323293-14876255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e645c447247e457898ccb9a177e9df6300142fdd' => 
    array (
      0 => '/var/www/mayhope/app/hope/templates/result.html',
      1 => 1394526037,
      2 => 'file',
    ),
    'd76e83abc2aef4cf912ec6b023d9abb6b6cab65e' => 
    array (
      0 => '/var/www/mayhope/app/hope/templates/common/menu.html',
      1 => 1398608546,
      2 => 'file',
    ),
    '64da570df0d15e9dde01c618db04c3e06b353e8a' => 
    array (
      0 => '/var/www/mayhope/app/hope/templates/common/right.html',
      1 => 1394526037,
      2 => 'file',
    ),
    '1877ff40163f33594637e30d148402255d56e16d' => 
    array (
      0 => '/var/www/mayhope/app/hope/templates/common/foot.html',
      1 => 1396331783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48361964953650a06323293-14876255',
  'has_nocache_code' => false,
  'cache_lifetime' => 1200,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?><!DOCTYPE html>
<html>
<head>
    <title>初见  | 让你更了解自己</title>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="星座社区"/>
    <meta name="description" content=""/>
    <link href="" type="image/x-icon" rel="shortcut icon">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <link href="/css/hope/common.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/hope/tools.js"></script>
    <script type="text/javascript" src="/js/hope/common.js"></script>
    <script type="text/javascript" src="/js/hope/like.js"></script>
    <script type="text/javascript" src="/js/hope/dialog.js"></script>
    <script type="text/javascript" src="/js/hope/comment.js"></script>
    <script type="text/javascript" src="/js/hope/page.js"></script>
</head>
<body>
    <script type="text/javascript">
    function login(){      
        var height = $(window).height();  
        var width = $(window).width(); 
        var mleft = (width-700)/2;
        var mtop = (height-300)/2;
        window.open('https://api.weibo.com/oauth2/authorize?client_id=1028039693&redirect_uri=http%3A%2F%2Fmayhope.com%2F%3Fs%3Dpublic%26a%3Dcallback&response_type=code','初见','height=300,width=700,top='+mtop+',left='+mleft+',toolbar=no,menubar=no,scrollbars=auto,resizeable=no,location=no,status=no');
    }
</script>
<div class="global-nav clearfix">
	<ul>
		<li><a href="/match/">配对</a></li>
		<li><a href="">图文</a></li>
		<li><a href="">语录</a></li>
	    <li><a href="">运势</a></li>
    </ul>
	<div class="sina">
                <a href="javascript:;" onclick="login();" class="topsina">微博账号登陆</a>
            </div>
</div>
<div class="nav">
	<div class="nav-wrap clearfix">
		<div class="nav-logo">
            <a title="初见网" href="/">初见网</a>
        </div>
        <div class="nav-items">
    		<ul>
        		<li class="nav-item nav-story-item">
        			<a href="javascript:;" class="current nav-link">测试<i class="icon-more bd"></i></a>
        			<div class="story-more-nav">
                        <ul class="primary-tag">
                            <li><a href="">男士</a></li>
                            <li><a href="">女士</a></li>
                            <li><a href="">居家</a></li>
                            <li><a href="">数码</a></li>
                            <li><a href="">户外</a></li>
                            <li><a href="">美妆</a></li>
                            <li><a href="">食品</a></li>
                            <li><a href="">母婴</a></li>
                        </ul>
                    </div>	
        		</li>                    
            	<li class="nav-item nav-article-item"><a class="nav-link" href="" >应用</a></li>                    
            	<li class="nav-item nav-doulist-item">
            		<a class="nav-link" href="/m/" >电台</a>
            		<span class="new">
                     	<img src="http://img3.douban.com/pics/new_menu.gif">
                	</span>
            	</li>
        	</ul>
     	</div>
     	<div class="pub"><a href="" class="pub-btn">发布</a></div>
	</div>
</div>

	
	<div class="container clearfix">
		<div class="main">
			<div class="main-item">
				<div class="main-content">
					<div class="title tc">
						<h1><strong>你能把握男友的爱情轨迹吗</strong></h1>
					</div>
					<div class="desc">2013年12月26日 10:33  初见网</div>
					<div class="title tl">
						<h1><strong>测试结果：</strong></h1>
					</div>
					<div class="content">
						<p></p>
					</div>
					<div class="like-wrap">
                                                  <a id="likeBtn" class="readon" href="javascript:;">喜欢</a>
                                                  <div id="likePos">+1</div>
                    </div>
					<div class="headitem"><h3>他们喜欢过这道测试<a href="">(<span id="countWrap">3</span>)</a></h3></div>
					<div id="likeWrap" class="headitem clearfix">
						                        <a target="_blank" title="青红__" href="http://weibo.com/u/1718787660"><img id="uid-1718787660" src="http://tp1.sinaimg.cn/1718787660/50/5672803758/1" alt="青红__"></a>
					                            <a target="_blank" title="喵小溅m" href="http://weibo.com/u/2404786797"><img id="uid-2404786797" src="http://tp2.sinaimg.cn/2404786797/50/5677912061/0" alt="喵小溅m"></a>
					                            <a target="_blank" title="初见网" href="http://weibo.com/u/3020750081"><img id="uid-3020750081" src="http://tp2.sinaimg.cn/3020750081/50/5678631679/0" alt="初见网"></a>
					                        </div>
				</div>
			</div>
			<div class="xfrome">
						1天前 发自 <a title="iPhone客户端" target="_blank" rel="nofollow" href="http://itunes.apple.com/cn/app/mei-shi-ri-ji-fa-xian-mei/id503440189?l=en&amp;mt=8">iPhone客户端</a>		
			</div>
			            <div class="comment clearfix">
				<div class="coimg">
					<a target="_blank" href="javascript:;"><img src="http://i2.douguo.net/static/img/48.jpg" alt="游客"></a>
				</div>
				<div class="pont">
					<div class="mbm">
						<span class="noping">发表评论，你需要<a onclick="login();" href="javascript:void(0);">登录</a></span>
					</div>
					<button class="btnpl" disabled="true" type="button">评论</button>
				</div>
			</div>    
            		    <div id="commentList"></div>		
		    <div id="pagination"></div> 
        </div>
	    <div class="side">
			<div class="side-mod">
				<div class="side-menu"><span>星座达人</span></div>
				<div class="side-mod-item">
					<img src="http://tp1.sinaimg.cn/1642720480/50/40020887226/1">
				</div>
				<div class="side-mod-item">
					<img src="http://tp1.sinaimg.cn/1886036432/50/5676793522/0">
				</div>
				<div class="side-mod-item">
					<img src="http://tp1.sinaimg.cn/1627825392/50/40024974080/0">
				</div>
				<div class="side-mod-item">
					<img src="http://tp1.sinaimg.cn/2182038504/50/40021396264/0">
				</div>
				<div class="side-mod-item">
					<img src="http://tp3.sinaimg.cn/1644395354/50/40021418050/1">
				</div>
				<div class="side-mod-item">
					<img src="http://tp2.sinaimg.cn/1823841685/50/5634271083/0">
				</div>
				<div class="side-mod-item">
					<img src="http://tp3.sinaimg.cn/2219088342/50/40021469058/1">
				</div>
				<div class="side-mod-item">
					<img src="http://tp2.sinaimg.cn/1111681197/50/5613632902/1">
				</div>
				<div class="side-mod-item">
					<img src="http://tp3.sinaimg.cn/1802626170/50/5677414783/0">
				</div>
				<div class="side-mod-item">
					<img src="http://tp2.sinaimg.cn/2231624585/50/5671159843/1">
				</div>
				<div class="side-mod-item">
					<img src="http://tp1.sinaimg.cn/3002847684/50/40009496109/1">
				</div>
				<div class="side-mod-item">
					<img src="http://tp3.sinaimg.cn/1650417662/50/5674960779/1">
				</div>
				<div class="side-mod-item">
					<img src="http://tp2.sinaimg.cn/1266321801/50/5650856450/0">
				</div>
				<div class="side-mod-item">
					<img src="http://tp1.sinaimg.cn/1618051664/50/5661558324/0">
				</div>
				<div class="side-mod-item">
					<img src="http://tp1.sinaimg.cn/1642720480/50/40020887226/1">
				</div>
			</div>
		</div>

	
	</div>
	<div class="footer">
		<div class="foot">
			<div class="link">
				<a target="_blank" rel="nofollow" href="">关于初见</a> 
				· 
				<a target="_blank" rel="nofollow" href="/page/appcenter">初见APP</a> 
				· 
				<a target="_blank" rel="nofollow" href="/contact.html">联系我们</a> 
				· 
				<a target="_blank" rel="nofollow" href="/hr.html">加入我们</a> 
				· 
				<a target="_blank" href="/links.html">友情链接</a> 
				· 
				<a target="_blank" rel="nofollow" href="/user/feedback">意见反馈</a> 
				· 
				<a target="_blank" href="">景点大全</a> 
				· 
				<a target="_blank" href="/jifen/product/lists">积分商城</a>
			</div>
			<div class="link">
				&copy;2009-2014 <a target="_blank" href="">初见</a> <a rel="nofollow" target="_blank" href="">京ICP备14008703号</a>&#12288;
			    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_4703100'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/stat.php%3Fid%3D4703100%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
            </div>
	        <div class="botfans">
	            <span class="bonefans">		

	            </span>
	        </div>
		</div>
	</div>
	
    <script>
        var LikeHand = new Like({
            likeBtn : document.getElementById("likeBtn"), //主按钮
            countWrap : document.getElementById("countWrap"), //数字标签
            likePos : document.getElementById("likePos"), //主按钮
            likeWrap : document.getElementById("likeWrap"), //主按钮
            liked : 0,
            logined : 0,
            news_id : 'vote-3',
            mid : '#uid-'+ '', 
            wb_uid : '',
            wb_name : '',
            wb_image : ''
        });
        var CommentHand = new Comment({
             textarea : document.getElementById("textarea"), //内容
             to_uid :  document.getElementById("to_uid"), 
             to_name :  document.getElementById("to_name"),
             to_pid : document.getElementById("to_pid"),
             commentList : document.getElementById("commentList"),
             login : 0,
             news_id : 'vote-3',
             from_uid : '',  
             wb_uid : '',
             wb_name : '',
             wb_image_url : '',
             wb_location: ''    
        });
        var PageHand = new Page({
            wb_uid :'',    
            count : 1,
            news_id : 'vote-3'
        });
        PageHand.show(1);
    </script>
</body>
</html>
<?php } ?>