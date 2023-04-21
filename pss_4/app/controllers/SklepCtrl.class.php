<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\Validator;
use core\ParamUtils;


class SklepCtrl {

    private $data;
    private $id;

    
    public function action_sklep() {

        $this->data = App::getDB()->select("produkty", [
            "nazwa",
            "rozmiar",
            "cena",
            "firma",
            "zdjecie",
            "idProdukty",
            "idTyp_odziezy",

        ]);

        $this->data = App::getDB()->select("produkty", [
            "[><]typ_odziezy" => ["idTyp_odziezy" => "idTyp_odziezy"]
        ], [
            "produkty.idProdukty",
            "produkty.nazwa",
            "produkty.cena",
            "produkty.firma",
            "produkty.zdjecie",
            "produkty.idTyp_odziezy",
            "typ_odziezy.typ",
            "produkty.rozmiar",
        ]);
        App::getSmarty()->assign('data', $this->data);    
        App::getSmarty()->display("Sklep.tpl");
        
    }

    public function action_sklepMen() {

    

        $this->data = App::getDB()->select("produkty", [
            "[><]typ_odziezy" => ["idTyp_odziezy" => "idTyp_odziezy"]
        ], [
            "produkty.idProdukty",
            "produkty.nazwa",
            "produkty.cena",
            "produkty.firma",
            "produkty.zdjecie",
            "produkty.idTyp_odziezy",
            "typ_odziezy.typ",
            "produkty.rozmiar",
        ], [
            "produkty.idTyp_odziezy" => 1
        ]);

        App::getSmarty()->assign('data', $this->data);           
        App::getSmarty()->display("SklepMen.tpl");
        
    }

    public function action_sklepWomen() {

    

        $this->data = App::getDB()->select("produkty", [
            "[><]typ_odziezy" => ["idTyp_odziezy" => "idTyp_odziezy"]
        ], [
            "produkty.idProdukty",
            "produkty.nazwa",
            "produkty.cena",
            "produkty.firma",
            "produkty.zdjecie",
            "produkty.idTyp_odziezy",
            "typ_odziezy.typ",
            "produkty.rozmiar",
        ], [
            "produkty.idTyp_odziezy" => 2
        ]);

        App::getSmarty()->assign('data', $this->data);           
        App::getSmarty()->display("SklepWomen.tpl");
        
    }

    public function action_sklepKids() {

    

        $this->data = App::getDB()->select("produkty", [
            "[><]typ_odziezy" => ["idTyp_odziezy" => "idTyp_odziezy"]
        ], [
            "produkty.idProdukty",
            "produkty.nazwa",
            "produkty.cena",
            "produkty.firma",
            "produkty.zdjecie",
            "produkty.idTyp_odziezy",
            "typ_odziezy.typ",
            "produkty.rozmiar",
        ], [
            "produkty.idTyp_odziezy" => 3
        ]);

        App::getSmarty()->assign('data', $this->data);           
        App::getSmarty()->display("SklepKids.tpl");
        
    }

  
    
}
