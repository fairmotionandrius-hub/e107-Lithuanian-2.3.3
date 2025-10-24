<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Lithuanian language file - lietuvių kalbos failas
 *
*/
setlocale(LC_ALL, 'lt_LT.UTF-8', 'lt_LT.utf8', 'lt_LT.utf8', 'lt');
define("CORE_LC", "lt");
define("CORE_LC2", "lt");
// define("TEXTDIRECTION","rtl");
// deprecated: all language packs must be UTF-8
//define("CHARSET", "utf-8");  // for a true multi-language site. :)
define("CORE_LAN1", "Klaida: trūksta temos.\\n\\nPakeiskite naudojamą temą savo nustatymuose (admin srityje) arba įkelkite dabartinės temos failus į serverį.");
//obsolete define("CORE_LAN2'," \\1 wrote:");// "\\1" represents the username.
//obsolete define("CORE_LAN3", "file attachment disabled");                             // Not used in 0.8
define("CORE_LAN4", "Prašome ištrinti install.php failą iš jūsų serverio");
define("CORE_LAN5", "jei to nepadarysite, jūsų svetainei gali kilti saugumo grėsmė");
define("CORE_LAN6", "Šioje svetainėje įjungta apsauga nuo užklaidų antplūdžio ir jūs perspėjami, kad jei toliau intensyviai užkrausite puslapius, galite būti užblokuoti.");
define("CORE_LAN7", "Sistema bando atkurti nustatymus iš automatinės atsarginės kopijos.");
define("CORE_LAN8", "Sistemos nustatymų klaida");
define("CORE_LAN9", "Sistema negalėjo atkurti iš automatinės atsarginės kopijos. Vykdymas sustabdytas.");
define("CORE_LAN10", "Aptiktas sugadintas slapukas - atsijungta.");

// Footer - poraštė
define("CORE_LAN11", "Atvaizdavimo laikas: ");
define("CORE_LAN12", " sek (");
define("CORE_LAN13", "% iš to užklausoms) ");
define("CORE_LAN14", "%2.3f cpu sek (%2.2f%% apkrova, %2.3f paleidimas). Laikrodis: ");
define("CORE_LAN15", "DB užklausi: ");
define("CORE_LAN16", "Atmintis: ");

// img.bb
define("CORE_LAN17", "[ paveikslėlis išjungtas ]");
define("CORE_LAN18", "Paveikslėlis: ");

define("CORE_LAN_B", "B");
define("CORE_LAN_KB", "kB");
define("CORE_LAN_MB", "MB");
define("CORE_LAN_GB", "GB");
define("CORE_LAN_TB", "TB");

define("EMESSLAN_TITLE_INFO", "Sistemos informacija");
define("EMESSLAN_TITLE_ERROR", "Klaida");
define("EMESSLAN_TITLE_SUCCESS", "Sėkmė");
define("EMESSLAN_TITLE_WARNING", "Įspėjimas");
define("EMESSLAN_TITLE_DEBUG", "Sistemos derinimas");

define("LAN_NO_PERMISSIONS", "Jūs neturite leidimo peržiūrėti šį puslapį.");
define("LAN_EDIT","Redaguoti");
define("LAN_DELETE","Ištrinti");
define("LAN_DEFAULT","Numatytasis");
define("LAN_MORE", "Daugiau..");
define("LAN_LESS", "..Mažiau");
define("LAN_READ_MORE", "Skaityti daugiau..");
define("LAN_GOPAGE", "Eiti į puslapį");
define("LAN_GOTOPAGEX", "Eiti į puslapį [x]");
define("LAN_GO", "Eiti");
define("LAN_SUBMIT", "Pateikti");
define("LAN_NONE", "Nėra");
define("LAN_WARNING", "Įspėjimas!");
define("LAN_ERROR", "Klaida");
define("LAN_ANONYMOUS", "Anoniminis");
define("LAN_EMAIL_SUBS", "-epaštas-");
define("LAN_ACTIVE","Aktyvus");
define("LAN_YES", "Taip");
define("LAN_NO", "Ne");
define("LAN_OK", "Gerai");
define("LAN_ACTIONS", "Veiksmai");
define("LAN_THANK_YOU", "Ačiū");
define("LAN_CONTINUE", "Tęsti");
define("LAN_ENTER", "Įvesti");
define("LAN_ENTER_CODE", "Įveskite kodą");
define("LAN_INVALID_CODE", "Įvestas neteisingas kodas.");
define("LAN_SEARCH", "Paieška");
define("LAN_VIEW", "Peržiūrėti");
define("LAN_CLICK_TO_VIEW", "Spauskite peržiūrėti");//TODO elsewhere
define("LAN_SORT", "Rūšiuoti");
define("LAN_ORDER_BY", "Rūšiuoti pagal");
define("LAN_ASCENDING", "Didėjančia tvarka");
define("LAN_DESCENDING", "Mažėjančia tvarka");
define("LAN_SHARE", "Dalintis");
define("LAN_BACK", "Grįžti");
define("LAN_NAME", "Pavadinimas");
define("LAN_DESCRIPTION", "Aprašymas");
define("LAN_CANCEL","Atšaukti");
define("LAN_DATE","Data");
define("LAN_DATE_POSTED", "Paskelbimo data");
define("LAN_POSTED_BY", "Paskelbė");
define("LAN_JSCONFIRM","Ar esate tikri?");
define("LAN_IP","IP");
define("LAN_IP_ADDRESS","IP Adresas");
define("LAN_AUTHOR","Autorius");
define("LAN_CATEGORY", "Kategorija");
define("LAN_CATEGORIES", "Kategorijos");
define("LAN_GUEST", "Svečias");
define("LAN_NEXT", "Toliau");
define("LAN_PREVIOUS", "Ankstesnis");
define("LAN_LOGIN", "Prisijungti");
define("LAN_LOGOUT", "Atsijungti");
define("LAN_VERIFY", "Patvirtinti");
define("LAN_SETTINGS", "Nustatymai");
define("LAN_PASSWORD", "Slaptažodis");
define("LAN_INCORRECT_PASSWORD", "Neteisingas slaptažodis");
define("LAN_TYPE", "Tipas");
define("LAN_SCREENSHOT", "Ekrano nuotrauka");
define("LAN_FILE", "Failas");
define("LAN_YOUTUBE_VIDEO", "YouTube vaizdo įrašas");
define("LAN_YOUTUBE_PLAYLIST", "YouTube grojaršatis");
define("LAN_FILETYPES", "Failų tipai");
define("LAN_FILE_NOT_FOUND", "Failas nerastas");
define("LAN_FILES","Failai"); 
define("LAN_SIZE", "Dydis");
define("LAN_VERSION", "Versija");
define("LAN_DOWNLOAD", "Atsisiųsti");
define("LAN_DOWNLOAD_NO_PERMISSION", "Failas nerastas arba neturite leidimo atsisiųsti šį failą!");
define("LAN_WEBSITE", "Svetainė");
define("LAN_COMMENTS", "Komentarai");
define("LAN_LOCATION", "Vieta");
define("LAN_NO_RECORDS_FOUND","Nerasta įrašų");
define("LAN_RATING", "Įvertinimas");
define("LAN_IMAGE","Paveikslėlis");
define("LAN_ABOUT", "Apie");
define("LAN_TITLE", "Pavadinimas");
define("LAN_MESSAGE", "Žinutė");
define("LAN_USER", "Naudotojas");
define("LAN_EMAIL","El. pašto adresas");
define("LAN_WROTE", "rašė"); // kaip "Jonas rašė.."  ";
define("LAN_RE_ORDER", "Pertvarkyti");
define("LAN_RELATED", "Susiję");
define("LAN_CLOSE", "Uždaryti");
define("LAN_EXPAND", "Išplėsti");
define("LAN_LIST", "Sąrašas");
define("LAN_DATESTAMP","Datos žyma");
define("LAN_SUBJECT","Tema");

define("LAN_ENTER_USRNAME_EMAIL", "Prašome įvesti naudotojo vardą arba el. paštą");
define("LAN_PWD_REQUIRED", "Slaptažodis yra privalomas");
define("LAN_SHOW", "Rodyti");
define("LAN_GENERATE", "Generuoti");
define("LAN_SUMMARY", "Santrauka");
define("LAN_REQUIRED_BLANK", "Privalomi laukai liko tušti.");
define("LAN_PLEASEWAIT", "Prašome palaukti");
define("LAN_CHOOSE_FILE", "Pasirinkite failą");

define("LAN_REQUIRED", "Privalomas");

define("LAN_DEVELOPERMODE_CHECK", "[b]Kūrėjų režimas šiuo metu įjungtas. Naudokite šį režimą tik kuriant![/b] [br]Prašome išjungti kūrėjų režimą, kai naudojate svetainę gyvoje gamyboje. Kai kūrėjų režimas įjungtas, slapta informacija gali būti rodoma viešai!");
