<?php
require "global.php";
$config = array(
    '1' => 'Canon',
    '2' => 'Nikon',
    '3' => 'Sony',
    '4' => 'Pentax',
    '5' => 'Panasonic',
    '6' => 'Fujifilm',
    '7' => 'Kodak',
    '8' => 'Ricoh',
    '9' => 'Samsung',
    '10'=> 'Casio',
    '11'=> 'Olympus',
);
$link = mysql_connect('localhost', 'root', 'hope');
mysql_select_db('mayhope');
//$data =  Http::get('http://pp.163.com/pp/kit/Canon/?searchType=0');
//$data =  Http::get('http://pp.163.com/pp/kit/Nikon/?searchType=0');
//$data = Http::get('http://pp.163.com/pp/kit/Sony/?searchType=0');
//$data = Http::get('http://pp.163.com/pp/kit/Pentax/?searchType=0');
//$data = Http::get('http://pp.163.com/pp/kit/PanaSonic/?searchType=0');
//$data = Http::get('http://pp.163.com/pp/kit/Fujifilm/?searchType=0');
//$data = Http::get('http://pp.163.com/pp/kit/Kodak/?searchType=0');
//$data = Http::get('http://pp.163.com/pp/kit/Ricoh/?searchType=0');
//$data =Http::get('http://pp.163.com/pp/kit/Samsung/?searchType=0');
//$data = Http::get('http://pp.163.com/pp/kit/Casio/?searchType=0');
$data = Http::get('http://pp.163.com/pp/kit/Olympus/?searchType=0');
$reg = '/<a.*?href=".*?".*?>(.*?)<\/a>/i';
$time = time();
if(preg_match_all($reg, $data, $m)){
    foreach($m[1] as $k=>$v){
        if($k>14&&$k<=216){
            $sql = "insert into equipment values('', 11, '".$v."', ".time().")";
            mysql_query($sql);
        }
    }
}
