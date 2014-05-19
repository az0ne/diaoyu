<?php
/**
* 对应表配置信息
*/
class DictConfig {
    //管理员级别配置
    static public $adminLevelArr = array(1=>'一级管理员',1000=>'二级管理员',2000=>'三级管理员',3000=>'四级管理员');

    static public $sexArr = array(1=>'男',2=>'女');

    private function __construct() {
        return;
    }

	/**
	 *	测试类型
	 *
	 */
	public static $voteKind = array(
		1 => '两性测试',
		2 => '爱情测试',
		3 => '个性测试',
		4 => '事业测试',
		5 => '趣味测试'
	);
    
    /**
     *  文章类型
     *  
     */ 
    public static $artKind = array(
        1 => '性格分析',
		2 => '爱情夜话',
		3 => '两性话题',
		4 => '婚恋心理',
		5 => '治愈语录',
        6 => '星座分析'
    );
    
    /**
     * 内容状态
     *
     */
    public static $status = array(
        0 => '已删除',
        1 => '已通过',
        2 => '已加精' 
    );
}
