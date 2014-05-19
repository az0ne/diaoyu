<?php

//*******************************************************系统配置********************************************************
define('DAGGER_ALARM_LOG_API',          'http://alarm.dagger.com/log.php'); //监控大厅域名，监控大厅下载地址：
define('DAGGER_ALARM_TMPLOG_API',       'http://alarm.dagger.com/tmplog.php'); //监控大厅域名，监控大厅下载地址：
define('DAGGER_ALARM_DEBUG_API',        'http://alarm.dagger.com/debug.php');
define('DAGGER_ALARM_XHPROF_API',       'http://alarm.dagger.com/xhprof.php');
define('DAGGER_ALARM_XHPROF_SHOW_URL',  'http://alarm.dagger.com/tools/xhprof_html/index.php');

define('DAGGER_TEMPLATE_ENGINE', 'smarty');

define('DAGGER_APP_DATA', '/var/app_data/data/');
define('DAGGER_APP_CACHE', '/var/app_data/cache/');
define('DAGGER_APP_APPLOGS', '/var/app_data/applogs/');
define('PATH_CACHE', '/var/app_data/cache/');

define( "WB_AKEY" , '1028039693' );
define( "WB_SKEY" , '94155f6b8e1e61275ab336b475a44ad7' );
define( "WB_CALLBACK_URL" , 'http://mayhope.com/?s=public&a=callback' );


define ('QQ_APP_ID', '101003018');
define ('QQ_APP_KEY', '1c22d34dd20d3b56c196359c657bce82');

//******************************************************允许的POST REFERER***************************************************
$_SERVER['SERVER_ACCEPT_REFERER'] = array('115.28.138.203', 'hope.com', 'oicu.me', 'mayhope.com', 'lapbus.com');
