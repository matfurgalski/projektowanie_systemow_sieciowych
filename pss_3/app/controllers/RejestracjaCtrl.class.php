<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\RejestracjaForm;
use PDOException;

class RejestracjaCtrl {

    private $form;

    public function __construct(){
		
		$this->form = new RejestracjaForm();		
	}

    public function validate() {
        //0. Pobranie parametrów z walidacją
        $this->form->login = ParamUtils::getFromRequest('login', true, 'Błędne wywołanie aplikacji');
        $this->form->haslo = ParamUtils::getFromRequest('haslo', true, 'Błędne wywołanie aplikacji');
        $this->form->haslo2 = ParamUtils::getFromRequest('haslo2', true, 'Błędne wywołanie aplikacji');
        $this->form->email = ParamUtils::getFromRequest('email', true, 'Błędne wywołanie aplikacji');
        

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->login))) {
            Utils::addErrorMessage('Wprowadź login');
        }
        if (empty(trim($this->form->haslo))) {
            Utils::addErrorMessage('Wprowadź hasło');
        }
        if (empty(trim($this->form->haslo2))) {
            Utils::addErrorMessage('Powtórz hasło');
        }
        if (empty(trim($this->form->email))) {
            Utils::addErrorMessage('Wprowadź email');
        }
        if ($this->form->haslo!=$this->form->haslo2) {
            Utils::addErrorMessage('Hasła nie są takie same');
        }

        if (App::getMessages()->isError())
            return false;


        return !App::getMessages()->isError();
    }
    

    public function action_rejestracjaShow() {
        $this->generateView();
    }

    public function action_rejestracja() {
		        
      
	// 1. Walidacja danych formularza (z pobraniem)
    if ($this->validate()) {
        // 2. Zapis danych w bazie
        try {

       
                //sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
                $exist = App::getDB()->has("user", [
                    
                        "OR"=>[
                        "login"=>$this->form->login,
                        "email"=>$this->form->email
                        ]
                    ]);

                            
                    $this->form->haslo =  md5($this->form->haslo);

                if (!$exist) {
                    App::getDB()->insert("user", [
                        "login" => $this->form->login,
                        "password" => $this->form->haslo,
                        "email" => $this->form->email,
                        "id_modyfikacja" => $this->form->login,      
                    ]);


                    $record = App::getDB()->get("user", "*", [
                        "login" => $this->form->login
                    ]);
     
                    App::getDB()->update("user", [

                        "id_modyfikacja" => $record['idUser']
                        
                            ], [
                        "login" => $this->form->login
                    ]);

                    App::getDB()->insert("user_has_role", [
                        "User_idUser" => $record['idUser'],
                        "Role_idRole" => 1,
                        "aktywna" => 1,   
                        "data" => date("Y-m-d H:i:s")  
                    ]);
          
                    
                } else { //za dużo rekordów
                    // Gdy za dużo rekordów to pozostań na stronie
                    Utils::addInfoMessage('Nazwa lub email juz istnieje.');
                    $this->generateView(); //pozostań na stronie edycji
                    exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
                }
                

            Utils::addInfoMessage('Pomyślnie zapisano rekord');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        // 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
        App::getSmarty()->display('PotwierdzenieRejestracji.tpl');
    } else {
        // 3c. Gdy błąd walidacji to pozostań na stronie
        $this->generateView();
    }
                   
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('Rejestracja.tpl');
    }
    

}
