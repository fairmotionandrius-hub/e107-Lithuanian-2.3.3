<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_plugins/import/languages/English_admin_import.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */


/**
 *      e107 Import plugin
 *
 *      @package        e107_plugins
 *      @subpackage     import
 *      @version        $Id$;
*/

if (!defined("e107_INIT")) { exit; }

define("LAN_CONVERT_03","Turite pradėti su švaria E107 duomenų baze, išskyrus pagrindinį administratoriaus vartotoją (ID=1)");
define("LAN_CONVERT_04","Laukas(-ai) palikti tušti, prašome grįžti ir iš naujo įvesti reikšmes.");
define("LAN_CONVERT_05","Šio skripto paleidimas gali išvalyti daugelį jūsų E107 lentelių - įsitikinkite, kad turite pilną atsarginę kopiją prieš tęsdami!");
define("LAN_CONVERT_06","Importuojamų duomenų tipas");
define("LAN_CONVERT_07","CSV formato specifikacija");
define("LAN_CONVERT_08","Esama duomenų bazė");
define("LAN_CONVERT_09","Šaltinio duomenų bazės prisijungimo duomenys");
define("LAN_CONVERT_10","Šaltinio faile slaptažodžiai nėra užšifruoti");
define("LAN_CONVERT_11","Šaltinio duomenų informacija");
define("LAN_CONVERT_12","Pagrindinis vartotojo vardas ir slaptažodis");
define("LAN_CONVERT_13","CSV failas");
define("LAN_CONVERT_14","Importuojamos duomenų bazės formatas");
define("LAN_CONVERT_15","Nėra prieinų importo konverterių");
define("LAN_CONVERT_16","Pradinė(-ės) vartotojų klasė(-ės)");
define("LAN_CONVERT_17","CSV faile slaptažodis dar nėra užšifruotas");
define("LAN_CONVERT_18","(Slaptažodis turi būti saugomas su MD5 šifravimu)");
define("LAN_CONVERT_19","Duomenų bazės serveris");
define("LAN_CONVERT_20","Duomenų bazės vartotojo vardas");
define("LAN_CONVERT_21","Duomenų bazės slaptažodis");
define("LAN_CONVERT_22","Duomenų bazės pavadinimas");
define("LAN_CONVERT_23","Duomenų bazės lentelių priešdėlis");
define("LAN_CONVERT_24","Importuojamos sritys");
define("LAN_CONVERT_25","Vartotojai");
define("LAN_CONVERT_26","Forumų apibrėžimai");
define("LAN_CONVERT_27","Apklausos");
define("LAN_CONVERT_28","Naujienos");
define("LAN_CONVERT_29","Duomenų bazės importavimas užbaigtas");
define("LAN_CONVERT_30","Importavimo procedūros informacija");
define("LAN_CONVERT_31","CSV duomenų failas neegzistuoja arba netinkami leidimai");
define("LAN_CONVERT_32","Klaida skaitant CSV duomenų failą");
define("LAN_CONVERT_33","Klaida CSV duomenų eilutėje ");
define("LAN_CONVERT_34","Klaida: [x] įrašant į vartotojų duomenų bazę, eilutė ");
define("LAN_CONVERT_35","CSV importavimas užbaigtas. [x] perskaityta, [y] vartotojai pridėti, [z] klaidos");
define("LAN_CONVERT_36","CSV duomenų failo pavadinimas");
define("LAN_CONVERT_37","Netinkama formato specifikacija importavimo tipui");
define("LAN_CONVERT_38","Ištrinti esamus duomenis");
define("LAN_CONVERT_39","(Jei neištrinsite, importuotų duomenų autoriai bus rodomi kaip 'Anoniminis')");
define("LAN_CONVERT_40","Esami duomenys ištrinti");
define("LAN_CONVERT_41","Reikalingas duomenų bazės prieigos laukas tuščias");
define("LAN_CONVERT_42","Klaida apibrėžimo faile - reikalinga klasė neegzistuoja");
define("LAN_CONVERT_43","Klaida jungiantis prie šaltinio duomenų bazės");
define("LAN_CONVERT_44","Užklausos nustatymo klaida ");
define("LAN_CONVERT_45","Nepavyksta perskaityti importo kodo failo");
define("LAN_CONVERT_46","Klaida: [x] įrašant į [y] duomenų bazę, eilutė ");
define("LAN_CONVERT_47","Paketo [w] importavimas užbaigtas. [x] perskaityta, [y] pridėta, [z] klaidos");
define("LAN_CONVERT_48","Forumo įrašai");
define("LAN_CONVERT_49","Drupal");
define("LAN_CONVERT_50","Pagrindinis importavimas");
define("LAN_CONVERT_51","Tikslinio Drupal versija.");
define("LAN_CONVERT_52","Drupal versija");
define("LAN_CONVERT_53","Pagrindinis Drupal svetainės URL (pvz., http://mydrupalsite.com).");
define("LAN_CONVERT_54","Drupal pagrindinis URL");
define("LAN_CONVERT_55","Pagrindinis URL kelias (t.y., katalogas) Drupal diegimo (pvz., /drupal/).");
define("LAN_CONVERT_56","Drupal pagrindinis kelias");
define("LAN_CONVERT_57", "Klaidų nėra");
define("LAN_CONVERT_58", "Negalima keisti pagrindinių administratoriaus duomenų");
define("LAN_CONVERT_59", "perduotas netinkamas laukas");
define("LAN_CONVERT_60", "Privalomas laukas nenustatytas");
define("LAN_CONVERT_61", "Vartotojas jau egzistuoja");
define("LAN_CONVERT_62", "Netinkami simboliai vartotojo arba prisijungimo varde");
define("LAN_CONVERT_63", "Klaida įrašant išplėstus vartotojo laukus");
define("LAN_CONVERT_64", "Pasirinkti");
define("LAN_CONVERT_65", "Puslapiai");
define("LAN_CONVERT_66", "Puslapių skyriai");
define("LAN_CONVERT_67", "Nuorodos");
define("LAN_CONVERT_68", "Medija");
define("LAN_CONVERT_69", "Forumas");
define("LAN_CONVERT_70", "Forumų temos");
define("LAN_CONVERT_71", "Forumų įrašai");
define("LAN_CONVERT_72", "Forumų sekimas");
define("LAN_CONVERT_73", "Vartotojų klasės");
define("LAN_CONVERT_74", "Naujienų kategorijos");
