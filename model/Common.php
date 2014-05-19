<?php
class Common extends BaseModelCommon {

	public  static function filterPostParam($paramKey, $defaultType = 'int'){
		if(isset($_POST[$paramKey])){
			if($defaultType=='int'){
				return intval($_POST[$paramKey]);
			}else{
				return htmlspecialchars($_POST[$paramKey], ENT_QUOTES);
			}
		}else{
			return false;
		}
	}	

	public  static function filterGetParam($paramKey, $defaultType = 'int'){
		if(isset($_GET[$paramKey])){
			if($defaultType=='int'){
				return intval($_GET[$paramKey]);
			}else{
				return htmlspecialchars($_GET[$paramKey], ENT_QUOTES);
			}
		}else{
			return false;
		}
	}
    
    public static function show(){
        $ip   = Ip::getClientIp(); 
        $url  = "http://ip.taobao.com/service/getIpInfo2.php?ip={$ip}";
        $data = Http::get($url);
        $data = json_decode($data, true);
        $city = false;
        if(isset($data['code']) && $data['code']==0){
            $city = $data['data']['city'];
        } 
        return $city;
    }

}
