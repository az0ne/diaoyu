<?php
class PublicController extends DefaultController {
	
	public function view() {
        $city = Common::show();
        if($city===false) {
            $city = '北京';
        }
        $this->setView('data', $city);
        $this->display('index.html');
	}	
}
