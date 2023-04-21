<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\SzukajUzytkownikaForm;

class ListaUzytkownikowCtrl {

    private $data;
    private $rola = array();
    private $page = 1;
    
    
    public function __construct() {   
        $this->form = new SzukajUzytkownikaForm();
    }

    
    public function action_listaUzytkownikow() { 

        $this->form->login = ParamUtils::getFromRequest('sf_login');
      
        $this->page = ParamUtils::getFromCleanURL(1, true);

        if(!empty(ParamUtils::getFromCleanURL(2, true)))
        $this->form->login = ParamUtils::getFromCleanURL(2, true);

        $search_params = []; 
        if (isset($this->form->login) && strlen($this->form->login) > 0) {
            $search_params['login[~]'] = $this->form->login . '%'; 
        }

        
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }

        if($this->page == 0)
        $this->page = 1;

        $limit = 3;        
        $offset = $limit*($this->page-1);

        $where ["LIMIT"] = [$offset, $limit];

        $this->data = App::getDB()->select("user", [
                "idUser",
                "login",
                "password",
                "email",
                "data_modyfikacji",
                "data_utworzenia",
                "id_modyfikacja"      
        ], $where);
        
        
        $all = (count($this->data)* $this->page);
        

        $countUser = App::getDB()->count("user");
        
        $sum = count($this->data);
        
        
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
        App::getSmarty()->assign("page",$this->page); 
        App::getSmarty()->assign('searchForm', $this->form);    
        App::getSmarty()->assign("sum",$sum); 
        App::getSmarty()->assign("limit",$limit); 
        App::getSmarty()->assign("countUser",$countUser); 
        App::getSmarty()->assign("all",$all); 
        App::getSmarty()->display("ListaUzytkownikow.tpl");
        
    }
    
}