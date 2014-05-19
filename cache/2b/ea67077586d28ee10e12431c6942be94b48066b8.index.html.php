<?php /*%%SmartyHeaderCode:134578814753650a87db79f3-29350935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea67077586d28ee10e12431c6942be94b48066b8' => 
    array (
      0 => '/var/www/mayhope/app/hope/templates/index.html',
      1 => 1398656010,
      2 => 'file',
    ),
    'd76e83abc2aef4cf912ec6b023d9abb6b6cab65e' => 
    array (
      0 => '/var/www/mayhope/app/hope/templates/common/menu.html',
      1 => 1398608546,
      2 => 'file',
    ),
    '1877ff40163f33594637e30d148402255d56e16d' => 
    array (
      0 => '/var/www/mayhope/app/hope/templates/common/foot.html',
      1 => 1396331783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134578814753650a87db79f3-29350935',
  'has_nocache_code' => false,
  'cache_lifetime' => 1200,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?><!DOCTYPE html>
<html>
<head>
    <title>初见网</title>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="初见网"/>
    <meta name="description" content="最大的心理互动去社区，在这里你可以变得更了解自己，更懂的理解、包容他人，积极、阳光"/>
    <link href="/images/hope/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <link href="/css/hope/common.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/hope/common.js"></script>
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

	
    <div class="container">
        <div class="section clearfix">
            <!--
            <div class="cat-nav">
		        <ul>
		            <li rel="0" class="on"><a href="javascript:void(0);">两性</a><em>|</em></li>
					<li rel="1" class=""><a href="javascript:void(0);">爱情</a><em>|</em></li>
					<li rel="2" class=""><a href="javascript:void(0);">个性</a><em>|</em></li>
					<li rel="3" class=""><a href="javascript:void(0);">事业</a><em>|</em></li>
					<li rel="4" class=""><a href="javascript:void(0);">趣味</a></li>
		        </ul>
        	</div>
            -->
			<div class="index-catbox-title ict-g"><span>心理测试</span></div>
            <div class="fadimg">
				<div class="imgbox">
                    <a href="/astro/3"><img height=245 src="http://ww1.sinaimg.cn/bmiddle/8f56226dtw1eede9zqjgtj206t06twf2.jpg"></a>
                    <div class="heart">
                        <a class="heart-button" rel="nofollow" href="/astro/3"><span>Heart this image </span></a>    
                    </div>
                </div>
				<div class="fousBottom"></div>
				<p><span>两性测试：你能把握男友的爱情轨迹吗</span></p>
			</div>
			<div class="tab-list">
        			
                <div class="tab-list-item">
        			<a href="/astro/19"><img width=150 src="http://ww2.sinaimg.cn/bmiddle/8f56226dtw1ees5zp3a11j20a00a075c.jpg" alt="测试：你对他的依赖有多深 超准哦" title="测试：你对他的依赖有多深 超准哦"></a>
        		    <p style="display:none;">测试：你对他的依赖有多深 超准哦</p>
                </div>
        			
                <div class="tab-list-item">
        			<a href="/astro/17"><img width=150 src="http://ww3.sinaimg.cn/bmiddle/8f56226dtw1efeci65om1j20bg0bgdh4.jpg" alt="测试：婚后你会有出轨的心吗？" title="测试：婚后你会有出轨的心吗？"></a>
        		    <p style="display:none;">测试：婚后你会有出轨的心吗？</p>
                </div>
        			
                <div class="tab-list-item">
        			<a href="/astro/16"><img width=150 src="http://ww1.sinaimg.cn/bmiddle/8f56226dtw1ees607gjnzj20a00a0t9k.jpg" alt="测试：你能原谅另一半出轨吗" title="测试：你能原谅另一半出轨吗"></a>
        		    <p style="display:none;">测试：你能原谅另一半出轨吗</p>
                </div>
        			
                <div class="tab-list-item">
        			<a href="/astro/14"><img width=150 src="http://ww3.sinaimg.cn/bmiddle/8f56226dtw1eephpbqbb8j2080080q41.jpg" alt="测试：从颜色搭配看你的感情弱点" title="测试：从颜色搭配看你的感情弱点"></a>
        		    <p style="display:none;">测试：从颜色搭配看你的感情弱点</p>
                </div>
        			
                <div class="tab-list-item">
        			<a href="/astro/15"><img width=150 src="http://ww3.sinaimg.cn/bmiddle/8f56226dtw1eephpbhlzzj20cu0cudhs.jpg" alt="测试：你的最强第六感在哪方面" title="测试：你的最强第六感在哪方面"></a>
        		    <p style="display:none;">测试：你的最强第六感在哪方面</p>
                </div>
        			
                <div class="tab-list-item">
        			<a href="/astro/13"><img width=150 src="http://ww1.sinaimg.cn/bmiddle/8f56226dtw1eephpas7gpj207m07mt9o.jpg" alt="测试：十二星座女怎样管理花心男友" title="测试：十二星座女怎样管理花心男友"></a>
        		    <p style="display:none;">测试：十二星座女怎样管理花心男友</p>
                </div>
        			
                <div class="tab-list-item">
        			<a href="/astro/12"><img width=150 src="http://ww4.sinaimg.cn/bmiddle/8f56226dtw1eekaghoe77j20wg0wg43y.jpg" alt="测试：面对表白你会怎么做" title="测试：面对表白你会怎么做"></a>
        		    <p style="display:none;">测试：面对表白你会怎么做</p>
                </div>
        			
                <div class="tab-list-item">
        			<a href="/astro/4"><img width=150 src="http://ww3.sinaimg.cn/bmiddle/8f56226dtw1eephpal5izj20ar0arwg3.jpg" alt="测试：让人产生性冲动的指数" title="测试：让人产生性冲动的指数"></a>
        		    <p style="display:none;">测试：让人产生性冲动的指数</p>
                </div>
        		        	</div>
		</div>

        <div class="section clearfix">
			<div class="index-catbox-title ict-g"><span>初见电台</span></div>
            <div class="fadimg">
				<div class="imgbox"><a href="/m/48"><img height=245 src="http://img.xiami.com/images/album/img79/57979/3167691362627231.jpg"></a></div>
				<p><span>初见FM:Seasoned Eyes Were Beamin</span></p>
			</div>
			<div class="couge">
				                <div class="clearfix">
               	 	<div class="head"><img width=50 src="http://tp3.sinaimg.cn/1439931842/50/5629919702/0"></div>
               	 	<div class="head-info">
               	 		<h4>最经不起挑逗的星座男运势</h4>
               	 		<span>2014年3月</span>	
               	 	</div>
               	 </div>
               	 <p>第1名金牛座（积极配合）；第2名巨蟹座（闷骚好奇又害羞型）；第3名天秤座（好奇宝宝）；第4名狮子座（喜欢恋爱的感觉）；第5名白羊座（自恋的小男生）</p>
			                     <div class="clearfix">
               	 	<div class="head"><img width=50 src="http://tp3.sinaimg.cn/1439931842/50/5629919702/0"></div>
               	 	<div class="head-info">
               	 		<h4>十二星座生气指数排行运势</h4>
               	 		<span>2014年4月</span>	
               	 	</div>
               	 </div>
               	 <p>冠军（白羊）、亚军（射手）、季军（双子）、第四名（处女）、第五名（水瓶）、第六名（巨蟹）、第七名（天蝎）、第八名（天秤）、第九名（双鱼）、第十名（摩羯）</p>
			     	
			</div>
			<div class="side-block">
				<div class="side-menu"><span>热门星文</h2></span></div>
				<ul class="item-img clearfix">
					                    <li><a href="/item/detail/15.html" target="_blank"><img width=130 src="http://ww2.sinaimg.cn/bmiddle/8f56226dtw1ees5zot5sxj20a00a0wfo.jpg"></a></li>
				                        <li><a href="/item/detail/14.html" target="_blank"><img width=130 src="http://ww1.sinaimg.cn/bmiddle/8f56226dtw1efeci6jm5pj2098098dgm.jpg"></a></li>
				                    </ul>
				<ul class="list" style="margin-left:0px;">
					                    <li><a href="/item/detail/11.html" target="_blank">最扯分手理由 你中枪了吗？</a></li>
					                    <li><a href="/item/detail/12.html" target="_blank">最会吃醋的12星座女生</a></li>
					                    <li><a href="/item/detail/13.html" target="_blank">不要妄图拴住爱情</a></li>
					                    <li><a href="/item/detail/9.html" target="_blank">爱一个人最好的方式</a></li>
					                    <li><a href="/item/detail/10.html" target="_blank">时间是最好的证明</a></li>
									</ul>
			</div>
		</div>
		<div class="section clearfix">
            <div class="index-catbox-title ict-g"><span>热门文章</span></div>
        </div>
        <div class="section mt20">
			<div class="whole">初见 ， 让你更了解自己</div>
			<div class="hole"><span>200,000</span>位星座达人，<span>4,0,000</span>篇心理测试，<span>3,000</span>篇星座分析热文，每天都有新分享。</div>
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
	
</body>
</html>
<?php } ?>