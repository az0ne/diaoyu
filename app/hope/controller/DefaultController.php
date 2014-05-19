<?php
class DefaultController extends BaseController{
	
	public function __construct($state, $action){
		parent::__construct($state, $action);
	}		  

    
    public function timePass($time){
       
        $oneMinute = 60;
        $oneHour   = 3600;
        $oneDay    = 86400;
        $oneMonth  = 2592000;
        $oneYear   = 31104000;
        $tmp = '';
        $timeCha = time()-$time;
        if($timeCha < $oneMinute){
            $second = $timeCha;
            $tmp = $second."秒前";
        }else if($timeCha >= $oneMinute && $timeCha < $oneHour){
            $minute = floor($timeCha/$oneMinute);
            $tmp    = $minute."分钟之前";
        }else if($timeCha >= $oneHour && $timeCha < $oneDay){
            $hour = floor($timeCha/$oneHour);
            $tmp  = $hour."小时之前";
        }else if($timeCha >= $oneDay && $timeCha < $oneMonth){
            $day  = floor($timeCha/$oneDay);
            $tmp  = $day."天之前";
        }else if($timeCha >= $oneMonth && $timeCha < $oneYear){
            $month = floor($timeCha/$oneMonth);
            $tmp   = $month."月之前";
        }else if($timeCha >=$oneYear){
            $year  = floor($timeCha/$oneYear);
            $tmp   = $year."年之前";
        }
        return $tmp; 
    } 
}
