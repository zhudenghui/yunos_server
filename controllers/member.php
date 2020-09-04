<?php

namespace hsC;

class member {

    public function login(){
        
        echo 123;

        return false;
        
        $memberModel = new \hsModel\member();

        $memberModel->login();
    }
    
}