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
 * $Source: /cvs_backup/e107_0.8/e107_languages/Lithuanian/lan_installer.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

define("LANINS_001", "e107 diegimas");


define("LANINS_002", "Žingsnis ");
define("LANINS_003", "1");
define("LANINS_004", "Kalbos pasirinkimas");
define("LANINS_005", "Pasirinkite kalbą, kurią norite naudoti diegimo metu");
define("LANINS_006", "Nustatyti kalbą");
define("LANINS_007", "4");
define("LANINS_008", "PHP ir MySQL versijų tikrinimas / Failų leidimų tikrinimas");
define("LANINS_009", "Patikrinti failų leidimus iš naujo");
define("LANINS_010", "Failas neredaguojamas: ");
define("LANINS_010a", "Aplankas neredaguojamas: ");
define("LANINS_011", "Klaida"); // new > LAN_ERROR
define("LANINS_012", "MySQL funkcijos neegzistuoja. Tai tikriausiai reiškia, kad MySQL PHP plėtinys neįdiegtas arba jūsų PHP diegimas nebuvo sukompiliuotas su MySQL palaikymu."); // help for 012
define("LANINS_013", "Nepavyko nustatyti MySQL versijos numerio. Tai ne kritinė klaida, todėl tęskite diegimą, bet žinokite, kad e107 reikia MySQL >= 3.23 versijos tinkamam veikimui.");
define("LANINS_014", "Failų leidimai");
define("LANINS_015", "PHP versija");
define("LANINS_016", "MySQL");
define("LANINS_017", "GERAI");
define("LANINS_018", "Įsitikinkite, kad visi išvardinti failai egzistuoja ir yra rašomi serverio. Paprastai tai reiškia CHMOD 777, bet aplinkos skiriasi - susisiekite su savo tinklapių talpinimo tiekėju, jei turite problemų.");
define("LANINS_019", "Jūsų serveryje įdiegta PHP versija negali paleisti e107. e107 reikia bent ".MIN_PHP_VERSION." PHP versijos tinkamam veikimui. Atnaujinkite PHP versiją arba susisiekite su tinklapių talpinimo tiekėju.");
define("LANINS_020", "Tęsti diegimą"); //LAN_CONTINUE
define("LANINS_021", "2");
define("LANINS_022", "MySQL serverio duomenys");
define("LANINS_023", "Čia įveskite savo MySQL nustatymus.

Jei turite root leidimus, galite sukurti naują duomenų bazę pažymėdami langelį, jei ne - turite sukurti duomenų bazę arba naudoti esamą.

Jei turite tik vieną duomenų bazę, naudokite priešdėlį, kad kiti skriptai galėtų dalytis ta pačia duomenų baze.
Jei nežinote savo MySQL duomenų, susisiekite su savo tinklapių talpinimo tiekėju.");
define("LANINS_024", "MySQL serveris:");
define("LANINS_025", "MySQL vartotojo vardas:");
define("LANINS_026", "MySQL slaptažodis:");
define("LANINS_027", "MySQL duomenų bazė:");
define("LANINS_028", "Sukurti duomenų bazę?");
define("LANINS_029", "Lentelių priešdėlis:");
define("LANINS_030", "MySQL serveris, kurį norite naudoti su e107. Gali taip pat turėti porto numerį, pvz. 'hostname:port' arba kelią į vietinį socket, pvz. \":/path/to/socket\" localhost'ui.");
define("LANINS_031", "Vartotojo vardas, kurį e107 naudos prisijungimui prie MySQL serverio");
define("LANINS_032", "Slaptažodis vartotojui, kurį ką tik įvedėte. Negali turėti viengubu arba dvigubu kabučių.");
define("LANINS_033", "MySQL duomenų bazė, kurioje norite, kad būtų e107, kartais vadinama schema. Turi prasidėti raišiu. Jei vartotojas turi duomenų bazės kūrimo leidimus, galite pasirinkti automatiškai sukurti duomenų bazę, jei jos dar nėra.");
define("LANINS_034", "Priešdėlis, kurį e107 naudos kurdamas e107 lenteles. Naudingas keliems e107 įrengimams vienoje duomenų bazės schemoje.");
define("LANINS_035", "Tęsti"); // LAN_CONTINUE
define("LANINS_036", "3");
define("LANINS_037", "MySQL prisijungimo tikrinimas");
define("LANINS_038", " ir duomenų bazės kūrimas");
define("LANINS_039", "Įsitikinkite, kad užpildėte visus laukus, ypač MySQL serverį, MySQL vartotojo vardą ir MySQL duomenų bazę (šie laukai visada reikalingi MySQL serveriui)");
define("LANINS_040", "Klaidos");
define("LANINS_041", "e107 nepavyko užmegzti ryšio su MySQL serveriu naudojant jūsų įvestą informaciją. Grįžkite į ankstesnį puslapį ir įsitikinkite, kad informacija teisinga.");
define("LANINS_042", "Ryšys su MySQL serveriu užmegztas ir patvirtintas.");
define("LANINS_043", "Nepavyko sukurti duomenų bazės, įsitikinkite, kad turite tinkamus leidimus kurti duomenų bazes savo serveryje.");
define("LANINS_044", "Duomenų bazė sėkmingai sukurta.");
define("LANINS_045", "Paspauskite mygtuką, kad pereitumėte į kitą etapą.");
define("LANINS_046", "5");
define("LANINS_047", "Administratoriaus duomenys");
define("LANINS_048", "EXIF plėtinys");
define("LANINS_049", "Du įvesti slaptažodžiai nesutampa. Grįžkite atgal ir bandykite dar kartą.");
define("LANINS_050", "XML plėtinys");
define("LANINS_051", "Įdiegta");
define("LANINS_052", "Neįdiegta");
define("LANINS_053", "e107 v2.x reikia PHP XML plėtinio įdiegti. Prašome susisiekti su savo talpinimo tiekėju arba perskaityti informaciją adresu [x] prieš tęsiant");
define("LANINS_054", "e107 v2.x reikia PHP EXIF plėtinio įdiegti. Prašome susisiekti su savo talpinimo tiekėju arba perskaityti informaciją adresu [x] prieš tęsiant");
define("LANINS_055", "Diegimo patvirtinimas");
define("LANINS_056", "6");
define("LANINS_057", " e107 dabar turi visą informaciją, reikalingą diegimui užbaigti.

Prašome spustelėti mygtuką, kad sukurtumėte duomenų bazės lenteles ir išsaugotumėte visus nustatymus.

");
define("LANINS_058", "7");
define("LANINS_060", "Nepavyko perskaityti sql duomenų failo

Prašome įsitikinti, kad failas [b]core_sql.php[/b] egzistuoja [b]/e107_core/sql[/b] kataloge.");
define("LANINS_061", "e107 nepavyko sukurti visų reikalingu duomenų bazės lentelių.
Prašome išvalyti duomenų bazę ir ištaisyti bet kokias problemas prieš bandant vėl.");


define("LANINS_063", "Sveiki atvykę į e107");

define("LANINS_069", "e107 sėkmingai įdiegta!

Saugumo sumetimais dabar turėtumėte nustatyti failo [b]e107_config.php[/b] leidimus atgal į 644.

Taip pat prašome ištrinti install.php iš savo serverio spustelėję žemiau esančį mygtuką.
");
define("LANINS_070", "e107 nepavyko išsaugoti pagrindinio konfigūracijos failo jūsų serveryje.

Prašome įsitikinti, kad failas [b]e107_config.php[/b] turi teisingus leidimus");
define("LANINS_071", "Diegimas baigtas");

define("LANINS_072", "Administratoriaus vartotojo vardas");
define("LANINS_073", "Šis vardas, kurį naudosite prisijungimui prie svetainės. Jei norite naudoti jį kaip rodomą vardą taip pat");
define("LANINS_074", "Administratoriaus rodomas vardas");
define("LANINS_075", "Tai yra vardas, kurį norite, kad jūsų vartotojai matytų rodomą jūsų profilyje, forumuose ir kitose srityse. Jei norite naudoti tą patį kaip savo vartotojo vardą, palikite šį lauką tuščią.");
define("LANINS_076", "Administratoriaus slaptažodis");
define("LANINS_077", "Prašome įvesti administratoriaus slaptažodį, kurį norite naudoti čia");
define("LANINS_078", "Administratoriaus slaptažodžio patvirtinimas");
define("LANINS_079", "Prašome dar kartą įvesti administratoriaus slaptažodį patvirtinimui");
define("LANINS_080", "Administratoriaus el. paštas");
define("LANINS_081", "Įveskite savo el. pašto adresą");

define("LANINS_082", "vartotojas@jususvetaine.lt");

// Better table creation error reporting
define("LANINS_083", "MySQL praneša klaidą:");
define("LANINS_084", "Diegimo programa nepavyko užmegzti ryšio su duomenų baze");
define("LANINS_085", "Diegimo programa nepavyko pasirinkti duomenų bazės:");

define("LANINS_086", "Administratoriaus vartotojo vardas, administratoriaus slaptažodis ir administratoriaus el. paštas yra būtini laukai. Prašome grįžti į paskutinį puslapį ir įsitikinti, kad informacija įvesta teisingai.");

define("LANINS_087", "Įvairūs");
define("LANINS_088", "Pradžia");
define("LANINS_089", "Atsisiuntimai");
define("LANINS_090", "Nariai");
define("LANINS_091", "Pateikti naujieną");
define("LANINS_092", "Susisiekite su mumis");
define("LANINS_093", "Suteikia prieigą prie privačių meniu elementų");
define("LANINS_094", "Privataus forumo klasės pavyzdys");
define("LANINS_095", "Vientisumo tikrinimas");

define("LANINS_096", 'Naujausi komentarai');
define("LANINS_097", '[daugiau ...]');
define("LANINS_098", 'Straipsniai');
define("LANINS_099", 'Straipsnių pagrindinis puslapis ...');
define("LANINS_100", 'Naujausi forumo įrašai');
define("LANINS_101", 'Atnaujinti meniu nustatymus');
define("LANINS_102", 'Data / Laikas');
define("LANINS_103", 'Apžvalgos');
define("LANINS_104", 'Apžvalgų pagrindinis puslapis ...');

define("LANINS_105", "Duomenų bazės pavadinimas arba priešdėlis, prasidedantis skaitmenimis ir po jų einančiu 'e' arba 'E', nėra priimtinas");
define("LANINS_106", "Įspėjimas - e107 negali rašyti į išvardintus katalogus ir/arba failus. Nors tai nesustabdys e107 diegimo, tai reiškia, kad tam tikros funkcijos nebus prieinamos.
                                Jums reikės pakeisti failų leidimus, kad galitumėte naudoti šias funkcijas");
                                
define("LANINS_107", "Svetainės pavadinimas");
define("LANINS_108", "Mano svetainė");
define("LANINS_109", "Svetainės tema");
define("LANINS_110", "");
define("LANINS_111", "Įtraukti turinį/konfigūraciją");
define("LANINS_112", "Greitai atkurti temos peržiūros ar demo išvaizdą. (Jei prieinama)");
define("LANINS_113", "Prašome įvesti svetainės pavadinimą");
define("LANINS_114", "Prašome pasirinkti temą");
define("LANINS_115", "Temos pavadinimas");
define("LANINS_116", "Temos tipas");
define("LANINS_117", "Svetainės nustatymai");
define("LANINS_118", "Diegti įskaipius");
define("LANINS_119", "Diegti visus įskaipius, kurių gali prireikti temai.");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php nėra tuščias failas");
define("LANINS_122", "Galite turėti esamą instaliacijos");
define("LANINS_123", "Pasirinktinis: jūsų viešas vardas arba pseudonimas. Palikite tuščią, kad naudotumėte vartotojo vardą");
define("LANINS_124", "Prašome pasirinkti slaptažodį iš mažiausiai 8 simbolių");
define("LANINS_125", "e107 sėkmingai įdiegta!");
define("LANINS_126", "Saugumo sumetimais dabar turėtumėte nustatyti failo e107_config.php leidimus atgal į 644.");
define("LANINS_127", "Duomenų bazė [x] jau egzistuoja. Perrašyti ją? (visi esami duomenys bus prarasti)"); 
define("LANINS_128", "Perrašyti");
define("LANINS_129", "Duomenų bazė nerasta.");

define("LANINS_134", "Diegimas");
define("LANINS_135", "iš");   //single time use installer only as in .1 of 8  not replacing by LAN_SEARCH_12
define("LANINS_136", "Ištrinta esama duomenų bazė");
define("LANINS_137", "Rasta esama duomenų bazė");
define("LANINS_138", "Versija");

define("LANINS_141", "Prašome užpildyti formą su MySQL duomenimis. Jei nežinote šios informacijos, kreipkitės į savo tinklapių talpinimo tiekėją. Galite užvesti pelės žymeklį ant kiekvieno lauko papildomai informacijai gauti.");
define("LANINS_142", "SVARBU: Prašome pervardyti e107.htaccess į .htaccess");
define("LANINS_144", "SVARBU: Prašome nukopijuoti ir įklijuoti [b]e107.htaccess[/b] turinį į savo [b].htaccess[/b] failą. Būkite atsargūs ir NEPERRAŠYKITE jokių esamų duomenų, kurie gali būti jame.");
define("LANINS_145", "e107 v2.x reikia PHP [x] įdiegti. Prašome susisiekti su savo talpinimo tiekėju arba perskaityti informaciją adresu [y] prieš tęsiant.");

define("LANINS_146", "Administracijos zonos apipavidalinimas");
define("LANINS_147", "Administracija");

