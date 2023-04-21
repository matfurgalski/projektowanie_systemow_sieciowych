<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\EdycjaUzytkownikowForm;
use core\Validator;

class EdycjaUzytkownikowCtrl {

    private $form;
    private $id;
    private $rola = array();
    private $test = array();
   
    
    

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new EdycjaUzytkownikowForm();   
    }

    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->test = array();

        $this->form->idUser = ParamUtils::getFromRequest('idUser', true, 'Błędne wywołanie aplikacji1');
        $this->form->login = ParamUtils::getFromRequest('login', true, 'Błędne wywołanie aplikacji2');
        $this->form->password = ParamUtils::getFromRequest('password', true, 'Błędne wywołanie aplikacji3');
        $this->form->email = ParamUtils::getFromRequest('email', true, 'Błędne wywołanie aplikacji4');
        $this->form->data_modyfikacji = ParamUtils::getFromRequest('data_modyfikacji', true, 'Błędne wywołanie aplikacji5');
        $this->form->data_utworzenia = ParamUtils::getFromRequest('data_utworzenia', true, 'Błędne wywołanie aplikacji6');
        $this->form->id_modyfikacja = ParamUtils::getFromRequest('id_modyfikacja', true, 'Błędne wywołanie aplikacji7');
        $pass = ParamUtils::getFromRequest('password2', true, 'Błędne wywołanie aplikacji3');
        
        $user = ParamUtils::getFromRequest('defaultCheck1');
        $pracownik = ParamUtils::getFromRequest('defaultCheck2');
        $admin = ParamUtils::getFromRequest('defaultCheck3');

        if(!empty($pass))
        $this->form->password = md5($pass);

        if(!empty($user))
        array_push($this->test,$user);
        if(!empty($pracownik))
        array_push($this->test,$pracownik);
        if(!empty($admin))
        array_push($this->test,$admin);



     

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->login))) {
            Utils::addErrorMessage('Wprowadź login');
        }
        if (empty(trim($this->form->password))) {
            Utils::addErrorMessage('Wprowadź hasło');
        }
        if (empty(trim($this->form->email))) {
            Utils::addErrorMessage('Wprowadź e-mail');
        }
 
        if (App::getMessages()->isError())
            return false;

            

        return !App::getMessages()->isError();
    }

    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->idUser = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        
        return !App::getMessages()->isError();

    }
    
    public function action_edycjaUzytkownika() {
		        
        if ($this->validateEdit()) {
            try {
                
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $record = App::getDB()->get("user", "*", [
                    "idUser" => $this->form->idUser
                ]);
                
                
                // 2.1 odczyt z bazy danych roli o podanym ID
                $record2 = App::getDB()->select("user_has_role", "*", [
                    "User_idUser" => $this->form->idUser
                ]);
          
                
  

                // 2.2 jeśli osoba istnieje to wpisz dane do obiektu formularza
                $this->form->idUser = $record['idUser'];
                $this->form->login = $record['login'];
                $this->form->password = $record['password'];
                $this->form->data_modyfikacji = $record['data_modyfikacji'];
                $this->form->email = $record['email'];
                $this->form->data_utworzenia = $record['data_utworzenia'];
                $this->form->id_modyfikacja = $record['id_modyfikacja'];
                

                $this->rola = $record2;

                

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
  
        
        $this->generateView();
        
    }

    public function action_dodajUzytkownika() {

        $this->generateView();    
    }

    public function action_usunUzytkownikaZListy() {
        // 1. walidacja id osoby do usuniecia
        if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("user", [
                    "idUser" => $this->form->idUser
                ]);

                App::getDB()->delete("user_has_role", [
                    "User_idUser" => $this->form->idUser
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Przekierowanie na stronę listy osób
        App::getRouter()->forwardTo('listaUzytkownikow');
    }

    public function action_zapiszUzytkownika() {

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie z szyfrowaniem hasla

            
            try {
                //2.1 Nowy rekord
                if ($this->form->idUser == '') {
                    
                       
                        App::getDB()->insert("user", [
                            "login" => $this->form->login,
                            "password" => $this->form->password,
                            "email" => $this->form->email,
                            "data_modyfikacji" => date("Y-m-d H:i:s"),
                            "data_utworzenia" => date("Y-m-d H:i:s"),
                            "id_modyfikacja" => $_SESSION["iduser"] 
                        ]);
                        //2.2 Pobranie ostatniego id
                        $this->id = App::getDB()->id();

           
                         //2.3 Zapisanie roli
                        foreach ($this->test as &$p){
                        App::getDB()->insert("user_has_role", [
                        "User_idUser" => $this->id,
                        "Role_idRole" => $p,                   
                        "data" => date("Y-m-d H:i:s"),
                        "aktywna" => 1
                        
                    ]);
                }
                
                } else {
                    //2.4 Edycja rekordu o danym ID

                    

                    App::getDB()->update("user", [
                        "login" => $this->form->login,
                        "password" => $this->form->password,
                        "email" => $this->form->email,
                        "data_modyfikacji" => date("Y-m-d H:i:s"),
                        "id_modyfikacja" => $_SESSION["iduser"]
                        
                            ], [
                        "idUser" => $this->form->idUser
                    ]);
                    //2.5 Usuniecie wszystkich roli o danym ID
                    App::getDB()->delete("user_has_role", [
                        "User_idUser" => $this->form->idUser
                    ]);
           
                    //2.6 Zapisanie roli o danym ID
                    foreach ($this->test as &$p){
                    App::getDB()->insert("user_has_role", [
                        "User_idUser" => $this->form->idUser,
                        "Role_idRole" => $p,                   
                        "data" => date("Y-m-d H:i:s"),
                        "aktywna" => 1
                        
                    ]);
                }

                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            // 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)


            App::getRouter()->forwardTo('listaUzytkownikow');
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateView();
        }
    }

    public function generateView() {
        
        App::getSmarty()->assign('role', $this->rola);
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('EdycjaUzytkownikow.tpl');
    }

    
}