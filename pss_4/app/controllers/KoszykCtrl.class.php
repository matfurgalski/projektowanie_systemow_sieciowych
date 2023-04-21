<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;


class KoszykCtrl {

    private $id;
    private $data;
    
 
    public function action_koszyk() {

     
        $this->data = App::getDB()->select("produkty_has_user", [
            "[><]produkty" => ["Produkty_idProdukty" => "idProdukty"]
        ], [
            "produkty.idProdukty",
            "produkty.nazwa",
            "produkty.cena",
            "produkty.firma",
            "produkty.zdjecie",
            "produkty.idTyp_odziezy",           
            "produkty.rozmiar",
            "produkty_has_user.User_idUser",
            "produkty_has_user.id",
            "produkty_has_user.ilosc"
        ], [
            "produkty_has_user.User_idUser" => $_SESSION["iduser"]
        ]);

            $total = 0;
        foreach ($this->data as &$p) {
            $total = $total + floatval($p["ilosc"])*(floatval($p["cena"]));
        }

      

       

        App::getSmarty()->assign('data', $this->data); 
        App::getSmarty()->assign('total', $total);          
        App::getSmarty()->display("Koszyk.tpl");
        
    }

    public function action_usunProdukt() {
        $this->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

        App::getDB()->delete("produkty_has_user", [
            "AND" => [
                
                "id" => $this->id
            ]
            ]);

            $this->data = App::getDB()->select("produkty_has_user", [
                "[><]produkty" => ["Produkty_idProdukty" => "idProdukty"]
            ], [
                "produkty.idProdukty",
                "produkty.nazwa",
                "produkty.cena",
                "produkty.firma",
                "produkty.zdjecie",
                "produkty.idTyp_odziezy",           
                "produkty.rozmiar",
                "produkty_has_user.User_idUser",
                "produkty_has_user.id",
                "produkty_has_user.ilosc"
            ], [
                "produkty_has_user.User_idUser" => $_SESSION["iduser"]
            ]);
            
            $total = 0;
            foreach ($this->data as &$p) {
                $total = $total + floatval($p["ilosc"])*(floatval($p["cena"]));
            }
    
          
    
            $_SESSION["total"] = strval($total);

  

        App::getSmarty()->assign('data', $this->data);           
        App::getRouter()->redirectTo('koszyk');
        
        
    }

 


    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_koszykAdd() {

        $this->data = App::getDB()->select("produkty_has_user", [
            "[><]produkty" => ["Produkty_idProdukty" => "idProdukty"]
        ], [
            "produkty.idProdukty",
            "produkty.nazwa",
            "produkty.cena",
            "produkty.firma",
            "produkty.zdjecie",
            "produkty.idTyp_odziezy",           
            "produkty.rozmiar",
            "produkty_has_user.User_idUser",
            "produkty_has_user.id",
            "produkty_has_user.ilosc"
        ], [
            "produkty_has_user.User_idUser" => $_SESSION["iduser"]
        ]);
		        
 
        
        if ($this->validateEdit()) {

            $add=true;
            foreach ($this->data as &$p) {
                if($p["idProdukty"]==$this->id)
                    $add=false;
                
            }

            if($add){
            try {

                App::getDB()->insert("produkty_has_user", [
                    "Produkty_idProdukty" => $this->id,
                    "User_idUser" =>  $_SESSION["iduser"],
                    "ilosc" =>  1
                        
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }else{
            App::getDB()->update("produkty_has_user", [
                "ilosc[+]" => 1
            ], [
                "Produkty_idProdukty" => $this->id
            ]);

        }
        }

        $this->data = App::getDB()->select("produkty_has_user", [
            "[><]produkty" => ["Produkty_idProdukty" => "idProdukty"]
        ], [
            "produkty.idProdukty",
            "produkty.nazwa",
            "produkty.cena",
            "produkty.firma",
            "produkty.zdjecie",
            "produkty.idTyp_odziezy",           
            "produkty.rozmiar",
            "produkty_has_user.User_idUser",
            "produkty_has_user.id",
            "produkty_has_user.ilosc"
        ], [
            "produkty_has_user.User_idUser" => $_SESSION["iduser"]
        ]);

        $total = 0;
        foreach ($this->data as &$p) {
            $total = $total + floatval($p["ilosc"])*(floatval($p["cena"]));
        }

        $_SESSION["total"] = strval($total);

        App::getRouter()->redirectTo('sklep');
    }



    public function action_zamow() {

        $count = App::getDB()->count("produkty_has_user");

        if($count != 0){

        App::getDB()->insert("zamowienie", [
            "data" =>  date("Y-m-d H:i:s") 
                
        ]);

        $id = App::getDB()->id();

            $this->data = App::getDB()->select("produkty_has_user", [
                "[><]produkty" => ["Produkty_idProdukty" => "idProdukty"]
            ], [
                "produkty.idProdukty",
                "produkty.nazwa",
                "produkty.cena",
                "produkty.firma",
                "produkty.zdjecie",
                "produkty.idTyp_odziezy",           
                "produkty.rozmiar",
                "produkty_has_user.User_idUser",
                "produkty_has_user.id",
                "produkty_has_user.ilosc"
            ], [
                "produkty_has_user.User_idUser" => $_SESSION["iduser"]
            ]);
            
          

            foreach ($this->data as &$p) {

                App::getDB()->insert("zamowienie_has_user", [
                    "Produkty_idProdukty" => $p["idProdukty"],
                    "User_idUser" =>  $_SESSION["iduser"],
                    "ilosc" =>  $p["ilosc"],
                    "zamowienie_idzamowienie" =>  $id
                     
                ]);


                App::getDB()->delete("produkty_has_user", [
                    "AND" => [
                        "User_idUser" => $_SESSION["iduser"]                       
                    ]
                ]);

                $_SESSION["total"] = "0.00";

            }

        App::getSmarty()->assign('data', $this->data);           
        App::getSmarty()->display('PotwierdzenieZamowienia.tpl');
        }else{
            App::getSmarty()->assign('data', $this->data);
            App::getSmarty()->display('PustyKoszyk.tpl');
        }
        
    }

    public function generateView() {
        App::getSmarty()->display('Koszyk.tpl');        
    }
    
 
}