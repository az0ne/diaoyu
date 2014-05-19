<?php
set_time_limit(0);
define('DAGGER_PATH_ROOT', rtrim(dirname(__FILE__), '/') . '/../');
require DAGGER_PATH_ROOT . 'config/SysInitConfig.php';//用户配置
require DAGGER_PATH_ROOT . 'libs/DaggerSysInitConfig.php';//系统配置
require DAGGER_PATH_LIBS . 'basics.php';//__autoload函数
require DAGGER_PATH_ROOT . 'config/DBConfig.php';//载入数据库配置

