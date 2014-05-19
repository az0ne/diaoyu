<?php /*%%SmartyHeaderCode:377325869536509aba6b7a9-77889092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '723533aae71d6020a6ad0e1f71e7bdb1eaa169bc' => 
    array (
      0 => '/var/www/mayhope/app/admin/templates/Vote.html',
      1 => 1394526037,
      2 => 'file',
    ),
    'da5eaa4659e3e466ca374b4a382b767932b60174' => 
    array (
      0 => '/var/www/mayhope/app/admin/templates/layout.html',
      1 => 1394526037,
      2 => 'file',
    ),
    '16c7c1c8d88a1de399758840c2cdac5b6736c1c4' => 
    array (
      0 => '/var/www/mayhope/app/admin/templates/left.html',
      1 => 1394808873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '377325869536509aba6b7a9-77889092',
  'has_nocache_code' => false,
  'cache_lifetime' => 1200,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>后台管理系统</title>
<link rel="stylesheet" type="text/css" href="./css/admin/style.css" />
<link rel="stylesheet" type="text/css" href="http://news.sina.com.cn/js/jquery_ui/css/jquery-ui-1.10.1.custom.min.css" />
<link rel="stylesheet" type="text/css" href="./css/admin/batch.css">

<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://news.sina.com.cn/js/jquery_ui/js/jquery-ui-1.10.1.custom.js"></script>
<script type="text/javascript" src="./js/jqueryPlugins.js"></script>
<script type="text/javascript" src="./js/admin/gsps.js"></script>

</head>

<body>
    <div class="ui-wrapper">
        <!--header begin-->
        <div class="header">
            <div class="header-logo"></div>
            <div class="header-content">
                <div class="header-userEntry">
                    <a href="#" target="_blank">切换用户</a> | 
                    <a href="#" target="_blank">设置</a> |
                    <a href="?c=admin&a=logout">注销</a>
                </div>
            </div>
        </div>
        <!--header end-->
        <!--content begin-->
        <div class="cms-content clearfix">
            <div class="contetnt-left">
            <!-- 树状菜单 -->
<div id="menutree" class="ui-menutree">
    <h1 class="menu-itemHeader menu-extension">测试管理</h1>
    <div class="menu-itemCont">
        <ul>
            <li><a href="http://admin.mayhope.com/?p=admin&s=vote&a=view">测试列表</a></li>
            <li><a href="http://admin.mayhope.com/?p=admin&s=result&a=view">结语列表</a></li>
            <li><a href="http://admin.mayhope.com/?p=admin&s=play&a=view">音乐列表</a></li>
            <li><a href="http://admin.mayhope.com/?p=admin&s=article&a=view">文章列表</a></li>
            <li><a href="http://admin.mayhope.com/?p=admin&s=fortune&a=view">运势列表</a></li>
            <li><a href="http://admin.mayhope.com/?p=admin&s=match&a=view">配对列表</a></li>
            <li><a href="http://admin.mayhope.com/?p=admin&s=userinfo&a=view">用户列表</a></li>
            <li><a href="http://admin.mayhope.com/?p=admin&s=comment&a=view">评论列表</a></li>     
            <li><a href="http://admin.mayhope.com/?p=admin&s=good&a=view">喜欢列表</a></li>
        </ul>
    </div>
</div>
            </div>
            <div id="content" class="content-right">
            
<!-- separator start-->
<div id="separator" class="ui-separator separator-left" data-options-toggle=".contetnt-left" data-options-extend = ".content-right">
</div>
<!-- separator end-->
<!-- content start-->
<div class="cms-main">
    <!-- menubar start-->
    <div class="man-nav">
        <div class="ui-menubar clearfix">
        <ul class="ui-menu-list">
                <li class="ui-menu-item ui-menu-current opt" data-opt_type="search" data-opt_id="searchContainer" data-opt_url="/">测试
                </li>
            </ul>
            <div class="ui-menu-state">
                <a href="/">后台首页</a>/<span class="menu-state-current">测试</span>
            </div>
        </div>
    </div>
    <!--menubar end-->
    <div class="main-content">
        <div class="content-search">
            <fieldset class="ui-search">
            <form id="search_form" name="search_form" method="get">
                    <input type="hidden" name="s" value="vote"/>
            <input type="hidden" name="a" value="view"/>
            <div class="ui-search-container">
                <select name="_search_field"><option value="id">ID</option><option value="config_id">配置</option></select>&nbsp;&nbsp;<input hidefocus type="text" name="_search_keyword" value="" id="keyword" size="20" class="ui-input-text">&nbsp;&nbsp;<input hidefocus type="button" class="ui-input-button opt" data-opt_type="search" data-opt_id="searchContainer" data-opt_url="/" value="搜索">
            </div>
        </form>
        </fieldset>
    </div>
        <div id="searchContainer">
            <div>
                <div class="ui-toolbar">
                    <div class="toolbar-buttons">
                        <input type="submit" class="opt ui-input-button" data-opt_id="vote_update_dialog" data-opt_type="add" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=create" alt="添加测试" title="添加测试"value="添加测试"> 
                        <input type="button" class="opt ui-input-button" data-opt_id='sortable_tbody' data-opt_type="refresh" data-opt_url='http://admin.mayhope.com/?p=admin&amp;s=vote&amp;a=view' value="刷新">
                    </div>
                    <div class="toolbar-pagination">
                        <table><tr><td>         
<style>
/* 分页 */
.pagebox{overflow:hidden; zoom:1; font-size:12px; font-size:12px; font-family:Arial;}
.pagebox span{float:left; margin-right:4px; overflow:hidden; text-align:center; background:#fff;}
.pagebox span a{display:block; overflow:hidden; zoom:1; _float:left;}
.pagebox span.pagebox_all_num{padding:0 5px; height:21px; line-height:21px; color:#8e9197; cursor:default; background:none;}
.pagebox span.pagebox_pre_nolink{border:1px #e8e8ec solid; height:21px; line-height:21px; padding:0 9px 0 20px; color:#dcdcdc; background:url(http://www.sinaimg.cn/dy/deco/2008/0430/content_page_box_bg_1.gif) no-repeat 0 0 #fff; cursor:default;}
.pagebox span.pagebox_pre{color:#333; height:23px;}
.pagebox span.pagebox_pre a,.pagebox span.pagebox_pre a:visited{border:1px #dcdcdc solid; color:#333; text-decoration:none; padding:0 9px 0 20px; background:url(http://www.sinaimg.cn/dy/deco/2008/0430/content_page_box_bg_1.gif) no-repeat 0 -50px; cursor:pointer; height:21px; line-height:21px;}
.pagebox span.pagebox_pre a:hover,.pagebox span.pagebox_pre a:active{color:#fff; background:url(http://www.sinaimg.cn/dy/deco/2008/0430/content_page_box_bg_1.gif) no-repeat 0 -100px #8e9197; border:1px #8e9197 solid;}
.pagebox span.pagebox_num_nonce{padding:0 5px; height:21px; line-height:21px; color:#8e9197; cursor:default; background:none;}
.pagebox span.pagebox_num{color:#333; height:23px;}
.pagebox span.pagebox_num a,.pagebox span.pagebox_num a:visited{border:1px #dcdcdc solid; color:#333; text-decoration:none; padding:0 6px; cursor:pointer; height:21px; line-height:21px;}
.pagebox span.pagebox_num a:hover,.pagebox span.pagebox_num a:active{color:#fff; border:1px #8e9197 solid; background:#8e9197;}
.pagebox span.pagebox_num_ellipsis{color:#8e9197; width:26px; background:none;}
.pagebox span.pagebox_next_nolink{border:1px #e8e8ec solid; height:21px; line-height:21px; padding:0 20px 0 9px; color:#dcdcdc; background:url(http://www.sinaimg.cn/dy/deco/2008/0430/content_page_box_bg_1.gif) no-repeat 100% -25px #fff; cursor:default;}
.pagebox span.pagebox_next a,.pagebox span.pagebox_next a:visited{border:1px #dcdcdc solid; color:#333; text-decoration:none; padding:0 20px 0 9px; background:url(http://www.sinaimg.cn/dy/deco/2008/0430/content_page_box_bg_1.gif) no-repeat 100% -75px; cursor:pointer; height:21px; line-height:21px;}
.pagebox span.pagebox_next a:hover,.pagebox span.pagebox_next a:active{color:#fff; background:url(http://www.sinaimg.cn/dy/deco/2008/0430/content_page_box_bg_1.gif) no-repeat 100% -125px #8e9197; border:1px #8e9197 solid;}
</style>
<span class="pagebox">
	<span class="pagebox_all_num">共1页</span>
	<span class="pagebox_pre_nolink">上一页</span>				<span class="pagebox_num_nonce">1</span>
					<span class="pagebox_next_nolink">下一页</span></span>
&nbsp;</td></tr></table>
                    </div>
                </div>
                <div class="ui-debug-ie6-table">
                    <table class="ui-list-table">
                        <thead>
                            <tr>
								 <th>ID</th>
                       			 <th>测试名称</th>
					   			 <th>描述</th>
                       			 <th>图片</th>
                       			 <th>状态</th>
                       			 <th>时间</th>
                       			 <th>操作</th>
							</tr>
                        </thead>
                        <tbody id="sortable_tbody" style='table-layout: fixed;'>
                            <tr></tr>
                                                        <tr class="" id="tr_19">
								<td class="td_id">19</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=19">测试：你对他的依赖有多深 超准哦</a></td>
								<td class="td_desc">美好的爱情让人醉生梦死，让人奋不顾身。在爱情里，你是习惯被动还是喜欢主动？你会因为他无意的一个眼神而耿耿于怀吗？是否有时候也会因为自己的情难自拔感到懊恼呢？来做个心理测试吧，看看你对他的依赖程度，也看看有哪些地方需要改进，让自己更好的拥抱爱情！
</td>
								<td class="td_image"><img width=100 src="http://ww2.sinaimg.cn/bmiddle/8f56226dtw1ees5zp3a11j20a00a075c.jpg"></td>
								<td class="td_status">
                                                                                                            已推荐                                                                    </td>
								<td class="td_create_time">2014-04-19</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=19" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=19" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=19" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="odd" id="tr_17">
								<td class="td_id">17</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=17">测试：婚后你会有出轨的心吗？</a></td>
								<td class="td_desc">谁都会有面临诱惑的时候，你敢不敢写包票婚后不会有出轨的心呢？快来做个小测试吧！</td>
								<td class="td_image"><img width=100 src="http://ww3.sinaimg.cn/bmiddle/8f56226dtw1efeci65om1j20bg0bgdh4.jpg"></td>
								<td class="td_status">
                                                                                                            已推荐                                                                    </td>
								<td class="td_create_time">2014-04-15</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=17" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=17" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=17" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="" id="tr_16">
								<td class="td_id">16</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=16">测试：你能原谅另一半出轨吗</a></td>
								<td class="td_desc">爱情要彼此信任，互相包容才能长久，虽说爱情是建立在彼此诚信基础上的，但是爱情有信任就会有背叛哦，在面对对方感情背叛的时候，你会做出什么样的选择，是大吵大闹，转身离开，还是原谅他呢，现在我们就来测测看你能否原谅另一半出轨吧！</td>
								<td class="td_image"><img width=100 src="http://ww1.sinaimg.cn/bmiddle/8f56226dtw1ees607gjnzj20a00a0t9k.jpg"></td>
								<td class="td_status">
                                                                                                            已推荐                                                                    </td>
								<td class="td_create_time">2014-03-31</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=16" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=16" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=16" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="odd" id="tr_15">
								<td class="td_id">15</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=15">测试：你的最强第六感在哪方面</a></td>
								<td class="td_desc">女人都有第六感！面对爱情、工作、两性、陌生人……你在哪方面第六感最强？</td>
								<td class="td_image"><img width=100 src="http://ww3.sinaimg.cn/bmiddle/8f56226dtw1eephpbhlzzj20cu0cudhs.jpg"></td>
								<td class="td_status">
                                                                                                            已推荐                                                                    </td>
								<td class="td_create_time">2014-03-26</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=15" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=15" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=15" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="" id="tr_14">
								<td class="td_id">14</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=14">测试：从颜色搭配看你的感情弱点</a></td>
								<td class="td_desc">感情面前，人人都是敏感脆弱的，面对感情，人人也都有束手无策的时候，受过伤、太多情、渴望爱、太固执……你的感情弱点是什么？</td>
								<td class="td_image"><img width=100 src="http://ww3.sinaimg.cn/bmiddle/8f56226dtw1eephpbqbb8j2080080q41.jpg"></td>
								<td class="td_status">
                                                                                                            已推荐                                                                    </td>
								<td class="td_create_time">2014-03-26</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=14" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=14" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=14" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="odd" id="tr_13">
								<td class="td_id">13</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=13">测试：十二星座女怎样管理花心男友</a></td>
								<td class="td_desc">在情感的道路上，相恋的两个人相伴一路走下去的时候，难免会遇到挫折，其实当然也少不了横刀夺爱的考验。当发现男友花心甚至变心的时候，你会怎么做呢?是一哭二闹三上吊？还是有其他更好的办法呢？</td>
								<td class="td_image"><img width=100 src="http://ww1.sinaimg.cn/bmiddle/8f56226dtw1eephpas7gpj207m07mt9o.jpg"></td>
								<td class="td_status">
                                                                                                            已推荐                                                                    </td>
								<td class="td_create_time">2014-03-23</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=13" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=13" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=13" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="" id="tr_12">
								<td class="td_id">12</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=12">测试：面对表白你会怎么做</a></td>
								<td class="td_desc">面对异性的表白，你是一针见血的拒绝，还是设身处地的体谅ta，笑而不语转移话题，快来看看测试准不准吧！</td>
								<td class="td_image"><img width=100 src="http://ww4.sinaimg.cn/bmiddle/8f56226dtw1eekaghoe77j20wg0wg43y.jpg"></td>
								<td class="td_status">
                                                                                                            已推荐                                                                    </td>
								<td class="td_create_time">2014-03-18</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=12" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=12" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=12" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="odd" id="tr_11">
								<td class="td_id">11</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=11">你有多让人念念不忘</a></td>
								<td class="td_desc"></td>
								<td class="td_image"><img width=100 src="http://i0.sinaimg.cn/ast//t/2014-01-02/U5246P54T3D104665F389DT20140102093645_small_270x270.jpg"></td>
								<td class="td_status">
                                    已删除                                                                                                                                            </td>
								<td class="td_create_time">2014-01-13</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=11" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=11" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=11" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="" id="tr_10">
								<td class="td_id">10</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=10">异地多久婚姻出问题</a></td>
								<td class="td_desc"></td>
								<td class="td_image"><img width=100 src="http://i0.sinaimg.cn/ast//t/2014-01-02/U5246P54T3D104663F389DT20140102092154_small_270x270.jpg"></td>
								<td class="td_status">
                                                                        已审核                                                                                                        </td>
								<td class="td_create_time">2014-01-13</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=10" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=10" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=10" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="odd" id="tr_9">
								<td class="td_id">9</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=9">测试：你把自己看的太重了吗</a></td>
								<td class="td_desc"></td>
								<td class="td_image"><img width=100 src="http://i0.sinaimg.cn/ast//t/2013-12-31/U5246P54T3D104607F389DT20131231110834_small_270x270.jpg"></td>
								<td class="td_status">
                                                                        已审核                                                                                                        </td>
								<td class="td_create_time">2014-01-13</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=9" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=9" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=9" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="" id="tr_8">
								<td class="td_id">8</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=8">你体内有辣妈基因吗</a></td>
								<td class="td_desc"></td>
								<td class="td_image"><img width=100 src="http://i2.sinaimg.cn/ast//t/2014-01-09/U5593P54T3D104977F389DT20140109112116_small_270x270.jpg"></td>
								<td class="td_status">
                                    已删除                                                                                                                                            </td>
								<td class="td_create_time">2014-01-13</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=8" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=8" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=8" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="odd" id="tr_7">
								<td class="td_id">7</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=7">你为何被寂寞追着跑</a></td>
								<td class="td_desc"></td>
								<td class="td_image"><img width=100 src="http://ww4.sinaimg.cn/bmiddle/8f56226dtw1eekagiq2d4j20wo0wodjp.jpg"></td>
								<td class="td_status">
                                                                        已审核                                                                                                        </td>
								<td class="td_create_time">2014-01-13</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=7" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=7" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=7" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="" id="tr_6">
								<td class="td_id">6</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=6">测试：看背影选女朋友的话，这五个当中你会选谁呢？</a></td>
								<td class="td_desc">不要拿着别人的地图，寻找自己的路。每个人，都是一道独特的风景。你站在桥上看风景时，看风景的人在楼上看你。不必艳羡他人，家家都有一本难念的经。你该学会相信自己，再学会欣赏自己，试着把自己最亮丽的一面找出来，并呈现在阳光下。生命是自己的，除了必要的担当，更该为自己活着。</td>
								<td class="td_image"><img width=100 src="http://ww4.sinaimg.cn/bmiddle/8f56226dtw1eekagiq2d4j20wo0wodjp.jpg"></td>
								<td class="td_status">
                                                                        已审核                                                                                                        </td>
								<td class="td_create_time">2014-03-25</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=6" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=6" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=6" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="odd" id="tr_5">
								<td class="td_id">5</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=5">测试：诺基亚公司的性格测试题</a></td>
								<td class="td_desc">诺基亚公司性格测试题!准的一塌糊涂哦~

前言：本心理测试是由中国现代心理研究所以著名的美国兰德公司（战略研究所）拟制的一套经典心理测试题为蓝本，根据中国人心理特点加以适当改造后形成的心理测试题，目前已被一些著名大公司，如联想、长虹、海尔等公司作为对员工心理测试的重要辅助试卷，据说效果很好。现在已经有人建议将来作为对公务员的必选辅助心理测试推广使用。快来测试一下，很准的！

注意：每题只能选择一个答案，应为你第一印象的答案，把相应答案的分值加在一起即为你的得分。</td>
								<td class="td_image"><img width=100 src="http://ww4.sinaimg.cn/bmiddle/8f56226dtw1eekaggewwfj20u00u07bj.jpg"></td>
								<td class="td_status">
                                                                        已审核                                                                                                        </td>
								<td class="td_create_time">2013-12-30</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=5" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=5" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=5" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="" id="tr_4">
								<td class="td_id">4</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=4">测试：让人产生性冲动的指数</a></td>
								<td class="td_desc">不管男人还是女人，对于性都有着童话式的幻想。虽然在平常生活中，都表现的矜持或是含而不露。但是在某些情况下或是特殊场景中，会让人荷尔蒙难以抑制，情不自禁。测测你在什么情况下会情不自禁？</td>
								<td class="td_image"><img width=100 src="http://ww3.sinaimg.cn/bmiddle/8f56226dtw1eephpal5izj20ar0arwg3.jpg"></td>
								<td class="td_status">
                                                                                                            已推荐                                                                    </td>
								<td class="td_create_time">2013-12-29</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=4" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=4" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=4" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                                                        <tr class="odd" id="tr_3">
								<td class="td_id">3</td>
								<td class="td_name"><a href="/?s=question&a=view&vote_id=3">你能把握男友的爱情轨迹吗</a></td>
								<td class="td_desc">本以为步入婚姻殿堂，就是两个人接着开始了另一段甜蜜的旅程，但很多夫妻却发现婚前婚后的样子是完全不一样的。恋爱时的甜蜜少了，情话少了，就连温柔呵护也一天一天不见了，而争吵却变得越来越多，以致于从未想过分开，却一步一步走到分岔路口。要想婚姻幸福不变质，首先就要预防婚后杀手的突袭。那么，你最需警惕的婚后杀手是什么呢？一起来做个测试吧！</td>
								<td class="td_image"><img width=100 src="http://ww1.sinaimg.cn/bmiddle/8f56226dtw1eede9zqjgtj206t06twf2.jpg"></td>
								<td class="td_status">
                                                                                                                                                上首页                                </td>
								<td class="td_create_time">2013-12-28</td>
								<td>[<a href="javascript:void(0);" class="opt"  data-opt_id="vote_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=get&id=3" data-opt_action="http://admin.mayhope.com/?p=admin&s=vote&a=update&id=3" alt="测试编辑" title="测试编辑" >编辑</a>] | [<a href="javascript:void(0);" class="opt"  data-opt_id="vote_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=vote&a=delete&id=3" alt="测试删除" title="测试删除" >删除</a>]</td>
							</tr>
                             
                        </tbody>
                        <thead>
                            <tr>
								 <th>ID</th>
                       			 <th>测试名称</th>
					   			 <th>描述</th>
                       			 <th>图片</th>
                       			 <th>状态</th>
                       			 <th>时间</th>
                       			 <th>操作</th>
							</tr>
                       	</thead>
                    </table>
                </div>
                <div class="ui-toolbar">
                    <div class="toolbar-pagination">
                        <table><tr><td>         
<style>
/* 分页 */
.pagebox{overflow:hidden; zoom:1; font-size:12px; font-size:12px; font-family:Arial;}
.pagebox span{float:left; margin-right:4px; overflow:hidden; text-align:center; background:#fff;}
.pagebox span a{display:block; overflow:hidden; zoom:1; _float:left;}
.pagebox span.pagebox_all_num{padding:0 5px; height:21px; line-height:21px; color:#8e9197; cursor:default; background:none;}
.pagebox span.pagebox_pre_nolink{border:1px #e8e8ec solid; height:21px; line-height:21px; padding:0 9px 0 20px; color:#dcdcdc; background:url(http://www.sinaimg.cn/dy/deco/2008/0430/content_page_box_bg_1.gif) no-repeat 0 0 #fff; cursor:default;}
.pagebox span.pagebox_pre{color:#333; height:23px;}
.pagebox span.pagebox_pre a,.pagebox span.pagebox_pre a:visited{border:1px #dcdcdc solid; color:#333; text-decoration:none; padding:0 9px 0 20px; background:url(http://www.sinaimg.cn/dy/deco/2008/0430/content_page_box_bg_1.gif) no-repeat 0 -50px; cursor:pointer; height:21px; line-height:21px;}
.pagebox span.pagebox_pre a:hover,.pagebox span.pagebox_pre a:active{color:#fff; background:url(http://www.sinaimg.cn/dy/deco/2008/0430/content_page_box_bg_1.gif) no-repeat 0 -100px #8e9197; border:1px #8e9197 solid;}
.pagebox span.pagebox_num_nonce{padding:0 5px; height:21px; line-height:21px; color:#8e9197; cursor:default; background:none;}
.pagebox span.pagebox_num{color:#333; height:23px;}
.pagebox span.pagebox_num a,.pagebox span.pagebox_num a:visited{border:1px #dcdcdc solid; color:#333; text-decoration:none; padding:0 6px; cursor:pointer; height:21px; line-height:21px;}
.pagebox span.pagebox_num a:hover,.pagebox span.pagebox_num a:active{color:#fff; border:1px #8e9197 solid; background:#8e9197;}
.pagebox span.pagebox_num_ellipsis{color:#8e9197; width:26px; background:none;}
.pagebox span.pagebox_next_nolink{border:1px #e8e8ec solid; height:21px; line-height:21px; padding:0 20px 0 9px; color:#dcdcdc; background:url(http://www.sinaimg.cn/dy/deco/2008/0430/content_page_box_bg_1.gif) no-repeat 100% -25px #fff; cursor:default;}
.pagebox span.pagebox_next a,.pagebox span.pagebox_next a:visited{border:1px #dcdcdc solid; color:#333; text-decoration:none; padding:0 20px 0 9px; background:url(http://www.sinaimg.cn/dy/deco/2008/0430/content_page_box_bg_1.gif) no-repeat 100% -75px; cursor:pointer; height:21px; line-height:21px;}
.pagebox span.pagebox_next a:hover,.pagebox span.pagebox_next a:active{color:#fff; background:url(http://www.sinaimg.cn/dy/deco/2008/0430/content_page_box_bg_1.gif) no-repeat 100% -125px #8e9197; border:1px #8e9197 solid;}
</style>
<span class="pagebox">
	<span class="pagebox_all_num">共1页</span>
	<span class="pagebox_pre_nolink">上一页</span>				<span class="pagebox_num_nonce">1</span>
					<span class="pagebox_next_nolink">下一页</span></span>
&nbsp;</td></tr></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--form start-->
<div id="vote_update_dialog" style="display:none;" title="测试编辑">
<form class="ui-form" action="" method="post"><table align="center" width="100%"><tbody>
	<tr class="field-group">
		<td class="field-header">名称：</td>
		<td class="field-content"><input type="text" class="ui-text-dialog" name="name" value="" /></td>
	</tr>
	<tr class="field-group">
		<td class="field-header">答题顺序：</td>
		<td class="field-content">
            <select name="random">
                <option value="1">计分测试</option>
                <option value="2">跳转测试</option>
            </select>
        </td>
	</tr>
	<tr class="field-group">
		<td class="field-header">分类：</td>
		<td class="field-content">
            <select name="kind">
                                    <option value="1">两性测试</option>
                                    <option value="2">爱情测试</option>
                                    <option value="3">个性测试</option>
                                    <option value="4">事业测试</option>
                                    <option value="5">趣味测试</option>
                            </select>
        </td>
	</tr>

	<tr class="field-group">
		<td class="field-header">描述：</td>
		<td class="field-content"><textarea style="width:300px;height:100px;" name="desc"></textarea></td>
	</tr>
	<tr class="field-group">
		<td class="field-header">图片：</td>
		<td class="field-content"><input type="text" class="ui-text-dialog" name="image" value="" /></td>
	</tr>
    <tr class="field-group">
		<td class="field-header">状态：</td>
		<td class="field-content">
            <select name="status">
                <option value="0">已删除</option>
                <option value="1">已审核</option>
                <option value="2">已推荐</option>
                <option value="3">上首页</option>
            </select>
        </td>
	</tr>

	<tr class="field-group">
		<td class="field-header">作者：</td>
		<td class="field-content"><input type="text" class="ui-text-dialog" name="author" value="" /></td>
	</tr>
	<tr class="field-group">
		<td class="field-header">新闻ID：</td>
		<td class="field-content"><input type="text" class="ui-text-dialog" name="news_id" value="" /></td>
	</tr>

    <tr class="field-group">
		<td class="field-header">时间：</td>
		<td class="field-content">
			<input type="input" class="ui-text-dialog" name="create_time" id="input_calendar_create_time">
			<img style="vertical-align: middle;margin-left: 2px;" src="images/calendar.gif"  id="show_calendar_create_time" />
		</td>
	</tr>
	<script>
	$(document).ready(function(){
		$('#input_calendar_create_time').datepicker({
			dateFormat: "yy-mm-dd"
		});
	});
	</script>
	<tr class="field-group" style="border-bottom:0px;padding-bottom:0px;">
		<td class="field-header"></td>
		<td class="field-content" style="text-align: center; display: block;">
			<input type="submit" class="ui-button-submit" id="submit" value="提交">
		<td>
	</tr>
</tbody></table></form>
</div>
<!--form end-->

<script type="text/javascript">
    function beginOpt(obj) {
    switch (obj.data("opt_id")) {
        case "vote_delete":
            if(!confirm("确定要删除么？")) {
                return false;
        }
        break;
    }
    return true;
    }

    function endOpt(obj, data) {
    switch (obj.data("opt_id")) {
            //更新
        case "vote_update_dialog":
                if (data.status.code == "0") {
                var result = data.data;
            for (var i in result) {
                obj.parent("td").parent("tr").find(".td_" + i).html(result[i]);
            }
        }
        break;
        //删除
        case "vote_delete":
                if (data.status.code == "0") {
                obj.parent("td").parent("tr").addClass("del");
                    //reloadList('http://admin.mayhope.com/?p=admin&amp;s=vote&amp;a=view');
        }
        break;
        //逻辑删除
        case "vote_logic_delete":
                if (data.status.code == "0") {
                    obj.data("opt_id", obj.data("opt_id").replace("logic_delete", "logic_resume"));
                    obj.data("opt_url", obj.data("opt_url").replace("logic_delete", "logic_resume"));
                    obj.attr("alt", obj.attr("alt").replace("删除", "恢复"));
                    obj.attr("title", obj.attr("title").replace("删除", "恢复"));
            obj.parent("td").parent("tr").addClass("del");
            obj.html("恢复");
        }
        break;
        //逻辑恢复
        case "vote_logic_resume":
            if (data.status.code == '0') {
                obj.data("opt_id", obj.data("opt_id").replace("logic_resume", "logic_delete"));
            obj.data("opt_url", obj.data("opt_url").replace("logic_resume", "logic_delete"));
            obj.attr("alt", obj.attr("alt").replace("恢复", "删除"));
            obj.attr("title", obj.attr('title').replace("恢复", "删除"));
            obj.parent("td").parent("tr").removeClass("del");
            obj.html("删除");
        }
        break;
        }
    return true;
    }

    function endGetData(obj, data) {
        switch (obj.data('opt_id')) {
            case '***':
                //do samething;
                break;
        }
        return true;
    }
</script>

            </div>
        </div>
        <!--content end-->
        <!-- footer -->
        <div class="footer">
            <p>Copyright &copy; 1996-2014 SINA Corporation, All Rights Reserved</p>
            <p></p>
            <p>新浪公司 <a href="http://www.sina.com.cn/intro/copyright.shtml">版权所有</a></p>
        </div>
        <!-- end footer -->
    </div>
    <script type="text/javascript" src="/js/admin/common.js"></script>
</body>
</html>
<?php } ?>