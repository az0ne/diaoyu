<?php
class Ip extends BaseModelIp {

    public static function showCity(){
        $ip   = Ip::getClientIp(); 
        $url  = "http://ip.taobao.com/service/getIpInfo2.php?ip={$ip}";
        $data = Http::get($url);
        $data = json_decode($data, true);
        return $data;
    }
    
}
