<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;


class ListaProduktowCtrl {

    private $data;
    
    public function action_listaProduktow() {
		        
        $this->data = App::getDB()->select("produkty", [
            "nazwa",
            "rozmiar",
            "cena",
            "firma",
            "zdjecie",
            "idProdukty",
            "idTyp_odziezy",

        ]);
  
        
        App::getSmarty()->assign("data",$this->data);        
        App::getSmarty()->display("ListaProduktow.tpl");
        
    }
    
}