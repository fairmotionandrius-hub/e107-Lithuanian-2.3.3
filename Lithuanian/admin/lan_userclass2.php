<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Administration Area - User classes
 *
*/

//define("UCSLAN_1", "Išvalyti visus vartotojus iš klasės.");
//define("UCSLAN_2", "Klasės vartotojai atnaujinti.");
//define("UCSLAN_3", "Klasė ištrinta.");//NOT USED
//define("UCSLAN_4", "Prašome pažymėti patvirtinimo langelį, kad ištrintumėte šią vartotojų klasę"); currently not in use
//define("UCSLAN_5", "Klasė atnaujinta.");//LAN_UPDATED.': '.LAN_USERCLASS
//define("UCSLAN_6", "Klasė išsaugota duomenų bazėje.");//LAN_UPDATED.': '.LAN_USERCLASS
//define("UCSLAN_7", "Vartotojų klasių dar nėra.");//LAN_NO_RECORDS_FOUND
//define("UCSLAN_8", "Esamos klasės");//NOT USED
//define("UCSLAN_9", "Be piktogramos");//NOT USED
// define("UCSLAN_10", "Klasė neištrinta - tai pagrindinė klasė arba ji naudojama kitos klasės apibrėžime kaip tėvinė arba redagavimo klasė");
//define("UCSLAN_11", "pažymėkite patvirtinti");//NOT USED
//define("UCSLAN_12", "Klasės pavadinimas");//LAN_NAME
//define("UCSLAN_13", "Klasės aprašymas");//LAN_DESCRIPTION
//define("UCSLAN_14", "Atnaujinti vartotojų klasę");//LAN_UPDATE
//define("UCSLAN_15", "Sukurti naują klasę");//LAN_CREATE
//define("UCSLAN_16", "Priskirti vartotojus klasei");
//define("UCSLAN_17", "Pašalinti");
//define("UCSLAN_18", "Išvalyti klasę");//NOT USED
//define("UCSLAN_19", "Priskirti vartotojus");
//define("UCSLAN_20", "klasė");//NOT USED
//define("UCSLAN_21", "Vartotojų klasės nustatymai");//LAN_SETTINGS
//define("UCSLAN_22", "Vartotojai - spauskite perkelti ...");
//define("UCSLAN_23", "Vartotojai šioje klasėje ...");
//define("UCSLAN_24", "Klasių valdytuvas");//LAN_MANAGER
//define("UCSLAN_25", "Kurti/Redaguoti klases");//NOT USED
//define("UCSLAN_26", "Klasės narystė");//NOT USED
//define("UCSLAN_27", "Derinimo pagalba");//NOT USED
//define("UCSLAN_28", "Keisti klasės narystę");
//define("UCSLAN_29", "Ta klasė negali būti ištrinta");//NOT USED
define("UCSLAN_30", "Trumpas pavadinimas rodomas pasirinkikliuose");
define("UCSLAN_31", "Informacija apie klasės taikomumą");
define("UCSLAN_32", "Vartotojai šioje klasėje gali pridėti/pašalinti save iš redaguojamos klasės");
define("UCSLAN_33", "Nustato, kurie vartotojai gali matyti šią klasę išskleidžiamuose sąrašuose");
//define("UCSLAN_34", "Klasės matomumas");//LAN_VISIBILITY
//define("UCSLAN_35", "Klasės tėvinė");//LAN_PARENT
define("UCSLAN_36", "Jei medžio viršus yra 'Niekas', leidimai didėja link medžio viršaus<br />Jei medžio viršus yra 'Visi', leidimai didėja einant žemyn medyje");
define("UCSLAN_37", "Turite įvesti klasės pavadinimą");
define("UCSLAN_38", "Pradinė vartotojo klasė");
define("UCSLAN_39", "Nėra klasių, kurias būtų galima nustatyti");
define("UCSLAN_40", "Nustatyti pradines klases");
define("UCSLAN_41", "Nustatymai atnaujinti");
//define("UCSLAN_42", "Niekas nepakeista - neatnaujinta");//LAN_NOCHANGE_NOTSAVED
define("UCSLAN_43", "Esamos klasės: ");
//define("UCSLAN_44", "Nėra");//LAN_NONE
define("UCSLAN_45", "Taškas, kuriame nustatomos klasės:");
define("UCSLAN_46", "(ignoruojama, jei nėra patvirtinimo)");
define("UCSLAN_47", "Pradinė registracija");
define("UCSLAN_48", "Patvirtinimas el. paštu arba administratoriaus");
define("UCSLAN_49", "Šios klasės nustatomos bet kuriam naujai užsiregistravusiam vartotojui - arba iš karto, arba patvirtinus jų narystę svetainėje");
//define("UCSLAN_50", "Parinktys/Sąranka");//NOT USED
//define("UCSLAN_51", "Vartotojų klasės funkcijos");//NOT USED
//define("UCSLAN_52", "Sąrankos parinktys");//LAN_OPTIONS
define("UCSLAN_53", "Atsargiai! Naudokite šias parinktis tik tada, kai to prašo palaikymo tarnyba.");
define("UCSLAN_54", "Nustatyti numatytąją vartotojų hierarchiją");
define("UCSLAN_55", "Išvalyti vartotojų hierarchiją");
define("UCSLAN_56", "(tai nustato 'plokščią' vartotojų klasių struktūrą)");
define("UCSLAN_57", "(hierarchija gali būti pakeista vėliau)");
define("UCSLAN_58", "Vykdyti");
//define("UCSLAN_59", "Įjungti vartotojų klasės pakeitimų administratoriaus žurnalą");//NOT USED
//define("UCSLAN_60", "Vartotojų klasės konfigūracijos parinktys");//NOT USED
//define("UCSLAN_61", "Vartotojų klasės sąranka");//NOT USED
define("UCSLAN_62", "Sukurti numatytąjį klasių medį: ");
define("UCSLAN_63", "Toks klasės pavadinimas jau egzistuoja - prašome pasirinkti kitą");
define("UCSLAN_64", "užbaigta");
define("UCSLAN_65", "Išlyginti vartotojų klasių hierarchiją: ");
//define("UCSLAN_66", "Patvirtinkite vartotojų klasių hierarchijos išlyginimą");
//define("UCSLAN_67", "Patvirtinkite numatytosios vartotojų klasės hierarchijos nustatymą");
//define("UCSLAN_68", "Klasės piktograma");//LAN_ICON
define("UCSLAN_69", "Pasirenkama piktograma, susieta su klase - katalogas ");
define("UCSLAN_70", "Kuriama klasių hierarchija iš naujo: ");
define("UCSLAN_71", "Vartotojų klasių priežiūra");
define("UCSLAN_72", "Perkurti klasių hierarchiją ");
define("UCSLAN_73", "(Tai gali būti reikalinga, jei įvyksta duomenų bazės sugadinimas)");

//userclass_class.php
define("UCSLAN_74", "Administratoriai ir moderatoriai");
define("UCSLAN_75", "Registruoti ir prisijungę nariai");
define("UCSLAN_76", "Svetainės administratoriai");
define("UCSLAN_77", "Pagrindiniai svetainės administratoriai");
define("UCSLAN_78", "Forumų ir kitų sričių moderatoriai");

//define("UCSLAN_79", "Klasės tipas");
define("UCSLAN_80", "Standartinė");
define("UCSLAN_81", "Grupė");
define("UCSLAN_82", "Grupė sujungia kelias atskiras klases");
define("UCSLAN_83", "Klasės grupėje");
//define("UCSLAN_84", " (Grupė)");//UCSLAN_81
define("UCSLAN_85", "Priskyėte visas turimas klases; prašome iš naujo priskirti tą, kuri nenaudojama");
define("UCSLAN_86", "Kai kurie nustatymai neleidžiami administratorių klasėms - jie buvo nustatyti kaip numatytieji. ");
define("UCSLAN_87", "Neseniai prisijungę vartotojai");
define("UCSLAN_88", "Identifikuoti paieškos robotai");
define("UCSLAN_89", "Pažymėtos klasės yra grupės nariai");
define("UCSLAN_90", "Negalite redaguoti tam tikrų sisteminių vartotojų klasių!");
define("UCSLAN_91", "Klasių struktūra");

//define("UCSLAN_UPDATE", "Atnaujinti");//NOT USED ... LAN_UPDATE



