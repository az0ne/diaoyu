<?php
/**
* 路由配置信息
* 具体配置请参考http://wiki.intra.sina.com.cn/pages/viewpage.action?pageId=5509598
*/
class RouterConfig {
    static public $baseUrl = array(
        DAGGER_APP_HOPE=>'',
        DAGGER_APP_HOME=>'mayhope.com/home/',
        DAGGER_APP_ADMIN=>''
    );

    //注：如果没有设置以上的默认路由，配置数组的最后一个为默认路由，请勿轻易修改
    static public $config = array(
        DAGGER_APP_HOPE=>array(
                'public' => array(
					'view'=>'',	
				),
				'detail' => array(
					'view'=>'',	
				),
				'fortune' => array(
					'view'=>'',	
				),
				'astro' =>array(
					'result'=>'<vid?\d+>/<rid?\d+>',
					'notice'=>'<vid?\d+>',
					'question'=>'<vid?\d+>/<qid?\d+>',
					'view'=>'<vid?\d+>',	
				),
				'item'=>array(
					'view'=>'',	
				    'detail'=>'<id?\d+\.html>',
                ),
				'm'=>array(
                    'view'=>'<id?\d+>',
                ),
                'match'=>array(
                    'result'=>'',
                    'view'=>'',
                ),
				
		),
        DAGGER_APP_HOME => array(
            'default'=>array(
                    'view'=>'',
            )
        ),
        DAGGER_APP_ADMIN => array(
            'admin'=>array(
                'login'=>''
            )
        ),
    );

    //默认controller或默认action
    static public $defaultRouter = array(
        DAGGER_APP_HOPE => array(
            'default_controller' => 'public',
            'default_action' => array(
                'm' => 'view',  //Mp3Controller的默认action为view
				'public'=>'view',
				'detail'=>'view',
				'fortune'=>'view',
				'item'=>'view',
				'astro'=>'view',
			    'match'=>'view',
            )
        ),
        DAGGER_APP_HOME => array(
            'default_controller' => 'default',
            'default_action' => array(
				'default'=>'view',
            )
        )
    );
    private function __construct() {
        return;
    }
}
