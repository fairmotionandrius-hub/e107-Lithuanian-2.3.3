<?php
/*
 * Copyright (C) 2008-2013 e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 *
 * Admin Language File
 *
 */

/*
The definitions in this file are for standard "explanatory" messages which might be entered
into any of the system logs. They are in three groups with different prefixes:
        LAN_ADMIN_LOG_nnn - the admin log (records intentional actions by admins)
        LAN_AUDIT_LOG_nnn - the audit log (records actions, generally intentional, by users)
        LAN_ROLL_LOG_nnn - the rolling log (records extraneous events, debugging etc)
*/


// User audit trail events. For messages 11-30, the last 2 digits must match the define for the event type in the admin log class file
define("LAN_AUDIT_LOG_001", "Prieiga užblokuotam vartotojui");
define("LAN_AUDIT_LOG_002", "Aktyvuota apsauga nuo užpildymo");
define("LAN_AUDIT_LOG_003", "Prieiga iš užblokuoto IP adreso");
define("LAN_AUDIT_LOG_004", "");
define("LAN_AUDIT_LOG_005", "");
define("LAN_AUDIT_LOG_006", "Vartotojas pakeitė slaptažodį");
define("LAN_AUDIT_LOG_007", "Vartotojas pakeitė el. pašto adresą");
define("LAN_AUDIT_LOG_008", "");
define("LAN_AUDIT_LOG_009", "");
define("LAN_AUDIT_LOG_010", "Vartotojo duomenis pakeitė administratorius");
define("LAN_AUDIT_LOG_011", "Vartotojas užsiregistravo");
define("LAN_AUDIT_LOG_012", "Vartotojas patvirtino registraciją");
define("LAN_AUDIT_LOG_013", "Vartotojo prisijungimas");
define("LAN_AUDIT_LOG_014", "Vartotojo atsijungimas");
define("LAN_AUDIT_LOG_015", "Vartotojas pakeitė rodomą vardą");
define("LAN_AUDIT_LOG_016", "Vartotojas pakeitė slaptažodį");
define("LAN_AUDIT_LOG_017", "Vartotojas pakeitė el. pašto adresą");
define("LAN_AUDIT_LOG_018", "Vartotojo slaptažodis atnaujintas");
define("LAN_AUDIT_LOG_019", "Vartotojas pakeitė nustatymus");
define("LAN_AUDIT_LOG_020", "Vartotoją pridėjo administratorius");
define("LAN_AUDIT_LOG_021", "Vartotojo el. paštas grąžintas");
define("LAN_AUDIT_LOG_022", "Vartotojas užblokuotas");
define("LAN_AUDIT_LOG_023", "Vartotojo grąžinimas atstatytas");
define("LAN_AUDIT_LOG_024", "Vartotojo laikina būsena");


// Admin log events
//-----------------
define("LAN_AL_ADLOG_01", "Administratoriaus žurnalas - nustatymai atnaujinti");
define("LAN_AL_ADLOG_02", "Administratoriaus žurnalas - ištrinti seni duomenys");
define("LAN_AL_ADLOG_03", "Vartotojo audito žurnalas - ištrinti seni duomenys");
define("LAN_AL_ADLOG_04", "Vartotojo audito parinktys atnaujintos");
define("LAN_AL_ADLOG_05", "");

// User edits
//-----------
define("LAN_AL_USET_01", "Administratorius redagavo vartotojo duomenis");
define("LAN_AL_USET_02", "Vartotoją pridėjo administratorius");
define("LAN_AL_USET_03", "Vartotojo parinktys atnaujintos");
define("LAN_AL_USET_04", "Vartotojai išvalyti");
define("LAN_AL_USET_05", "Vartotojas užblokuotas");
define("LAN_AL_USET_06", "Vartotojas atblokuotas");
define("LAN_AL_USET_07", "Vartotojas ištrintas");
define("LAN_AL_USET_08", "Vartotojas padaryt​​as administratoriumi");
define("LAN_AL_USET_09", "Vartotojo administratoriaus statusas atšauktas");
define("LAN_AL_USET_10", "Vartotojas patvirtintas");
define("LAN_AL_USET_11", "Patvirtinimo el. laiškas išsiųstas iš naujo");
define("LAN_AL_USET_12", "Visi patvirtinimo el. laiškai išsiųsti iš naujo");
define("LAN_AL_USET_13", "Grąžinti el. laiškai ištrinti");
define("LAN_AL_USET_14", "Klasės narystė atnaujinta");
define("LAN_AL_USET_15", "Registracija atmesta");                             // Too many users at same IP address

// Userclass events
//------------------
define("LAN_AL_UCLASS_00", "Nežinomas su vartotojų klase susijęs įvykis");
define("LAN_AL_UCLASS_01", "Vartotojų klasė sukurta");
define("LAN_AL_UCLASS_02", "Vartotojų klasė ištrinta");
define("LAN_AL_UCLASS_03", "Vartotojų klasė redaguota");
define("LAN_AL_UCLASS_04", "Klasės narystė atnaujinta");
define("LAN_AL_UCLASS_05", "Pradiniai vartotojų klasės nustatymai redaguoti");
define("LAN_AL_UCLASS_06", "Klasės narystė išvalyta");

// Banlist events
//----------------
define("LAN_AL_BANLIST_00", "Nežinomas su blokavimu susijęs įvykis");
define("LAN_AL_BANLIST_01", "Rankinis blokavimas pridėtas");
define("LAN_AL_BANLIST_02", "Blokavimas ištrintas");
define("LAN_AL_BANLIST_03", "Blokavimo laikas pakeistas");
define("LAN_AL_BANLIST_04", "Baltojo sąrašo įrašas pridėtas");
define("LAN_AL_BANLIST_05", "Baltojo sąrašo įrašas ištrintas");
define("LAN_AL_BANLIST_06", "Blokavimų sąrašas eksportuotas");
define("LAN_AL_BANLIST_07", "Blokavimų sąrašas importuotas");
define("LAN_AL_BANLIST_08", "Blokavimų sąrašo parinktys atnaujintos");
define("LAN_AL_BANLIST_09", "Blokavimų sąrašo įrašas redaguotas");
define("LAN_AL_BANLIST_10", "Baltojo sąrašo įrašas redaguotas");
define("LAN_AL_BANLIST_11", "Baltojo sąrašo atitikimas blokavimo įrašui");
define("LAN_AL_BANLIST_12", "Pasibaigę blokavimai išvalyti");


// Comment-related events
//-----------------------
define("LAN_AL_COMMENT_01", "Komentaras(-ai) ištrinti");

// Rolling log events
//-------------------
define("LAN_ROLL_LOG_01", "Tuščias vartotojo vardas ir/arba slaptažodis");
define("LAN_ROLL_LOG_02", "Įvestas neteisingas paveikslėlio kodas");
define("LAN_ROLL_LOG_03", "Netinkama vartotojo vardo/slaptažodžio kombinacija");
define("LAN_ROLL_LOG_04", "Įvestas netinkamas vartotojo vardas");
define("LAN_ROLL_LOG_05", "Prisijungimo bandymas vartotojo, kuris nėra visiškai užsiregistravęs");
define("LAN_ROLL_LOG_06", "Prisijungimas užblokuotas įvykio apdorojimo programos");
define("LAN_ROLL_LOG_07", "Keli prisijungimai iš to paties adreso");
define("LAN_ROLL_LOG_08", "Per ilgas vartotojo vardo ilgis");
define("LAN_ROLL_LOG_09", "Užblokuotas vartotojas bandė prisijungti");
define("LAN_ROLL_LOG_10", "Prisijungimo klaida - priežastis nežinoma");
define("LAN_ROLL_LOG_11", "Administratoriaus prisijungimo klaida");

// Prefs events
//-------------
define("LAN_AL_PREFS_01", "Nustatymai pakeisti");
define("LAN_AL_PREFS_02", "Nauji nustatymai sukurti");
define("LAN_AL_PREFS_03", "Klaida išsaugant nustatymus");


// Front Page events
//------------------
define("LAN_AL_FRONTPG_00", "Nežinomas su pagrindiniame puslapyje susijęs įvykis");
define("LAN_AL_FRONTPG_01", "Taisyklių tvarka pakeista");
define("LAN_AL_FRONTPG_02", "Taisyklė pridėta");
define("LAN_AL_FRONTPG_03", "Taisyklė redaguota");
define("LAN_AL_FRONTPG_04", "Taisyklė ištrinta");
define("LAN_AL_FRONTPG_05", "");
define("LAN_AL_FRONTPG_06", "");


// User theme admin
//-----------------
define("LAN_AL_UTHEME_00", "Nežinomas su vartotojo tema susijęs įvykis");
define("LAN_AL_UTHEME_01", "Vartotojo temos nustatymai pakeisti");
define("LAN_AL_UTHEME_02", "");


// Update routines
//----------------
define("LAN_AL_UPDATE_00", "Nežinomas su programinės įrangos atnaujinimu susijęs įvykis");
define("LAN_AL_UPDATE_01", "Atnaujinimas iš 1.0 į 2.0 įvykdytas");
define("LAN_AL_UPDATE_02", "Atnaujinimas iš 0.7.x į 0.7.6 įvykdytas");
define("LAN_AL_UPDATE_03", "Trūkstami nustatymai pridėti");


// Administrator routines
//-----------------------
define("LAN_AL_ADMIN_00", "Nežinomas administratoriaus įvykis");
define("LAN_AL_ADMIN_01", "Administratoriaus leidimai atnaujinti");
define("LAN_AL_ADMIN_02", "Administratoriaus teisės pašalintos");
define("LAN_AL_ADMIN_03", "");

// Maintenance mode
//-----------------
define("LAN_AL_MAINT_00", "Nežinomas priežiūros pranešimas");
define("LAN_AL_MAINT_01", "Priežiūros režimas nustatytas");
define("LAN_AL_MAINT_02", "Priežiūros režimas išvalytas");


// Sitelinks routines
//-------------------
define("LAN_AL_SLINKS_00", "Nežinomas svetainės nuorodų pranešimas");
define("LAN_AL_SLINKS_01", "Subnuorodos sugeneruotos");
define("LAN_AL_SLINKS_02", "Svetainės nuoroda perkelta aukštyn");
define("LAN_AL_SLINKS_03", "Svetainės nuoroda perkelta žemyn");
define("LAN_AL_SLINKS_04", "Svetainės nuorodų tvarka atnaujinta");
define("LAN_AL_SLINKS_05", "Svetainės nuorodų parinktys atnaujintos");
define("LAN_AL_SLINKS_06", "Svetainės nuoroda ištrinta");
define("LAN_AL_SLINKS_07", "Svetainės nuoroda pateikta");
define("LAN_AL_SLINKS_08", "Svetainės nuoroda atnaujinta");


// Theme manager routines
//-----------------------
define("LAN_AL_THEME_00", "Nežinomas su tema susijęs pranešimas");
define("LAN_AL_THEME_01", "Svetainės tema atnaujinta");
define("LAN_AL_THEME_02", "Administratoriaus tema atnaujinta");
define("LAN_AL_THEME_03", "Paveikslėlių išankstinis įkėlimas/svetainės CSS atnaujintas");
define("LAN_AL_THEME_04", "Administratoriaus stilius/CSS atnaujintas");
define("LAN_AL_THEME_05", "");


// Cache control routines
//-----------------------
define("LAN_AL_CACHE_00", "Nežinomas podėlio valdymo pranešimas");
define("LAN_AL_CACHE_01", "Podėlio nustatymai atnaujinti");
define("LAN_AL_CACHE_02", "Sistemos podėlis išvalytas");
define("LAN_AL_CACHE_03", "Turinio podėlis išvalytas");
define("LAN_AL_CACHE_04", "");


// Emote admin
//------------
define("LAN_AL_EMOTE_00", "Nežinomas su šypsenėlėmis susijęs pranešimas");
define("LAN_AL_EMOTE_01", "Aktyvi šypsenėlių pakuotė pakeista");
define("LAN_AL_EMOTE_02", "Šypsenėlės aktyvuotos");
define("LAN_AL_EMOTE_03", "Šypsenėlės deaktyvuotos");


// Welcome message
//----------------
define("LAN_AL_WELCOME_00", "Nežinomas su pasisveikinimu susijęs pranešimas");
define("LAN_AL_WELCOME_01", "Pasisveikinimo pranešimas sukurtas");
define("LAN_AL_WELCOME_02", "Pasisveikinimo pranešimas atnaujintas");
define("LAN_AL_WELCOME_03", "Pasisveikinimo pranešimas ištrintas");
define("LAN_AL_WELCOME_04", "Pasisveikinimo pranešimo parinktys pakeistos");
define("LAN_AL_WELCOME_05", "");


// Admin Password
//---------------
define("LAN_AL_ADMINPW_01", "Administratoriaus slaptažodis pakeistas");
define("LAN_AL_ADMINPW_02", "Administratoriaus slaptažodis iš naujo užmaišytas");

// Banners Admin
//--------------
define("LAN_AL_BANNER_00", "Nežinomas su reklaminiu skydeliu susijęs pranešimas");
define("LAN_AL_BANNER_01", "Reklaminių skydelių meniu atnaujinimas");
define("LAN_AL_BANNER_02", "Reklaminis skydelis sukurtas");
define("LAN_AL_BANNER_03", "Reklaminis skydelis atnaujintas");
define("LAN_AL_BANNER_04", "Reklaminis skydelis ištrintas");
define("LAN_AL_BANNER_05", "Reklaminio skydelio konfigūracija atnaujinta");
define("LAN_AL_BANNER_06", "");

// Image management
//-----------------
define("LAN_AL_IMALAN_00", "Nežinomas su paveikslėliu susijęs pranešimas");
define("LAN_AL_IMALAN_01", "Avataras ištrintas");
define("LAN_AL_IMALAN_02", "Visi avatarai ir nuotraukos ištrinti");
define("LAN_AL_IMALAN_03", "Avataras ištrintas");
define("LAN_AL_IMALAN_04", "Nustatymai atnaujinti");
define("LAN_AL_IMALAN_05", "");
define("LAN_AL_IMALAN_06", "");

// Language management
//--------------------
define("LAN_AL_LANG_00", "Nežinomas su kalba susijęs pranešimas");
define("LAN_AL_LANG_01", "Kalbos nustatymai pakeisti");
define("LAN_AL_LANG_02", "Kalbos lentelės ištrinto");
define("LAN_AL_LANG_03", "Kalbos lentelės sukurtos");
define("LAN_AL_LANG_04", "Kalbos zip failas sukurtas");
define("LAN_AL_LANG_05", "");

// Meta Tags
//----------
define("LAN_AL_META_01", "Meta žymės atnaujintos");

// Downloads
//----------
define("LAN_AL_DOWNL_01", "Atsisiuntimo parinktys pakeistos");
define("LAN_AL_DOWNL_02", "Atsisiuntimo kategorija sukurta");
define("LAN_AL_DOWNL_03", "Atsisiuntimo kategorija atnaujinta");
define("LAN_AL_DOWNL_04", "Atsisiuntimo kategorija ištrinta");
define("LAN_AL_DOWNL_05", "Atsisiuntimas sukurtas");
define("LAN_AL_DOWNL_06", "Atsisiuntimas atnaujintas");
define("LAN_AL_DOWNL_07", "Atsisiuntimas ištrintas");
define("LAN_AL_DOWNL_08", "Atsisiuntimo kategorijos tvarka atnaujinta");
define("LAN_AL_DOWNL_09", "Atsisiuntimo limitas pridėtas");
define("LAN_AL_DOWNL_10", "Atsisiuntimo limitas redaguotas");
define("LAN_AL_DOWNL_11", "Atsisiuntimo limitas ištrintas");
define("LAN_AL_DOWNL_12", "Atsisiuntimo veidrodis pridėtas");
define("LAN_AL_DOWNL_13", "Atsisiuntimo veidrodis atnaujintas");
define("LAN_AL_DOWNL_14", "Atsisiuntimo veidrodis ištrintas");
define("LAN_AL_DOWNL_15", "");

// Custom Pages/Menus
//-------------------
define("LAN_AL_CPAGE_01", "Pasirinktinis puslapis/meniu pridėtas");
define("LAN_AL_CPAGE_02", "Pasirinktinis puslapis/meniu atnaujintas");
define("LAN_AL_CPAGE_03", "Pasirinktinis puslapis/meniu ištrintas");
define("LAN_AL_CPAGE_04", "Pasirinktinio puslapio/meniu nustatymai atnaujinti");

// Extended User Fields
//---------------------
define("LAN_AL_EUF_01", "Išplėstinis vartotojo laukas perkeltas aukštyn");
define("LAN_AL_EUF_02", "Išplėstinis vartotojo laukas perkeltas žemyn");
define("LAN_AL_EUF_03", "Išplėstinio vartotojo lauko kategorija perkelta aukštyn");
define("LAN_AL_EUF_04", "Išplėstinio vartotojo lauko kategorija perkelta žemyn");
define("LAN_AL_EUF_05", "Išplėstinis vartotojo laukas pridėtas");
define("LAN_AL_EUF_06", "Išplėstinis vartotojo laukas atnaujintas");
define("LAN_AL_EUF_07", "Išplėstinis vartotojo laukas ištrintas");
define("LAN_AL_EUF_08", "Išplėstinio vartotojo lauko kategorija pridėta");
define("LAN_AL_EUF_09", "Išplėstinio vartotojo lauko kategorija atnaujinta");
define("LAN_AL_EUF_10", "Išplėstinio vartotojo lauko kategorija ištrinta");
define("LAN_AL_EUF_11", "Išplėstiniai vartotojo laukai aktyvuoti");
define("LAN_AL_EUF_12", "Išplėstiniai vartotojo laukai deaktyvuoti");

// Menus
//------
define("LAN_AL_MENU_01", "Meniu aktyvuotas");
define("LAN_AL_MENU_02", "Meniu - nustatyti matomumą");
define("LAN_AL_MENU_03", "Meniu - pakeisti sritį");
define("LAN_AL_MENU_04", "Meniu deaktyvuotas");
define("LAN_AL_MENU_05", "Meniu - perkelti į viršų");
define("LAN_AL_MENU_06", "Meniu - perkelti į apačią");
define("LAN_AL_MENU_07", "Meniu - perkelti aukštyn");
define("LAN_AL_MENU_08", "Meniu - perkelti žemyn");
define("LAN_AL_MENU_09", "");

// Public Uploads
//---------------
define("LAN_AL_UPLOAD_01", "Įkeltas failas ištrintas");
define("LAN_AL_UPLOAD_02", "Įkėlimo nustatymai pakeisti");

// Search
//-------
define("LAN_AL_SEARCH_01", "Paieškos nustatymai atnaujinti");
define("LAN_AL_SEARCH_02", "Paieškos nustatymai atnaujinti");
define("LAN_AL_SEARCH_03", "Paieškos parametrai automatiškai atnaujinti");
define("LAN_AL_SEARCH_04", "Paieškos sritys atnaujintos");
define("LAN_AL_SEARCH_05", "Paieškos apdorojimo programos nustatymai atnaujinti");
define("LAN_AL_SEARCH_06", "");

// Notify
//-------
define("LAN_AL_NOTIFY_01", "Pranešimų nustatymai atnaujinti");

// News
//-----
define("LAN_AL_NEWS_01", "Naujienų elementas ištrintas");
define("LAN_AL_NEWS_02", "Naujienų kategorija ištrinta");
define("LAN_AL_NEWS_03", "Pateiktos naujienos ištrinto");
define("LAN_AL_NEWS_04", "Naujienų kategorija sukurta");
define("LAN_AL_NEWS_05", "Naujienų kategorija atnaujinta");
define("LAN_AL_NEWS_06", "Naujienų nustatymai atnaujinti");
define("LAN_AL_NEWS_07", "Pateiktos naujienos patvirtintos");
define("LAN_AL_NEWS_08", "Naujienų elementas pridėtas");
define("LAN_AL_NEWS_09", "Naujienų elementas atnaujintas");
define("LAN_AL_NEWS_10", "Naujienų kategorijos perrašymas pakeistas");
define("LAN_AL_NEWS_11", "Naujienų kategorijos perrašymas ištrintas");
define("LAN_AL_NEWS_12", "Naujienų perrašymas pakeistas");
define("LAN_AL_NEWS_13", "Naujienų perrašymas ištrintas");



// File Manager
//-------------
define("LAN_AL_FILEMAN_01", "Failas(-ai) ištrintas(-i)");
define("LAN_AL_FILEMAN_02", "Failas(-ai) perkeltas(-i)");
define("LAN_AL_FILEMAN_03", "Failas(-ai) įkeltas(-i)");
define("LAN_AL_FILEMAN_04", "");

// Mail
//-----
define("LAN_AL_MAIL_01", "Bandomasis el. laiškas išsiųstas");
define("LAN_AL_MAIL_02", "Masinis siuntimas sukurtas");
define("LAN_AL_MAIL_03", "El. pašto nustatymai atnaujinti");
define("LAN_AL_MAIL_04", "Masinio siuntimo detalės ištrinto");
define("LAN_AL_MAIL_05", "El. pašto duomenų bazė sutvarkyta");
define("LAN_AL_MAIL_06", "Masinis siuntimas aktyvuotas");
define("LAN_AL_MAIL_07", "");

// Plugin Manager
//---------------
define("LAN_AL_PLUGMAN_01", "Priedas įdiegtas");
define("LAN_AL_PLUGMAN_02", "Priedas atnaujintas");
define("LAN_AL_PLUGMAN_03", "Priedas pašalintas");
define("LAN_AL_PLUGMAN_04", "Priedas atnaujintas");

// URL Manager
//---------------
define("LAN_AL_EURL_01", "Svetainės URL konfigūracija pakeista");

// Sundry Pseudo-plugins - technically they"re plugins, but not worth the file overhead of treating them separately
//----------------------
define("LAN_AL_MISC_01", "Medžio meniu nustatymai atnaujinti");
define("LAN_AL_MISC_02", "Prisijungusių meniu nustatymai atnaujinti");
define("LAN_AL_MISC_03", "Prisijungimo meniu nustatymai atnaujinti");
define("LAN_AL_MISC_04", "Komentarų meniu nustatymai atnaujinti");
define("LAN_AL_MISC_05", "Laikrodžio meniu nustatymai atnaujinti");
define("LAN_AL_MISC_06", "Tinklaraščio kalendoriaus meniu nustatymai atnaujinti");
//define("LAN_AL_MISC_07", "");


define("LAN_AL_PING_01", "Ping į paslaugą");

define("LAN_AL_ADMINUI_01", "Admin-UI DB lentelės įterpimas: [x]");
define("LAN_AL_ADMINUI_02", "Admin-UI DB lentelės atnaujinimas: [x]");
define("LAN_AL_ADMINUI_03", "Admin-UI DB lentelės trynimas: [x]");
define("LAN_AL_ADMINUI_04", "Admin-UI DB klaida: [x]");

define("LAN_AL_BACKUP", "Duomenų bazės atsarginė kopija");

define("LAN_AL_MEDIA_01", "Medijos įkėlimas");

define("LAN_AL_USET_100", "Administratorius prisijungė kaip kitas vartotojas");
define("LAN_AL_USET_101", "Administratorius atsijungė kaip kitas vartotojas");
