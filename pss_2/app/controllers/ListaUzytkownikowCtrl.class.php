<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;

class ListaUzytkownikowCtrl {

    private $data;
    private $rola = array();
    
    public function action_listaUzytkownikow() {
		        

        $this->data = App::getDB()->select("user", [
                "idUser",
                "login",
                "password",
                "email",
                "data_modyfikacji",
                "data_utworzenia",
                "id_modyfikacja"      
        ]);

        foreach ($this->data as &$p) {

            $record = App::getDB()->select("user_has_role", [            
                "[><]user" => ["User_idUser" => "idUser"],
                "[><]role" => ["Role_idRole" => "idRole"]
            ], [
                "user.idUser",
                "role.nazwa"
            ],[
                "User_idUser" => $p["idUser"]
            ]); 

            foreach ($record as &$p)
                array_push($this->rola, $p);
        }

  
        App::getSmarty()->assign("data",$this->data); 
        App::getSmarty()->assign("rola",$this->rola);        
        App::getSmarty()->display("ListaUzytkownikow.tpl");
        
    }
    
}