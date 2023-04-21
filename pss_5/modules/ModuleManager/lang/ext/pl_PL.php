<?php
$lang['abouttxt']='Opis';
$lang['accessdenied']='Dostęp zabroniony. Sprawdź swoje uprawnienia.';
$lang['action_activated']='Moduł %s został aktywowany.';
$lang['action_installed']='Moduł %s został zainstalowany i przesyła wiadomość: %s';
$lang['action_upgraded']='Moduł %s został uaktualnony';
$lang['admindescription']='Narzędzie do ściągania i instalowania moduł&oacute;w ze zdalnych serwer&oacute;w.';
$lang['advancedsearch_help']='Specify words to include or exclude from the search using a + or -, surround exact phrases with quotes.  i.e:  +red -apple +&quot;some text&quot;';
$lang['all_modules_up_to_date']='Nie ma nowszych moduł&oacute;w w repozytorium';
$lang['available_updates']='Dostępne aktualizacje moduł&oacute;w; zanim zaaktualizujesz, przeczytaj informacje o wydaniu i zr&oacute;b kopię zapasową strony.';
$lang['availablemodules']='Obecny status moduł&oacute;w dostępnych z aktualnego repozytorium';
$lang['availmodules']='Dostępne moduły';
$lang['back_to_module_manager']='&laquo; Powr&oacute;t do Menadżera Moduł&oacute;w';
$lang['cantdownload']='Nie mogę ściągnąć pakietu';
$lang['depend_activate']='Moduł %s zostanie aktywowany.';
$lang['depend_install']='Moduł %s (wersja %s lub nowsza) zostanie zainstalowany.';
$lang['depend_upgrade']='Moduł %s zostanie zaaktualizowany do wersji %s.';
$lang['dependstxt']='Zależności';
$lang['download']='Ściągnij i zainstaluj';
$lang['error']='Błąd!';
$lang['error_checksum']='Błąd sumy kontrolnej. Najczęściej oznacza to zły plik, uszkodzony podczas ściągania lub instalowania. Spr&oacute;buj ponownie, ewentualnie będziesz musiał zainstalować moduł ręcznie.';
$lang['error_connectnomodules']='Połączenie zostało nawiązane, ale wskazane repozytorium nie zawiera udostępnionych moduł&oacute;w CMS Made Simple.';
$lang['error_downloadxml']='Wystąpił problem z pobieraniem pliku XML: %s';
$lang['error_internal']='Wewnętrzny błąd... Poinformuj swojego administratora';
$lang['error_minimumrepository']='Wersja repozytorium nie jest kompatybilna z modułem Menadżera Moduł&oacute;w';
$lang['error_moduleinstallfailed']='Instalacja modułu nie powiodła się';
$lang['error_nofilename']='Brak parametru nazwy pliku';
$lang['error_nofilesize']='Brak parametru wielkości pliku';
$lang['error_nomodules']='Błąd: nie można pobrać listy zainstalowanych moduł&oacute;w';
$lang['error_norepositoryurl']='Adres URL do repozytorium moduł&oacute;w nie został wprowadzony';
$lang['error_noresults']='We expected some results to be available from queued operations, but none were found.  Please try to reproduce this experience, and provide sufficient information to support personell for diagnoses';
$lang['error_permissions']='<strong><em>UWAGA:</em></strong> Prawa do instalowania moduł&oacute;w w danym katalogu są ograniczone. Możesz mieć r&oacute;wnież problemy z PHP Safe mode. Upewnij się, że tryb &quot;PHP Safe Mode&quot; jest wyłączony i że prawa do plik&oacute;w i katalog&oacute;w są odpowiednie.';
$lang['error_search']='Błąd wyszukiwania';
$lang['error_unsatisfiable_dependency']='Nie można znaleźć wymaganego modułu &quot;%s&quot; (wersji %s lub p&oacute;źniejszej) w repozytorium. Jest on wymagany przez %s; Może to wskazywać na problem z wersją tego modułu w repozytorium. Skontaktuj się z autorem modułu. Anulowanie.';
$lang['error_upgrade']='Uaktualnienie modułu %s zawiodło!';
$lang['friendlyname']='Menadżer moduł&oacute;w';
$lang['general_notice']='Wersje wyświetlone tutaj pochodzą z najnowszych plik&oacute;w XML wgranych do wybranego repozytorium (zwykle CMS %s).  Mogą nie przedstawiać najnowszych możliwych wersji.';
$lang['help']='<h3>What Does This Do?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the &#039;Modify Modules&#039; permission, and you will also need the complete, and full URL to a &#039;Module Repository&#039; installation.  You can specify this url in the &#039;Site Admin&#039; --> &#039;Global Settings&#039; page.</p><br/>
<p>You can find the interface for this module under the &#039;Extensions&#039; menu.  When you select this module, the &#039;Module Repository&#039; installation will automatically be queried for a list of it&#039;s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['helptxt']='Pomoc';
$lang['incompatible']='Niekompatybilne';
$lang['install']='Zainstaluj';
$lang['install_submit']='Instaluj';
$lang['installed']='Wersja modułu %s zainstalowana.';
$lang['instcount']='Moduły obecnie zainstalowane';
$lang['latestdepends']='Zawsze instaluj najnowsze moduły';
$lang['moddescription']='A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.';
$lang['msg_nodependencies']='Ten plik nie ma wskazanych zależności';
$lang['nametext']='Nazwa modułu';
$lang['newerversion']='Nowsza wersja zainstalowana';
$lang['newversions']='Dostępne aktualizacje';
$lang['notice']='Notka';
$lang['onlynewesttext']='Pokazuj tylko najnowszą wersję';
$lang['postinstall']='Menadżer moduł&oacute;w został pomyślnie zainstalowany';
$lang['postuninstall']='Menadżer Moduł&oacute;w został odinstalowany. Użytkownicy nie będą mogli instalować moduł&oacute;w ze zdalnego repozytorium. Instalacje ręczne nadal są dostępne.';
$lang['preferences']='Ustawienia';
$lang['preferencessaved']='Ustawienia zapisano';
$lang['prompt_advancedsearch']='Szukanie zaawansowane';
$lang['prompt_dl_chunksize']='Rozmiar fragment&oacute;w do ściągnia (Kb)';
$lang['prompt_otheroptions']='Inne opcje';
$lang['prompt_repository_url']='URL repozytorium moduł&oacute;w:';
$lang['prompt_resetcache']='Skasuj lokalną pamięć podręczną (cache) z repozytorium moduł&oacute;w';
$lang['prompt_reseturl']='Skasuj adres URL by wr&oacute;cić do ustawień domyślnych';
$lang['prompt_settings']='Ustawienia';
$lang['really_uninstall']='Czy na pewno chcesz odinstalować? Tw&oacute;j serwis straci sporo na użyteczności, ale to Twoja decyzja!';
$lang['repositorycount']='Moduły znalezione w repozytorium';
$lang['reset']='Wyczyść';
$lang['search']='Szukaj';
$lang['search_noresults']='Szukanie zakończone, ale nie ma pasujących wynik&oacute;w';
$lang['search_results']='Wynik szukania';
$lang['sizetext']='Rozmiar (Kilobajty)';
$lang['statustext']='Status/Akcja';
$lang['submit']='Wyślij';
$lang['text_dl_chunksize']='Maksymalny rozmiar danych do ściągnięcia z serwera w jednym fragmencie (podczas instalacji modułu)';
$lang['text_repository_url']='URL powinno być w postaci:
http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['time_warning']='The installation list has more than one or two modules. Be aware that the install could take a few minutes. Please be patient!';
$lang['title_installation']='Instalacja';
$lang['title_installation_complete']='Proces instalacji zakończony sukcesem!';
$lang['uninstalled']='Moduł odinstalowany';
$lang['unknown']='Nieznane';
$lang['upgrade']='Aktualizuj wersję';
$lang['upgrade_available']='Nowsza wersja dostępna (%s), posiadasz (%s)';
$lang['upgraded']='Moduł aktualizowano do wersji %s.';
$lang['uptodate']='Zainstalowany';
$lang['use_at_your_own_risk']='Używasz na własne ryzyko';
$lang['versionsformodule']='Dostępne wersje modułu %s';
$lang['vertext']='Wersja';
$lang['xmltext']='Plik XML';
$lang['yourversion']='Twoja wersja';
?>