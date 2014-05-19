<?php
class WeiboClient{
	private static $_mc;	
	private static $_wb;
	public function __construct($token){
		self::$_wb = new SaeTClientV2( WB_AKEY , WB_SKEY , $token);
		self::$_mc = new MyMemcache();
	}

	public function show_user_by_id($uid, $cache=true){
		$data = array();
		$mckey = __CLASS__.__METHOD__.$uid;
		if($cache){
			$data = self::$_mc->get($mckey);
		}
		if(empty($data)){
			$wb_user = self::$_wb->show_user_by_id($uid);
			if(!isset($wb_user['error_code'])){
				$data['id']				   = $wb_user['id'];
				$data['screen_name']	   = $wb_user['screen_name'];
				$data['location']		   = $wb_user['location'];
				$data['profile_image_url'] = $wb_user['profile_image_url'];
				$data['description']	   = $wb_user['description'];
				$data['followers_count']   = $wb_user['followers_count'];
				$data['friends_count']     = $wb_user['friends_count'];
				self::$_mc->set($mckey, $data, 120);
			}else{
				$data = $wb_user;
			}
		}
		return $data;
	}
}
