<?php

namespace hsC;

class member {

    public function login(){
        
        checkSign();
        
        $memberModel = new \hsModel\member();

        $memberModel->login();
    }

    public function codeToSession(){
		$url =  "https://api.weixin.qq.com/sns/jscode2session?appid=".HS_APPID.
        "&secret=".HS_SECRET."&js_code=".$_GET['code']."&grant_type=authorization_code";
		
		$curl = new \hsTool\curl();
		$res = $curl->get($url);
		echo $res;
	}
    
}