<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;


class LoginCtrl {

    private $form;
    private $id;
    
    
    
    

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
        
       
    }
   

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->haslo = ParamUtils::getFromRequest('haslo');
        
        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->haslo)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

            

        return !App::getMessages()->isError();
    }
    
    public function action_login() {
		        
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            $this->form->haslo =  md5($this->form->haslo);

            $isAccount = App::getDB()->has("user", [
                "AND" => [
                    "OR" => [
                        "login" => $this->form->login
                        
                    ],
                    "password" => $this->form->haslo
                ]
            ]);

            $record = App::getDB()->get("user", "*", [
                "login" => $this->form->login
            ]);
            
            if($isAccount){
            $this->id = $record['idUser'];

            $role = App::getDB()->select("user_has_role", [
                "[><]role" => ["Role_idRole" => "idRole"]
            ], [
                "user_has_role.User_idUser",
                "user_has_role.Role_idRole",
                "role.nazwa",
            ],[
                "user_has_role.User_idUser" => $this->id
            ]);
        }
           
                   
            if ($isAccount) {
                Utils::addInfoMessage('Hasło poprawne');
                Utils::addErrorMessage('Poprawnie zalogowano do systemu');
                RoleUtils::addRole('user');
                $_SESSION["rola"] = "user";
                foreach ($role as &$p) {
                    if($p["nazwa"] == "pracownik"){
                        $_SESSION["rola"] = $p["nazwa"];
                        RoleUtils::addRole($p["nazwa"]);
                    }
                    if($p["nazwa"] == "admin"){
                        $_SESSION["rola"] = $p["nazwa"];
                        RoleUtils::addRole($p["nazwa"]);    
                    }
                }

                
                $_SESSION["success"] = $this->form->login;
                $_SESSION["iduser"] = $this->id;
                

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
                
                App::getRouter()->redirectTo('home');

            } else {
                Utils::addInfoMessage('Hasło niepoprawne');
                Utils::addErrorMessage('NiePoprawnie zalogowano do systemu');
                //niezalogowany => pozostań na stronie logowania
                $this->generateView();
            }
          

        } else {
            Utils::addErrorMessage('NiePoprawnie zalogowano do systemu');
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
       
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_loginRedirect() {
        Utils::addInfoMessage('Zaloguj się aby korzystać z koszyka.');
        $this->generateView();
    }

    public function action_logout() {
	    session_destroy();
        App::getRouter()->redirectTo('home');
        
    }
    
    public function generateView() {
        App::getSmarty()->assign('form', $this->form);  // dane formularza do widoku  
        App::getSmarty()->display('Login.tpl');
        
    }
    
}

