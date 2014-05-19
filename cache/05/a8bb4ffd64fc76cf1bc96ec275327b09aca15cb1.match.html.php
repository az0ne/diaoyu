<?php /*%%SmartyHeaderCode:1913885736536577bdab2792-30969353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8bb4ffd64fc76cf1bc96ec275327b09aca15cb1' => 
    array (
      0 => '/var/www/mayhope/app/hope/templates/match.html',
      1 => 1397470009,
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
  'nocache_hash' => '1913885736536577bdab2792-30969353',
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

	
	<div class="container clearfix">
		<div class="main">
			<div class="main-item">
				<div class="main-content">
					<div class="content">
						<p>十二星座配对查询可以用来分析你和另一半在基本性格上的适配度，内容包括：12星座配对指数查询、星座配对测试、星座配对算命、天秤座最佳配对星座、双鱼座最佳配对星座、狮子座最佳配对星座、摩羯座最佳配对星座。</p>
					</div>
                    <form action="/match/result" method="POST" id="form">
					    <div class="match">
					    	<div class="match-item">
					    		<label>男方星座</label>
					    		<select name="male">
			                          <option selected="selected" value="">请选择</option>
			                          <option value="白羊座">白羊座</option>
			                          <option value="金牛座">金牛座</option>
			                          <option value="双子座">双子座</option>
			                          <option value="巨蟹座">巨蟹座</option>
			                          <option value="狮子座">狮子座</option>
			                          <option value="处女座">处女座</option>
			                          <option value="天秤座">天秤座</option>
			                          <option value="天蝎座">天蝎座</option>
			                          <option value="射手座">射手座</option>
			                          <option value="摩羯座">摩羯座</option>
			                          <option value="水瓶座">水瓶座</option>
			                          <option value="双鱼座">双鱼座</option>
					    		</select>&nbsp;&nbsp;&nbsp;&nbsp;
					    		<label>女方星座</label>
					    		<select name="female">
			                          <option selected="selected" value="">请选择</option>
			                          <option value="白羊座">白羊座</option>
			                          <option value="金牛座">金牛座</option>
			                          <option value="双子座">双子座</option>
			                          <option value="巨蟹座">巨蟹座</option>
			                          <option value="狮子座">狮子座</option>
			                          <option value="处女座">处女座</option>
			                          <option value="天秤座">天秤座</option>
			                          <option value="天蝎座">天蝎座</option>
			                          <option value="射手座">射手座</option>
			                          <option value="摩羯座">摩羯座</option>
			                          <option value="水瓶座">水瓶座</option>
			                          <option value="双鱼座">双鱼座</option>
					    		</select>
					    	</div>
					    </div>
					    <div class="like-wrap"><a class="readon" href="javascript:;" onclick="document.getElementById('form').submit();">开始查询</a></div>
					</form>
					<div class="headitem"><h3>他们玩过这道测试<a href="">(83)</a></h3></div>
					<div class="headitem clearfix">
						<a target="_blank" title="点心匣子" href=""><img src="http://tx1.douguo.net/upload/photo/d/9/f/70_yida928.jpg" alt="点心匣子"></a>
						<a target="_blank" title="象流星一样" href="http://www.douguo.com/u/u2sTar.html"><img src="http://tx1.douguo.net/upload/photo/5/4/4/70_u2sTar.jpg" alt="象流星一样"></a>
						<a target="_blank" title="点心匣子" href="http://www.douguo.com/u/yida928.html"><img src="http://tx1.douguo.net/upload/photo/d/9/f/70_yida928.jpg" alt="点心匣子"></a>
						<a target="_blank" title="象流星一样" href="http://www.douguo.com/u/u2sTar.html"><img src="http://tx1.douguo.net/upload/photo/5/4/4/70_u2sTar.jpg" alt="象流星一样"></a>
						<a target="_blank" title="秘密00000006" href="http://www.douguo.com/u/tdandnn.html"><img src="http://tx1.douguo.net/upload/photo/c/f/e/70_tdandnn.jpg" alt="秘密00000006"></a>
						<a target="_blank" title="王西西" href="http://www.douguo.com/u/wnn0909.html"><img src="http://tx1.douguo.net/upload/photo/3/0/c/70_wnn0909.jpg" alt="王西西"></a>
						<a target="_blank" title="Nono000029" href="http://www.douguo.com/u/Nono123.html"><img src="http://tx1.douguo.net/upload/photo/3/e/4/70_Nono123.jpg" alt="Nono000029"></a>
						<a target="_blank" title="咖啡茶0000003" href="http://www.douguo.com/u/kafeica.html"><img src="http://tx1.douguo.net/upload/photo/a/f/0/70_kafeica.jpg" alt="咖啡茶0000003"></a>
						<a target="_blank" title="等你00000004" href="http://www.douguo.com/u/huikangyake.html"><img src="http://tx1.douguo.net/upload/photo/f/4/5/70_huikangyake.jpg" alt="等你00000004"></a>
						<a target="_blank" title="风无忧" href="http://www.douguo.com/u/sdjnwhfsyn.html"><img src="http://tx1.douguo.net/upload/photo/3/6/0/70_sdjnwhfsyn.jpg" alt="风无忧"></a>
						<a target="_blank" title="┊仩渧遗弃硪" href="http://www.douguo.com/u/965712070.html"><img src="http://tx1.douguo.net/upload/photo/5/c/5/70_965712070.jpg" alt="┊仩渧遗弃硪"></a>
						<a target="_blank" title="C H0000002" href="http://www.douguo.com/u/727296902.html"><img src="http://tx1.douguo.net/upload/photo/a/5/5/70_727296902.jpg" alt="C H0000002"></a>
						<a target="_blank" title="给董方做饭吃" href="http://www.douguo.com/u/theroy.html"><img src="http://tx1.douguo.net/upload/photo/3/7/b/70_theroy.jpg" alt="给董方做饭吃"></a>
						<a target="_blank" title="点心匣子" href=""><img src="http://tx1.douguo.net/upload/photo/d/9/f/70_yida928.jpg" alt="点心匣子"></a>
					</div>
				</div>
			</div>
			<div class="xfrome">
						1天前 发自 <a title="iPhone客户端" target="_blank" rel="nofollow" href="http://itunes.apple.com/cn/app/mei-shi-ri-ji-fa-xian-mei/id503440189?l=en&amp;mt=8">iPhone客户端</a>		
			</div>
			<div class="comment clearfix">
				<div class="coimg">
					<a target="_blank" href="javascript:void(0);"><img src="http://i2.douguo.net/static/img/48.jpg" alt="游客"></a>
				</div>
				<div class="pont">
					<div class="mbm">
						<span class="noping">发表评论，你需要<a onclick="logindialog();" href="javascript:void(0);">登录</a>或<a rel="nofollow" href="/signup.html">注册</a></span>
					</div>
					<button class="btnpl" disabled="true" type="button">评论</button>
				</div>
			</div>
			<div  class="comment libdm pad clearfix">
				<div class="coimg mrm">
					<a target="_blank" rel="nofollow" href="/u/u69055958390761.html">
						<img src="http://tx1.douguo.net/upload/photo/2/4/b/48_u6569477851720105021706.jpg" alt="草莓要变瘦">
					</a>
				</div>
				<div class="pont">
					<div class="cpp">
						<span class="clo">
							<a rel="nofollow" target="_blank" href="/u/u69055958390761.html" class="user">草莓要变瘦</a>
						</span>
						<span class="fcc mls">(江苏 苏州市)</span><span class="fcc mls">2014-01-09 09:28:15</span>
						<span class="fcc mls"><a href="javascript:void(0);">回复</a></span>
					</div>
					<p class="cpp">@SemiGG 是的！感觉超棒</p>
				</div>
			</div>
			<div  class="comment libdm pad clearfix">
				<div class="coimg mrm">
					<a target="_blank" rel="nofollow" href="/u/u69055958390761.html">
						<img src="http://tx1.douguo.net/upload/photo/8/c/e/48_u6905595839076105301019.jpg" alt="草莓要变瘦">
					</a>
				</div>
				<div class="pont">
					<div class="cpp">
						<span class="clo">
							<a rel="nofollow" target="_blank" href="/u/u69055958390761.html" class="user">草莓要变瘦</a>
						</span>
						<span class="fcc mls">(江苏 苏州市)</span><span class="fcc mls">2014-01-09 09:28:15</span>
						<span class="fcc mls"><a href="javascript:void(0);">回复</a></span>
					</div>
					<p class="cpp">她家确实是便宜又好吃 </p>
				</div>
			</div>
			<div id="cm_pages" class="pagination">
				<span class="floblock prev" href="javascript:void(0)">
					<a>上一页</a>
				</span>
				<span class="floblock" href="javascript:void(0)">
					<a>1</a>
				</span>
				<span class="current">2</span>
				<span class="floblock next" href="javascript:void(0)"><a>下一页</a></span>
			</div>
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
	
</body>
</html>
<?php } ?>