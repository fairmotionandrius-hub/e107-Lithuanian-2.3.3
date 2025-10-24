<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
*/

if (!defined("PAGE_NAME")) { define("PAGE_NAME", "Suplanuoti užduotis"); }

// Menu
define("LAN_CRON_M_02", "Atnaujinti");

// Table heading

define("LAN_CRON_2", "Funkcija");
define("LAN_CRON_3", "Skirtukas");
define("LAN_CRON_4", "Paskutinis paleidimas");

// Default crons
define("LAN_CRON_01_1", "Testuoti el. paštą");
define("LAN_CRON_01_2", "Siųsti bandomąjį laišką į [eml]."); // [eml] is automatically replaced by head admin e-mail address.
define("LAN_CRON_01_3", "Rekomenduojama išbandyti užduočių planavimo sistemą.");

define("LAN_CRON_02_1", "Pašto eilė");
define("LAN_CRON_02_2", "Apdoroti pašto eilę.");

define("LAN_CRON_03_1", "Pašto grąžinimų tikrinimas");
define("LAN_CRON_03_2", "Tikrinti grąžintus el. laiškus.");

define("LAN_CRON_04_1", "Blokavimų perkrovimo tikrinimas");
define("LAN_CRON_04_2", "Apdoroti perkrovimų grąžinimus.");
define("LAN_CRON_04_3", "Reikalinga tik jei įjungtas blokavimų perkrovimas.");

define("LAN_CRON_05_1", "Duomenų bazės atsarginė kopija");
define("LAN_CRON_05_2", "Sukurti sistemos duomenų bazės atsarginę kopiją į");

define('LAN_CRON_06_1', "Apdoroti blokavimo trigerį");

// Error and info messages
define("LAN_CRON_6", "Nepavyko importuoti nustatymų");
define("LAN_CRON_7", "Nepavyko importuoti laiko nustatymų");
define("LAN_CRON_8", "Importuoti laiko nustatymai:");

define("LAN_CRON_9", "Prieš [x] minutes ir [y] sekundes."); // [x] and [y] are automatically replaced. 
define("LAN_CRON_10", "Prieš [y] sekundes.");

define("LAN_CRON_11", "Aktyvios cron užduotys");
define("LAN_CRON_12", "Paskutinis cron atnaujinimas");
define("LAN_CRON_13", "Įsitikinkite, kad cron.php yra vykdomas.");
define("LAN_CRON_14", "Nustatykite CHMOD /cron.php į 755.");

define("LAN_CRON_15", "Naudokite šią Cron komandą");
define("LAN_CRON_16", "Naudodami serverio valdymo skydelį (pvz. cPanel, DirectAdmin, Plesk ir kt.) sukurkite crontab šiai komandai vykdyti kas minutę jūsų serveryje.");

// leave some room for additions/changes

// Info for checkCoreUpdate cron
define("LAN_CRON_20_1", "Tikrinti e107 atnaujinimus");
define("LAN_CRON_20_2", "Tikrinti e107.org dėl sistemos atnaujinimų"); // [eml] is automatically replaced by head admin e-mail address.
define("LAN_CRON_20_3", "Rekomenduojama, kad sistema būtų atnaujinta.");
define("LAN_CRON_20_4", "Atnaujinti šį Git repozitoriją");
define("LAN_CRON_20_5", "Atnaujinti šią e107 instaliaciją naujausiais failais iš github.");
define("LAN_CRON_20_6", "Rekomenduojama tik kūrėjams.");
//define("LAN_CRON_20_7", "Warning!");//LAN_WARNING
define("LAN_CRON_20_8", "Gali sukelti svetainės nestabilumą!");

define("LAN_CRON_30", "Kas minutę");
define("LAN_CRON_31", "Kas antrą minutę");
define("LAN_CRON_32", "Kas 5 minutes");
define("LAN_CRON_33", "Kas 10 minučių");
define("LAN_CRON_34", "Kas 15 minučių");
define("LAN_CRON_35", "Kas 30 minučių");

define("LAN_CRON_36", "Kas valandą");
define("LAN_CRON_37", "Kas antrą valandą");
define("LAN_CRON_38", "Kas 3 valandas");
define("LAN_CRON_39", "Kas 6 valandas");

define("LAN_CRON_40", "Kasdien");
define("LAN_CRON_41", "Kas mėnesį");
define("LAN_CRON_42", "Kiekvieną savaitės dieną");

define("LAN_CRON_50", "Minutė(-s):");
define("LAN_CRON_51", "Valanda(-s):");
define("LAN_CRON_52", "Diena(-s):");
define("LAN_CRON_53", "Mėnuo(-s):");   
define("LAN_CRON_54", "Savaitės diena(-s):");
define("LAN_CRON_55", "Duomenų bazės atsarginė kopija nepavyko");
define("LAN_CRON_56", "Duomenų bazės atsarginė kopija baigta");

define("LAN_CRON_60", "Eiti į cPanel");
define("LAN_CRON_61", "Generuoti naują cron ženklą");
define("LAN_CRON_62", "Vykdoma konfigūracijos funkcija [b][x][/b]");
define("LAN_CRON_63", "Konfigūracijos funkcija [b][x][/b] NERASTA.");
define("LAN_CRON_64", "Administratorius gali automatizuoti užduotis naudodamas e107 suplanuotas užduotis. [br]
Valdymo skirtuke galite redaguoti, ištrinti ir vykdyti užduotis. [br]
Redaguodami užduotį galite nustatyti minutes, valandas, dienas, mėnesį arba savaitės dieną, kada norite, kad užduotis būtų vykdoma. Naudokite * kiekvienam periodui. Naudokite Aktyvi savybę, kad įgalintumėte užduotį.[br]
Pastaba: Nerekomenduojama trinti standartinių užduočių.[br]
");

define("LAN_CRON_BACKUP", "Atsarginė kopija");
define("LAN_CRON_LOGGING", "Registravimas");
define("LAN_CRON_RUNNING", "Vykdoma");

define("LAN_CRON_65", "Atnaujinti git temos repozitoriją");
define("LAN_CRON_66", "Git repozitorija nerasta");
define("LAN_CRON_67", "Git repozitorija temų aplanke nerasta");
