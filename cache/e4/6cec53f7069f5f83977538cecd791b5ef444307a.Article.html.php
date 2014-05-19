<?php /*%%SmartyHeaderCode:9455171765365dbd8363cb6-30526325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cec53f7069f5f83977538cecd791b5ef444307a' => 
    array (
      0 => '/var/www/mayhope/app/admin/templates/Article.html',
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
  'nocache_hash' => '9455171765365dbd8363cb6-30526325',
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
                <li class="ui-menu-item ui-menu-current opt" data-opt_type="search" data-opt_id="searchContainer" data-opt_url="/">文章
                </li>
            </ul>
            <div class="ui-menu-state">
                <a href="/">后台首页</a>/<span class="menu-state-current">文章</span>
            </div>
        </div>
    </div>
    <!--menubar end-->
    <div class="main-content">
        <div class="content-search">
            <fieldset class="ui-search">
            <form id="search_form" name="search_form" method="get">
                    <input type="hidden" name="s" value="article"/>
            <input type="hidden" name="a" value="view"/>
            <div class="ui-search-container">
                <select name="_search_field"><option value="id">ID</option><option value="kind">分类</option></select>&nbsp;&nbsp;<input hidefocus type="text" name="_search_keyword" value="" id="keyword" size="20" class="ui-input-text">&nbsp;&nbsp;<input hidefocus type="button" class="ui-input-button opt" data-opt_type="search" data-opt_id="searchContainer" data-opt_url="/" value="搜索">
            </div>
        </form>
        </fieldset>
    </div>
        <div id="searchContainer">
            <div>
                <div class="ui-toolbar">
                    <div class="toolbar-buttons">
                        <input type="submit" class="opt ui-input-button" data-opt_id="article_update_dialog" data-opt_type="add" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=create" alt="添加文章" title="添加文章"value="添加文章"> 
                        <input type="button" class="opt ui-input-button" data-opt_id='sortable_tbody' data-opt_type="refresh" data-opt_url='http://admin.mayhope.com/?s=article&amp;a=view' value="刷新">
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
                        <th>分类</th>
                        <th>标题</th>
                        <th>图片</th>
						<th>内容</th>
                        <th>点击</th>
                        <th>评论</th>
                        <th>时间</th>
                        <th>操作</th></tr>

                        </thead>
                        <tbody id="sortable_tbody" style='table-layout: fixed;'>
                            <tr></tr>
                                                            <tr class="" id="tr_15">
                        <td class="td_id">15</td>
                        <td class="td_kind">
                                                        爱情夜话                                                                                                                                        </td>
                        <td class="td_title">爱情合适就好</td>
                        <td class="td_image"><img width=100 src="http://ww2.sinaimg.cn/bmiddle/8f56226dtw1ees5zot5sxj20a00a0wfo.jpg"></td>
						<td class="td_content">&lt;p&gt;爱情合适就好，不要委屈将就，只要随意，彼此之间不...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">2014-04-19</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=15" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=15" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=15" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=15">内容排版</a>]
						</td>
						</tr>

                                                            <tr class="odd" id="tr_14">
                        <td class="td_id">14</td>
                        <td class="td_kind">
                                                                                    两性话题                                                                                                            </td>
                        <td class="td_title">男人是否喜欢你 6大表现看出来</td>
                        <td class="td_image"><img width=100 src="http://ww1.sinaimg.cn/bmiddle/8f56226dtw1efeci6jm5pj2098098dgm.jpg"></td>
						<td class="td_content">&lt;p&gt;1、喜欢给你打电话、发短信...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">2014-04-15</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=14" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=14" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=14" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=14">内容排版</a>]
						</td>
						</tr>

                                                            <tr class="" id="tr_13">
                        <td class="td_id">13</td>
                        <td class="td_kind">
                                                        爱情夜话                                                                                                                                        </td>
                        <td class="td_title">不要妄图拴住爱情</td>
                        <td class="td_image"><img width=100 src="http://ww2.sinaimg.cn/bmiddle/8f56226dtw1ees5yv2hfwj20a00a0my9.jpg"></td>
						<td class="td_content">&lt;p&gt;想知道一个人爱不爱你，就给他自由。不要妄图拴住爱...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">2014-04-02</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=13" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=13" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=13" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=13">内容排版</a>]
						</td>
						</tr>

                                                            <tr class="odd" id="tr_12">
                        <td class="td_id">12</td>
                        <td class="td_kind">
                                                        爱情夜话                                                                                                                                        </td>
                        <td class="td_title">最会吃醋的12星座女生</td>
                        <td class="td_image"><img width=100 src="http://ww4.sinaimg.cn/bmiddle/8f56226dtw1ees6087oitj20a00a0aby.jpg"></td>
						<td class="td_content">&lt;p&gt;同样是吃醋，方式不一样，带来的效果也会天差地别。...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">2014-04-02</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=12" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=12" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=12" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=12">内容排版</a>]
						</td>
						</tr>

                                                            <tr class="" id="tr_11">
                        <td class="td_id">11</td>
                        <td class="td_kind">
                                                        爱情夜话                                                                                                                                        </td>
                        <td class="td_title">最扯分手理由 你中枪了吗？</td>
                        <td class="td_image"><img width=100 src="http://ww4.sinaimg.cn/bmiddle/8f56226dtw1ees5zoz9f2j20a00a0dgw.jpg"></td>
						<td class="td_content">&lt;p&gt;假如两个人真心相爱，应该相互包容理解，这样才能度...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">2014-04-02</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=11" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=11" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=11" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=11">内容排版</a>]
						</td>
						</tr>

                                                            <tr class="odd" id="tr_10">
                        <td class="td_id">10</td>
                        <td class="td_kind">
                                                                                    两性话题                                                                                                            </td>
                        <td class="td_title">时间是最好的证明</td>
                        <td class="td_image"><img width=100 src="http://ww3.sinaimg.cn/bmiddle/8f56226dtw1eekb4w1goij208e08e401.jpg"></td>
						<td class="td_content">一下子可以得到的真心，往往都不算太真。因为每个人的心，...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">2014-03-18</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=10" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=10" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=10" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=10">内容排版</a>]
						</td>
						</tr>

                                                            <tr class="" id="tr_9">
                        <td class="td_id">9</td>
                        <td class="td_kind">
                                                        爱情夜话                                                                                                                                        </td>
                        <td class="td_title">爱一个人最好的方式</td>
                        <td class="td_image"><img width=100 src="http://ww3.sinaimg.cn/bmiddle/8f56226dtw1eekaswnjzvj20ci0cimy8.jpg"></td>
						<td class="td_content">&lt;p&gt;&lt;span style=&quot;COLOR:...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">2014-03-18</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=9" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=9" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=9" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=9">内容排版</a>]
						</td>
						</tr>

                                                            <tr class="odd" id="tr_8">
                        <td class="td_id">8</td>
                        <td class="td_kind">
                                                        爱情夜话                                                                                                                                        </td>
                        <td class="td_title">男友最受不了的9大“女汉子”行为 </td>
                        <td class="td_image"><img width=100 src="http://i1.sinaimg.cn/ast//t/2014-03-06/U5593P54T3D107221F389DT20140306112800_small_270x270.jpg"></td>
						<td class="td_content">&lt;p&gt;【1】在男友面前无所顾忌地放屁...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">2014-03-09</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=8" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=8" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=8" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=8">内容排版</a>]
						</td>
						</tr>

                                                            <tr class="" id="tr_7">
                        <td class="td_id">7</td>
                        <td class="td_kind">
                                                                                                                                                                        星座分析                        </td>
                        <td class="td_title">十二星座男人最适合做什么？</td>
                        <td class="td_image"><img width=100 src=""></td>
						<td class="td_content">&lt;p&gt;...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">2014-01-14</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=7" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=7" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=7" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=7">内容排版</a>]
						</td>
						</tr>

                                                            <tr class="odd" id="tr_6">
                        <td class="td_id">6</td>
                        <td class="td_kind">
                            性格分析                                                                                                                                                                    </td>
                        <td class="td_title"> 占星与玛法达星座运势  </td>
                        <td class="td_image"><img width=100 src=""></td>
						<td class="td_content">未来一周，理财部分就个别星座而言，大环境出现乌云笼罩、...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">1970-01-01</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=6" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=6" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=6" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=6">内容排版</a>]
						</td>
						</tr>

                                                            <tr class="" id="tr_5">
                        <td class="td_id">5</td>
                        <td class="td_kind">
                            性格分析                                                                                                                                                                    </td>
                        <td class="td_title">星座分析里最不可思议最到位的文章</td>
                        <td class="td_image"><img width=100 src=""></td>
						<td class="td_content"> 白羊男事业心重疼老婆 脾气大一点就着...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">2014-05-05</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=5" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=5" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=5" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=5">内容排版</a>]
						</td>
						</tr>

                                                            <tr class="odd" id="tr_4">
                        <td class="td_id">4</td>
                        <td class="td_kind">
                            性格分析                                                                                                                                                                    </td>
                        <td class="td_title">每一个现在都是我们以后的回忆</td>
                        <td class="td_image"><img width=100 src="http://i0.sinaimg.cn/ast//t/2014-01-09/U5593P54T3D104987F389DT20140109121427_small_270x270.jpg"></td>
						<td class="td_content">每一个现在，都是我们以后的记忆。...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">1970-01-01</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=4" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=4" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=4" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=4">内容排版</a>]
						</td>
						</tr>

                                                            <tr class="" id="tr_3">
                        <td class="td_id">3</td>
                        <td class="td_kind">
                                                                                                                                            治愈语录                                                    </td>
                        <td class="td_title">爱迟早属于你</td>
                        <td class="td_image"><img width=100 src="http://i3.sinaimg.cn/ast//t/2014-01-07/U5593P54T3D104889F389DT20140107115211_small_270x270.jpg"></td>
						<td class="td_content">你要相信世界上一定有你的爱人，无论你此刻正被光芒环绕被...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">2014-01-14</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=3" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=3" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=3" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=3">内容排版</a>]
						</td>
						</tr>

                                                            <tr class="odd" id="tr_2">
                        <td class="td_id">2</td>
                        <td class="td_kind">
                                                                                                                                            治愈语录                                                    </td>
                        <td class="td_title">成长是一种磨砺</td>
                        <td class="td_image"><img width=100 src="http://i0.sinaimg.cn/ast//t/2014-01-06/U5593P54T3D104824F389DT20140106141210_small_270x270.jpg"></td>
						<td class="td_content">鸡蛋从外打破，是食物；从内打破，是生命。人生，从外打破...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">2014-01-02</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=2" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=2" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=2" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=2">内容排版</a>]
						</td>
						</tr>

                                                            <tr class="" id="tr_1">
                        <td class="td_id">1</td>
                        <td class="td_kind">
                                                                                    两性话题                                                                                                            </td>
                        <td class="td_title">十二星座最脆弱时想什么</td>
                        <td class="td_image"><img width=100 src="http://i2.sinaimg.cn/ast//t/2014-01-08/U5593P54T3D104928F389DT20140108110624_small_270x270.jpg"></td>
						<td class="td_content">&lt;p&gt;人在最脆弱最无助的时候，连天上的星星发出的温柔光...</td>
                        <td class="td_click_count">0</td>
                        <td class="td_create_time">2013-12-30</td>
                        <td>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_update_dialog" data-opt_type="update" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=get&id=1" data-opt_action="http://admin.mayhope.com/?p=admin&s=article&a=update&id=1" alt="文章编辑" title="文章编辑" >编辑</a>] <br/>
							[<a href="javascript:void(0);" class="opt"  data-opt_id="article_delete" data-opt_type="delete" data-opt_url="http://admin.mayhope.com/?p=admin&s=article&a=delete&id=1" alt="文章删除" title="文章删除" >删除</a>] <br/> 
							[<a href="/?s=article&a=ueditor&id=1">内容排版</a>]
						</td>
						</tr>

                             
                        </tbody>
                        <thead>
                            <tr>
                        <th>ID</th>
                        <th>分类</th>
                        <th>标题</th>
						<th>图片</th>
                        <th>内容</th>
                        <th>点击</th>
                        <th>评论</th>
                        <th>时间</th>
                        <th>操作</th></tr>

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
<div id="article_update_dialog" style="display:none;" title="文章编辑">
	<form class="ui-form" action="" method="post"><table align="center" width="100%"><tbody>
		<tr class="field-group">
			<td class="field-header">标题：</td>
			<td class="field-content"><input type="text" class="ui-text-dialog" name="title" value="" /></td>
		</tr>
		<tr class="field-group">
			<td class="field-header">图片：</td>
			<td class="field-content"><input type="text" class="ui-text-dialog" name="image" value="" /></td>
		</tr>
		<tr class="field-group">
			<td class="field-header">内容：</td>
			<td class="field-content">
				<textarea name="content" style="width:300px;height:100px;"></textarea>
			</td>
		</tr>
		<tr class="field-group">
			<td class="field-header">分类：</td>
			<td class="field-content">
                 <select name="kind">
                                              <option value="1">性格分析</option>
                                              <option value="2">爱情夜话</option>
                                              <option value="3">两性话题</option>
                                              <option value="4">婚恋心理</option>
                                              <option value="5">治愈语录</option>
                                              <option value="6">星座分析</option>
                                      </select>
            </td>
		</tr>
		<tr class="field-group">
			<td class="field-header">推荐位置：</td>
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
			<td class="field-header">点击：</td>
			<td class="field-content"><input type="text" class="ui-text-dialog" name="click_count" value="" /></td>
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
		</tbody></table>
	</form>
</div>
<!--form end-->
<script type="text/javascript">
    function beginOpt(obj) {
    switch (obj.data("opt_id")) {
        case "article_delete":
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
        case "article_update_dialog":
                if (data.status.code == "0") {
                var result = data.data;
            for (var i in result) {
                obj.parent("td").parent("tr").find(".td_" + i).html(result[i]);
            }
        }
        break;
        //删除
        case "article_delete":
                if (data.status.code == "0") {
                obj.parent("td").parent("tr").addClass("del");
                    //reloadList('http://admin.mayhope.com/?s=article&amp;a=view');
        }
        break;
        //逻辑删除
        case "article_logic_delete":
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
        case "article_logic_resume":
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