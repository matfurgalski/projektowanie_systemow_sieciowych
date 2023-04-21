<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class HomeCtrl {

 
    public function action_home() {   
        
        App::getSmarty()->display("Home.tpl");    
    }
    
}
