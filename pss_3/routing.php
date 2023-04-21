<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home'); #default action
App::getRouter()->setLoginRoute('loginRedirect'); #action to forward if no permissions


Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('home', 'HomeCtrl');
Utils::addRoute('rejestracja', 'RejestracjaCtrl');
Utils::addRoute('rejestracjaShow', 'RejestracjaCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('loginRedirect', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('sklep', 'SklepCtrl');
Utils::addRoute('sklepMen', 'SklepCtrl');
Utils::addRoute('sklepWomen', 'SklepCtrl');
Utils::addRoute('sklepKids', 'SklepCtrl');
Utils::addRoute('koszyk', 'KoszykCtrl',['user']);
Utils::addRoute('koszykAdd', 'KoszykCtrl',['user']);
Utils::addRoute('usunProdukt', 'KoszykCtrl',['user']);
Utils::addRoute('zamow', 'KoszykCtrl',['user']);
Utils::addRoute('listaProduktow', 'ListaProduktowCtrl',['pracownik']);
Utils::addRoute('edycjaProduktow', 'EdycjaProduktowCtrl',['pracownik']);
Utils::addRoute('usunProduktZListy', 'EdycjaProduktowCtrl',['pracownik']);
Utils::addRoute('dodajProdukt', 'EdycjaProduktowCtrl',['pracownik']);
Utils::addRoute('zapiszProdukty', 'EdycjaProduktowCtrl',['pracownik']);
Utils::addRoute('listaUzytkownikow', 'ListaUzytkownikowCtrl',['admin']);
Utils::addRoute('dodajUzytkownika', 'EdycjaUzytkownikowCtrl',['admin']);
Utils::addRoute('edycjaUzytkownika', 'EdycjaUzytkownikowCtrl',['admin']);
Utils::addRoute('usunUzytkownikaZListy', 'EdycjaUzytkownikowCtrl',['admin']);
Utils::addRoute('zapiszUzytkownika', 'EdycjaUzytkownikowCtrl',['admin']);



//Utils::addRoute('action_name', 'controller_class_name');