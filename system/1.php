<?php
include 'global.php';
$rs = MyRedis::getInstance();
$mc = new MyMemcache();
$mc->set('a', array(1,2,3));
$rs->set('a', array(1,2,3));
print_r($rs->get('a'));
print_r($mc->get('a'));
