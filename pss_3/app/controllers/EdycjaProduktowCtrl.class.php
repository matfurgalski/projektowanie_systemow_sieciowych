<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\EdycjaProduktowForm;
use core\Validator;

class EdycjaProduktowCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new EdycjaProduktowForm();
       
    }

    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->idProdukty = ParamUtils::getFromRequest('idProdukty', true, 'Błędne wywołanie aplikacji');
        $this->form->nazwa = ParamUtils::getFromRequest('nazwa', true, 'Błędne wywołanie aplikacji');
        $this->form->rozmiar = ParamUtils::getFromRequest('rozmiar', true, 'Błędne wywołanie aplikacji');
        $this->form->cena = ParamUtils::getFromRequest('cena', true, 'Błędne wywołanie aplikacji');
        $this->form->idTyp_odziezy = ParamUtils::getFromRequest('idTyp_odziezy', true, 'Błędne wywołanie aplikacji');
        $this->form->firma = ParamUtils::getFromRequest('firma', true, 'Błędne wywołanie aplikacji');
        $this->form->zdjecie = ParamUtils::getFromRequest('zdjecie', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->nazwa))) {
            Utils::addErrorMessage('Wprowadź nazwę');
        }
        if (empty(trim($this->form->rozmiar))) {
            Utils::addErrorMessage('Wprowadź rozmiar');
        }
        if (empty(trim($this->form->cena))) {
            Utils::addErrorMessage('Wprowadź cenę');
        }
        if (empty(trim($this->form->idTyp_odziezy))) {
            Utils::addErrorMessage('Wprowadź idTyp_odziezy');
        }
        if (empty(trim($this->form->firma))) {
            Utils::addErrorMessage('Wprowadź firmę');
        }
        if (empty(trim($this->form->zdjecie))) {
            Utils::addErrorMessage('Wprowadź zdjecię');
        }

        if (App::getMessages()->isError())
            return false;

  

        return !App::getMessages()->isError();
    }

    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->idProdukty = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
    
    public function action_edycjaProduktow() {
		        
        if ($this->validateEdit()) {
            try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $record = App::getDB()->get("produkty", "*", [
                    "idProdukty" => $this->form->idProdukty
                ]);
                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                $this->form->idProdukty = $record['idProdukty'];
                $this->form->nazwa = $record['nazwa'];
                $this->form->rozmiar = $record['rozmiar'];
                $this->form->cena = $record['cena'];
                $this->form->idTyp_odziezy = $record['idTyp_odziezy'];
                $this->form->firma = $record['firma'];
                $this->form->zdjecie = $record['zdjecie'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
  
        
        $this->generateView();
        
    }

    public function action_dodajProdukt() {
		        

        $this->generateView();
        
    }

    public function action_usunProduktZListy() {
        // 1. walidacja id produktu do usuniecia
        if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("produkty", [
                    "idProdukty" => $this->form->idProdukty
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Przekierowanie na stronę listy produktow
        App::getRouter()->forwardTo('listaProduktow');
    }

    public function action_zapiszProdukty() {

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {
                //2.1 Nowy rekord
                if ($this->form->idProdukty == '') {                 
                       
                        App::getDB()->insert("produkty", [
                            "nazwa" => $this->form->nazwa,
                            "rozmiar" => $this->form->rozmiar,
                            "cena" => $this->form->cena,
                            "idTyp_odziezy" => $this->form->idTyp_odziezy,
                            "firma" => $this->form->firma,
                            "zdjecie" => $this->form->zdjecie
                        ]);
                
                } else {
                    //2.2 Edycja rekordu o danym ID
                    App::getDB()->update("produkty", [
                        "nazwa" => $this->form->nazwa,
                        "rozmiar" => $this->form->rozmiar,
                        "cena" => $this->form->cena,
                        "idTyp_odziezy" => $this->form->idTyp_odziezy,
                        "firma" => $this->form->firma,
                        "zdjecie" => $this->form->zdjecie
                            ], [
                        "idProdukty" => $this->form->idProdukty
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            // 3b. Po zapisie przejdź na stronę listy produktow (w ramach tego samego żądania http)
            App::getRouter()->forwardTo('listaProduktow');
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('EdycjaProduktow.tpl');
    }

    
}