<?php
class BaseViewSmarty {
    const LEFT_DELIMITER  = '{=';
    const RIGHT_DELIMITER = '=}';
    private static $tpl = NULL;

    public function __construct () {
        if (NULL === self::$tpl) {
            self::$tpl = new Smarty();
            self::$tpl->setTemplateDir(DAGGER_PATH_APP_TPL);
            self::$tpl->setCompileDir(DAGGER_PATH_APP_TPC);
            self::$tpl->addPluginsDir(DAGGER_PATH_MYPLUGINS);
            self::$tpl->left_delimiter  = self::LEFT_DELIMITER;
            self::$tpl->right_delimiter = self::RIGHT_DELIMITER;
            self::$tpl->compile_locking = false;
            
            $cache_dir = DAGGER_PATH_ROOT.'cache/'.substr(md5($_SERVER[REQUEST_URI]), 0, 2).'/';
            Common::recursiveMkdir($cache_dir);
            self::$tpl->force_compile = false; //强迫编译
            self::$tpl->debugging = true;  //调试
            self::$tpl->caching = false;   //开启缓存
            self::$tpl->cache_lifetime = 1200;  //缓存存活时间（秒）
            self::$tpl->cache_dir = $cache_dir; //设置缓存的存放路径


            //自动转义html标签，防止xss，不转义使用{=$data nofilter=}
            function escFilter ($content, $smarty) {
                return htmlspecialchars($content,ENT_QUOTES,'UTF-8');
            }
            self::$tpl->registerFilter('variable', 'escFilter');
        }
    }

    public function setView($key, $value) {
        self::$tpl->assign($key, $value);
    }

    public function __call ($func, $args) {
        return call_user_func_array(array(&self::$tpl,$func),$args);
    }
}
