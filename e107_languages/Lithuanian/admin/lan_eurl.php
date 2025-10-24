<?php
/*
 * Copyright (C) 2008-2013 e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 *
 * Admin Language File
 *
*/

define("LAN_EURL_NAME", "Valdyti svetainės URL");
define("LAN_EURL_NAME_CONFIG", "Profiliai");
define("LAN_EURL_NAME_ALIASES", "Pseudonimai");
define("LAN_EURL_NAME_SETTINGS", "Bendrieji nustatymai");
define("LAN_EURL_NAME_HELP", "Pagalba");

define("LAN_EURL_EMPTY", "Sąrašas tuščias");
define("LAN_EURL_LEGEND_CONFIG", "Pasirinkite URL profilį kiekvienai svetainės sričiai");
define("LAN_EURL_LEGEND_ALIASES", "Konfigūruokite pagrindinius URL pseudonimus kiekvienam URL profiliui");

define("LAN_EURL_DEFAULT", "Numatytasis");
define("LAN_EURL_PROFILE", "Profilis");

define("LAN_EURL_INFOALT", "Informacija");
define("LAN_EURL_PROFILE_INFO", "Profilio informacija nepasiekiama");
define("LAN_EURL_LOCATION", "Profilio vieta");
define("LAN_EURL_LOCATION_NONE", "Konfigūracijos failas nepasiekiamas");
define("LAN_EURL_FORM_HELP_DEFAULT", "Pseudonimas numatytojoje kalboje.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Numatytoji reikšmė yra ");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Pseudonimas, kai ");
define("LAN_EURL_FORM_HELP_EXAMPLE", "Pagrindinis URL");

// messages
define("LAN_EURL_ERR_ALIAS_MODULE", "Pseudonimas &quot;%1\$s&quot; negali būti išsaugotas - yra sistemos URL profilis su tokiu pačiu pavadinimu. Prašome pasirinkti kitą pseudonimo reikšmę sistemos URL profiliui &quot;%2\$s&quot;"); // FIXME HTML IN LAN
define("LAN_EURL_SURL_UPD",    "&nbsp; SEF URL atnaujinti.");
define("LAN_EURL_SURL_NUPD",    "&nbsp; SEF URL NEBUVO atnaujinti.");
// settings
define("LAN_EURL_SETTINGS_PATHINFO", "Pašalinti failo pavadinimą iš URL");
define("LAN_EURL_SETTINGS_MAINMODULE", "Susieti šakninę vardų sritį");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Pasirinkite, kuri svetainės sritis bus prijungta prie jūsų pagrindinio svetainės URL. Pavyzdys: Kai Naujienos yra jūsų šakninė vardų sritis, https://jususvetaine.com/Naujienų-Elemento-Pavadinimas bus susijęs su naujienomis (elemento peržiūros puslapis bus išspręstas)");
define("LAN_EURL_SETTINGS_REDIRECT", "Peradresuoti į sistemos nerasto puslapio");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Jei nustatyta kaip netiesa, nerastas puslapis bus tiesiogiai atvaizduotas (be naršyklės peradresavimo)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Automatinio SEF eilutės kūrimo tipas");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Pasirinkite, kaip bus surinkta SEF eilutė, kai ji automatiškai kuriama iš pavadinimo reikšmės (pvz., naujienose, pasirinktuose puslapiuose ir kt.)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Tiesiog apsaugoti");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "dasherize-to-lower-case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Dasherize-To-Camel-Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Dasherize-with-no-case-CHANGE");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "underscore_to_lower_case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Underscore_To_Camel_Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Underscore_with_no_case_CHANGE");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "plus+separator+to+lower+case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Plus+Separator+To+Camel+Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Plus+separator+with+no+case+CHANGE");

define("LAN_EURL_MODREWR_DESCR", "Pašalina įvesties skripto failo pavadinimą (index.php/) iš jūsų URL. Jums reikės mod_rewrite įdiegto ir veikiančio jūsų serveryje (Apache Web Server). Įjungę šį nustatymą, eikite į savo svetainės šakninį aplanką, pervadinkite htaccess.txt į .htaccess ir, jei reikia, pakeiskite <em>&quot;RewriteBase&quot;</em> direktyvą.");

// navigation
define("LAN_EURL_MENU", "Svetainės URL");
define("LAN_EURL_MENU_CONFIG", "Konfigūracijos");
define("LAN_EURL_MENU_ALIASES", "Profilio pseudonimai");
define("LAN_EURL_MENU_SETTINGS", "Nustatymai");
define("LAN_EURL_MENU_HELP", "Pagalba");
define("LAN_EURL_MENU_PROFILES", "Profiliai");

define("LAN_EURL_UC", "Kuriama");


define("LAN_EURL_CORE_MAIN", "Svetainės šakninė vardų sritis - pseudonimas nenaudojamas.");



define("LAN_EURL_FRIENDLY",   "Draugiški");
define("LAN_EURL_LEGACY", "Pasenę tiesioginiai URL.");

define("LAN_EURL_REWRITE_LABEL", "Draugiški URL");
define("LAN_EURL_REWRITE_DESCR", "Paieškos sistemoms ir vartotojams draugiški URL.");


// News
define("LAN_EURL_CORE_NEWS", "Naujienos");
//define("LAN_EURL_NEWS_DEFAULT_LABEL", "Default");
//define("LAN_EURL_NEWS_DEFAULT_DESCR", "Legacy direct URLs.");

define("LAN_EURL_NEWS_REWRITEF_LABEL", "Visiškai draugiški URL (be našumo, draugiškiausi)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "");

define("LAN_EURL_NEWS_REWRITE_LABEL", "Draugiški URL be ID (be našumo, draugiškesni)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Demonstruoja rankinį nuorodų analizavimą ir surinkimą.");

define("LAN_EURL_NEWS_REWRITEX_LABEL", "Draugiški URL su ID (našumo požiūriu)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Demonstruoja automatinį nuorodų analizavimą ir surinkimą remiantis iš anksto apibrėžtomis maršruto taisyklėmis.");


// Downloads 
//define("LAN_EURL_CORE_DOWNLOADS", "Atsisiuntimai");

// Users
define("LAN_EURL_CORE_USER", "Vartotojai");
//define("LAN_EURL_USER_DEFAULT_LABEL", "Default");
//define("LAN_EURL_USER_DEFAULT_DESCR", "Legacy direct URLs.");

define("LAN_EURL_USER_REWRITE_LABEL", "Draugiški URL");
define("LAN_EURL_USER_REWRITE_DESCR", "Paieškos sistemoms ir vartotojams draugiški URL.");

// Users
define("LAN_EURL_CORE_PAGE", "Pasirinktiniai puslapiai");
//define("LAN_EURL_PAGE_DEFAULT_LABEL", "Default");
//define("LAN_EURL_PAGE_DEFAULT_DESCR", "Legacy direct URLs. ");

define("LAN_EURL_PAGE_SEF_LABEL", "Draugiški URL su ID (našumo požiūriu)");
define("LAN_EURL_PAGE_SEF_DESCR", "Paieškos sistemoms ir vartotojams draugiški URL.");

define("LAN_EURL_PAGE_SEFNOID_LABEL", "Draugiški URL be ID (be našumo, draugiškesni)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Paieškos sistemoms ir vartotojams draugiški URL.");

// Search
define("LAN_EURL_CORE_SEARCH", "Paieška");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "Numatytasis paieškos URL");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Pasenęs tiesioginis URL.");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "Draugiškas URL");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "");

// System
define("LAN_EURL_CORE_SYSTEM", "Sistema");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "Numatytieji sistemos URL");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "URL puslapiams kaip Nerasta, Prieiga uždrausta, ir kt.");

define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Draugiški sistemos URL");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "URL puslapiams kaip Nerasta, Prieiga uždrausta, ir kt.");

// System
define("LAN_EURL_CORE_INDEX", "Pagrindinis puslapis");
define("LAN_EURL_CORE_INDEX_INFO", "Pagrindinis puslapis negali turėti pseudonimo.");
define("LAN_EURL_REBUILD",    "Atstatyti");
define("LAN_EURL_REGULAR_EXPRESSION", "Reguliari išraiška");
define("LAN_EURL_KEY", "Raktas");
define("LAN_EURL_TABLE", "Lentelė");
