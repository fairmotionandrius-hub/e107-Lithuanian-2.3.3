<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

// TODO - LANS - MAJOR LAN REWRITE NEEDED 

define("CORE_DATE_ORDER", "dmy");                       // Temporary until we find somewhere better to put it.
                                                                                        // Defines order of field entry/display in date boxes
                                                                                        // Acceptable values: dmy, mdy, ymd
define("LAN_MAILOUT_01", "Siuntėjo vardas");
define("LAN_MAILOUT_02", "Siuntėjo el. paštas");
define("LAN_MAILOUT_03", "Kam");
define("LAN_MAILOUT_04", "Kopija");
define("LAN_MAILOUT_05", "Slapta kopija");
define("LAN_MAILOUT_06", "Tema");
define("LAN_MAILOUT_07", "Priedas");
define("LAN_MAILOUT_08", "Siųsti el. laišką");
define("LAN_MAILOUT_09", "Siuntimo formatas");
define("LAN_MAILOUT_10", "Vartotojas prenumeruoja");
define("LAN_MAILOUT_11", "Įterpti kintamuosius");
define("LAN_MAILOUT_12", "Visi vartotojai");
define("LAN_MAILOUT_13", "Visi nepatvirtinti vartotojai ");
define("LAN_MAILOUT_14", "Rodomas vardas");
define("LAN_MAILOUT_15", "Masinis siuntimas");
define("LAN_MAILOUT_16", "Vartotojo vardas");
define("LAN_MAILOUT_17", "Registracijos nuoroda");
define("LAN_MAILOUT_18", "Vartotojo ID");
define("LAN_MAILOUT_19", "Nenurodytas tikslo el. pašto adresas");
define("LAN_MAILOUT_20", "Sendmail-kelias");
define("LAN_MAILOUT_21", "Masinio siuntimo įrašai");
define("LAN_MAILOUT_22", "Šiuo metu nėra išsaugotų įrašų");
define("LAN_MAILOUT_23", "vartotojų klasė: ");
define("LAN_MAILOUT_24", "el. laiškas(-ai) paruošti siuntimui");
define("LAN_MAILOUT_25", "Masinio siuntimo valdymas");
define("LAN_MAILOUT_26", "Pristabdyti masinį siuntimą kas");
define("LAN_MAILOUT_27", "el. laiškų ");
define("LAN_MAILOUT_28", "Išsaugoti pakeitimus");
define("LAN_MAILOUT_29", "sekundžių");
define("LAN_MAILOUT_30", "Naudojama daugiausia su SMTP keepalive. Pauzė ilgesnė nei 30 sekundžių gali sukelti naršyklės laukimo laiko pabaigą");
define("LAN_MAILOUT_31", "Grąžintų el. laiškų apdorojimas");
define("LAN_MAILOUT_32", "El. pašto adresas");
define("LAN_MAILOUT_33", "Įeinančios pašto serveris");
define("LAN_MAILOUT_34", "Paskyros (vartotojo) vardas");
define("LAN_MAILOUT_35", "Slaptažodis");
define("LAN_MAILOUT_36", "Ištrinti grąžintus laiškus po patikrinimo");
define("LAN_MAILOUT_37", "Tęsti");
define("LAN_MAILOUT_38", "Atšaukti");
define("LAN_MAILOUT_39", "Siunčiama");
define("LAN_MAILOUT_40", "Turite pervadinti <b>e107.htaccess</b> į <b>.htaccess</b> kataloge");
define("LAN_MAILOUT_41", "prieš siunčiant laišką iš šio puslapio.");
define("LAN_MAILOUT_42", "Įspėjimas");//NOT_USED
define("LAN_MAILOUT_43", "Vartotojo vardas");
define("LAN_MAILOUT_44", "Vartotojo prisijungimas");
define("LAN_MAILOUT_45", "Vartotojo el. paštas");
define("LAN_MAILOUT_46", "Vartotojo atitikimas");
define("LAN_MAILOUT_47", "turi");
define("LAN_MAILOUT_48", "lygus");
define("LAN_MAILOUT_49", "Id");//LAN_ID
define("LAN_MAILOUT_50", "Autorius");//LAN_AUTHOR
define("LAN_MAILOUT_51", "Tema");
define("LAN_MAILOUT_52", "Pask. keitimas");
define("LAN_MAILOUT_53", "Administratoriai");
define("LAN_MAILOUT_54", "Sau");
define("LAN_MAILOUT_55", "Vartotojų klasė");
define("LAN_MAILOUT_56", "Paskutinis apsilankymas");
define("LAN_MAILOUT_57", "Siųsti masinius SMTP el. laiškus blokais");                    // SMTP KeepAlive option
define("LAN_MAILOUT_58", "Yra problema su priedu:");
define("LAN_MAILOUT_59", "Siuntimo eiga");
define("LAN_MAILOUT_60", "Siunčiama...");
define("LAN_MAILOUT_61", "Nėra likusių el. laiškų siuntimui.");
define("LAN_MAILOUT_62", "El. laiškai išsiųsti:");
define("LAN_MAILOUT_63", "El. laiškai nepavyko:");
define("LAN_MAILOUT_64", "Iš viso praleista laiko:");
define("LAN_MAILOUT_65", "sekundžių");
define("LAN_MAILOUT_66", "Sėkmingai atšaukta");
define("LAN_MAILOUT_67", "El. laiškas negali būti išsiųstas. Patikrinkite savo SMTP nustatymus arba pasirinkite kitą siuntimo metodą ir bandykite dar kartą.");
define("LAN_MAILOUT_68", "Registruoti vartotojai");
define("LAN_MAILOUT_69", "atitikimų, po ");
define("LAN_MAILOUT_70", " dublikatų pašalinimo.");
define("LAN_MAILOUT_71", "Iš viso el. laiškų siųsti");
define("LAN_MAILOUT_72", "Masinio siuntimo registravimas");
define("LAN_MAILOUT_73", "Be registravimo");
define("LAN_MAILOUT_74", "Tik registravimas (nesiųsti)");
define("LAN_MAILOUT_75", "Registruoti ir siųsti");
define("LAN_MAILOUT_76", "Įtraukti el. pašto informaciją į žurnalą");
define("LAN_MAILOUT_77", "El. pašto adresų šaltiniai");
define("LAN_MAILOUT_78", "Masinio siuntimo būsena");
define("LAN_MAILOUT_79", "Nėra masinių siuntimų rodymui");
//define("LAN_MAILOUT_80", "Date");//LAN_DATE
define("LAN_MAILOUT_81", "El. laiškas sėkmingai išsiųstas, prašome patikrinti savo pašto dėžutę.");
define("LAN_MAILOUT_82", "Laiškų išsiųsta");
define("LAN_MAILOUT_83", "Laiškų liko");
define("LAN_MAILOUT_84", "Laiško ID");
define("LAN_MAILOUT_85", "Iniciatorius");
define("LAN_MAILOUT_86", "Siųsti iš naujo");
define("LAN_MAILOUT_87", "SMTP serveris");
define("LAN_MAILOUT_88", "SMTP vartotojo vardas");
define("LAN_MAILOUT_89", "SMTP slaptažodis");
define("LAN_MAILOUT_90", "SMTP funkcijos");
define("LAN_MAILOUT_91", "POP prieš SMTP");
define("LAN_MAILOUT_92", "SSL");
define("LAN_MAILOUT_93", "TLS");
define("LAN_MAILOUT_94", "(Naudokite SSL gmail/googlemail)");
define("LAN_MAILOUT_95", "Naudoti VERP masiniam siuntimui");
//define("LAN_MAILOUT_96", "none");//LAN_NONE
define("LAN_MAILOUT_97", "Siuntimo rezultatai");
define("LAN_MAILOUT_98", "Našlaitiniai įrašai");
define("LAN_MAILOUT_99", "Patvirtinti masinio siuntimo pakartojimą");
define("LAN_MAILOUT_100", "Pranešimas");
define("LAN_MAILOUT_101", "El. laiško detalės");
define("LAN_MAILOUT_102", "Masinio siuntimo detalės");
define("LAN_MAILOUT_103", "Siuntimo bandymų rezultatai");
define("LAN_MAILOUT_104", "Nesibandyta siųsti arba klaida išsaugant rezultatą");
define("LAN_MAILOUT_105", "Iki 10 nesėkmių detalės");
define("LAN_MAILOUT_106", "El. laiškas negali būti išsiųstas. Atrodo, kad jūsų serveris nėra teisingai sukonfigūruotas siųsti el. laiškus, prašome bandyti dar kartą naudojant SMTP, arba susisiekti su savo prieglobos paslaugų teikėju ir paprašyti patikrinti sendmail / el. pašto serverio nustatymus.");
define("LAN_MAILOUT_107", "ties");
define("LAN_MAILOUT_108", "Rezultatas");
define("LAN_MAILOUT_109", "Rodyti detales");
define("LAN_MAILOUT_110", "Siųsti bandomąjį el. laišką");
define("LAN_MAILOUT_111", "El. laiško pavadinimas (nesiųstas)");
define("LAN_MAILOUT_112", "Siųsti bandomąjį el. laišką adresu");
define("LAN_MAILOUT_113", "Bandomasis el. laiškas nuo");
define("LAN_MAILOUT_114", "Tai bandomasis el. laiškas, atrodo, kad jūsų el. pašto nustatymai veikia gerai! [br][br] Pagarbiai [br] iš e107 svetainės sistemos.");
define("LAN_MAILOUT_115", "Masinio siuntimo metodas");
define("LAN_MAILOUT_116", "Jei nesate tikri, palikite kaip php");
define("LAN_MAILOUT_117", "baigta");
define("LAN_MAILOUT_118", "Spauskite 'tęsti' pradėti siųsti el. laiškus. Spauskite 'atšaukti' sustabdyti veikimą. Pabaigus, pasirinkite kitą puslapį. Neišsiųsti laiškai gali būti peržiūrėti per 'Masinio siuntimo būsena' ekraną");
define("LAN_MAILOUT_119", "Tik registravimas, su klaidomis");
define("LAN_MAILOUT_120", "Paskyros tipas");
define("LAN_MAILOUT_121", "Standartinis POP3");
define("LAN_MAILOUT_122", "POP3, TLS išjungta");
define("LAN_MAILOUT_123", "POP3 su TLS");
define("LAN_MAILOUT_124", "IMAP");
define("LAN_MAILOUT_125", "Tik tekstas");
define("LAN_MAILOUT_126", "Tekstas ir HTML");
define("LAN_MAILOUT_127", "Įtraukti temą");
define("LAN_MAILOUT_128", "Siuntimo klaida");
define("LAN_MAILOUT_129", "Galiojimo pabaigos data");
define("LAN_MAILOUT_130", "Sukūrimo data");
define("LAN_MAILOUT_131", "Siuntimas pradėtas");
define("LAN_MAILOUT_132", "Siuntimas baigtas");
//define("LAN_MAILOUT_133", "Source"); // Moved to lan_admin.php
define("LAN_MAILOUT_134", "Prioritetas");
define("LAN_MAILOUT_135", "Antraštė");//LAN_TITLE
define("LAN_MAILOUT_136", "Masinio siuntimo būsena");
define("LAN_MAILOUT_137", "Laiško nuoroda");
define("LAN_MAILOUT_138", "El. pašto būsena");
define("LAN_MAILOUT_139", "Aktyvavimo data");
define("LAN_MAILOUT_140", "Gavėjo el. paštas");
define("LAN_MAILOUT_141", "Gavėjo vardas");
define("LAN_MAILOUT_142", "Gavėjo vartotojo ID");
define("LAN_MAILOUT_143", "Gavėjo nuoroda");
define("LAN_MAILOUT_144", "Grąžinta");
define("LAN_MAILOUT_145", "Naujas el. laiškas išsaugotas");
define("LAN_MAILOUT_146", "Klaida išsaugant el. laišką");
define("LAN_MAILOUT_147", "El. laiškas atnaujintas");
define("LAN_MAILOUT_148", "Vartotojo reikšmės");
define("LAN_MAILOUT_149", "Siuntėjo el. paštas");
define("LAN_MAILOUT_150", "Siuntėjo vardas");
define("LAN_MAILOUT_151", "Kopija kam");
define("LAN_MAILOUT_152", "Slapta kopija kam");
define("LAN_MAILOUT_153", "Priedai");
define("LAN_MAILOUT_154", "Siuntimo formatas");
define("LAN_MAILOUT_155", "Parinkikliai");
define("LAN_MAILOUT_156", "Maksimalus el. laiškų skaičius siųsti per planuotojo ciklą");
define("LAN_MAILOUT_157", "Reikšmė priklausys nuo kelių veiksnių, įskaitant kaip dažnai paleidžiamas jūsų pašto eilės planuotojo darbas ir greitis, kuriuo jūsų ISP priims išeinančius laiškus. Nulis išvalyti eilę kiekvieną kartą");
define("LAN_MAILOUT_158", "Siųsti dabar");
define("LAN_MAILOUT_159", "Sulaikyti el. laišką");
define("LAN_MAILOUT_160", "Atšaukti siuntimą");
define("LAN_MAILOUT_161", "SVARBU! Atrodo, kad šis failas neegzistuoja");
define("LAN_MAILOUT_162", "SVARBU! Turite padaryti šį failą vykdomu");
define("LAN_MAILOUT_163", "Redaguoti/Siųsti laišką");
define("LAN_MAILOUT_164", "El. laiško informacija nerasta");
define("LAN_MAILOUT_165", "Patvirtinkite išsaugoto el. laiško ištrynimą, įskaitant visus gavėjų įrašus");
define("LAN_MAILOUT_166", "Bendroji klaida trinant laiško nuorodą: [x]");
define("LAN_MAILOUT_167", "Klaida trinant laiško turinį, nuoroda: [x]");
define("LAN_MAILOUT_168", "Laiško turinys ištrintas, nuoroda: [x]");
define("LAN_MAILOUT_169", "Klaida trinant laiško gavėjus, nuoroda: [x]");
define("LAN_MAILOUT_170", "Ištrinta [y] gavėjų laiškui, nuoroda: [x]");
define("LAN_MAILOUT_171", "Patvirtinti el. laiško ištrynimą");
define("LAN_MAILOUT_172", "Laiško tipas/būsena");
define("LAN_MAILOUT_173", "Gavėjai");
define("LAN_MAILOUT_174", "Saugumo patikrinimo klaida: [x] [z]");
define("LAN_MAILOUT_175", "Prieš");
define("LAN_MAILOUT_176", "Lygus");
define("LAN_MAILOUT_177", "Po");
define("LAN_MAILOUT_178", "Paskutinis svetainės apsilankymas");
define("LAN_MAILOUT_179", "Patvirtinti el. laiško siuntimą");
define("LAN_MAILOUT_180", "Atrankos kriterijai:");
define("LAN_MAILOUT_181", "Rodyti gavėjus");
define("LAN_MAILOUT_182", "Sutvarkyti duomenų bazės lenteles");
define("LAN_MAILOUT_183", "Klaida tvarkant duomenų bazę");
define("LAN_MAILOUT_184", "Duomenų bazė sutvarkyta");
define("LAN_MAILOUT_185", "El. laiškai pridėti į siuntimo eilę");
define("LAN_MAILOUT_186", "Bendroji klaida sulaikant laiško nuorodą: [x]");
define("LAN_MAILOUT_187", "El. laiškas [x] sulaikytas");
define("LAN_MAILOUT_188", "Bendroji klaida siunčiant laiško nuorodą: [x]");
define("LAN_MAILOUT_189", "Bandomasis adresas");

// Admin menu text
define("LAN_MAILOUT_190", "Sukurti/Siųsti laišką");
define("LAN_MAILOUT_191", "Išsaugoti el. laiškai");
define("LAN_MAILOUT_192", "Užbaigti masiniai siuntimai");
define("LAN_MAILOUT_193", "Laukiantys masiniai siuntimai");
define("LAN_MAILOUT_194", "Sulaikyti masiniai siuntimai");
// define("LAN_MAILOUT_195", "");
// define("LAN_MAILOUT_196", "");

// Block of error messages kept together
define("LAN_MAILOUT_200", "Nenurodyta tema");
define("LAN_MAILOUT_201", "Nėra prasmingų duomenų el. laiškui");
define("LAN_MAILOUT_202", "Nėra teksto el. laiško turinyje");
define("LAN_MAILOUT_203", "Nenurodytas siuntėjo vardas");
define("LAN_MAILOUT_204", "Nenurodytas siuntėjo el. pašto adresas");
define("LAN_MAILOUT_205", "El. laiško siuntimo formato klaida");
define("LAN_MAILOUT_206", "Netinkamas laiško ID ([x]) nurodytas");
define("LAN_MAILOUT_207", "Šablono įkėlimo klaida");
define("LAN_MAILOUT_208", "Šablono konvertavimo klaida");


// Block of status messages kept together
define("LAN_MAILOUT_211", "Išsiųsta");
define("LAN_MAILOUT_212", "Nepavyko");
define("LAN_MAILOUT_213", "Grąžinta");
define("LAN_MAILOUT_214", "Siųsti");
define("LAN_MAILOUT_215", "Išsaugota");
define("LAN_MAILOUT_216", "Kodo klaida");
define("LAN_MAILOUT_217", "Sulaikyta");
define("LAN_MAILOUT_218", "Atšaukta");
define("LAN_MAILOUT_219", "Dalinis");

// General messages continued
define("LAN_MAILOUT_220", "El. laiško ID [x] atšauktas");
define("LAN_MAILOUT_221", "Klaida atšaukiant el. laišką su ID [x]");
define("LAN_MAILOUT_222", "Numatytasis el. laiško formatas");
define("LAN_MAILOUT_223", "(Naudojamas kai kuriems sistemos sugeneruotiems el. laiškams)");
define("LAN_MAILOUT_224", "Įtr. paveikslėlius");
define("LAN_MAILOUT_225", "Įtraukti paveikslėlius į el. laišką");
define("LAN_MAILOUT_226", "[x] našlaitiniai gavėjų įrašai pašalinti");
define("LAN_MAILOUT_227", "Ištrinta [x] įrašų iš [y]");
define("LAN_MAILOUT_228", "[x] neatitikimų mail_content ištaisyta; įrašai: [y]");
define("LAN_MAILOUT_229", "El. laiško ID [x] sulaikytas");
define("LAN_MAILOUT_230", "Klaida sulaikant el. laišką su ID [x]");
define("LAN_MAILOUT_231", "Grąžinti el. laiškai - apdorojimo metodas");
define("LAN_MAILOUT_232", "Nėra");
define("LAN_MAILOUT_233", "Automatinio apdorojimo skriptas");
define("LAN_MAILOUT_234", "Pašto paskyra");
define("LAN_MAILOUT_235", "(Jūsų serveris turi persiųsti arba 'pipe' iš aukščiau nurodyto el. pašto adreso į aukščiau nurodytą skripto kelią.)");
define("LAN_MAILOUT_236", "Paskutinis grąžinimas apdorotas");
define("LAN_MAILOUT_237", "Suvestinių skaitikliai atnaujinti [x] el. laiškuose");
define("LAN_MAILOUT_238", "Anksčiausias laikas siųsti");
define("LAN_MAILOUT_239", "Vėliausias laikas siųsti");
define("LAN_MAILOUT_240", "Pranešti man, kai vykdymas baigtas");
define("LAN_MAILOUT_241", " (Tai papildomai prie standartinių e107 pranešimų parinkčių)");
define("LAN_MAILOUT_242", "Papildomos parinktys (tik kai siunčiama)");
define("LAN_MAILOUT_243", "Pranešti");
define("LAN_MAILOUT_244", "El. laiškas išsiųstas: ");
define("LAN_MAILOUT_245", "Automatiškai tikrinti grąžinimus");
define("LAN_MAILOUT_246", "Jei pažymėta, turėsite aktyvuoti užduotį planuotojuje");
define("LAN_MAILOUT_247", "El. laiško informacija:");
define("LAN_MAILOUT_248", "Užbaigimo būsena: ");
define("LAN_MAILOUT_249", "Siuntimo rezultatai:");
define("LAN_MAILOUT_250", "--- Pranešimo pabaiga ---");
define("LAN_MAILOUT_251", "Kopijuoti ir redaguoti");
define("LAN_MAILOUT_252", "Atlieka įvairius duomenų nuoseklumo patikrinimus, taiso skaičius, trina laikinus duomenis");
define("LAN_MAILOUT_253", "Gavėjų nerasta - patikrinkite duomenų bazės gedimą");
define("LAN_MAILOUT_254", "Peržiūrėti šabloninį el. laišką");
define("LAN_MAILOUT_255", "Šabloninis el. laiškas, ID: ");
define("LAN_MAILOUT_256", "Grįžti");
define("LAN_MAILOUT_257", "Sugeneruotas šablonas");
//define("LAN_MAILOUT_258", "Template: ");//LAN_TEMPLATE
define("LAN_MAILOUT_259", "Nuostatose nepasirinkti 'el. pašto adresų šaltiniai'"); 

define("LAN_SEND", "Siųsti");
define("LAN_HOLD", "Sulaikyti");

define("LAN_MAILOUT_260", "Vartotojo tipas");
define("LAN_MAILOUT_261", "SMTP prievadas");
define("LAN_MAILOUT_262", "Šablono peržiūra");
define("LAN_MAILOUT_263", "Iš viso gavėjų");
define("LAN_MAILOUT_264", "Įterpti mediją");
define("LAN_MAILOUT_265", "Laukiantis");
define("LAN_MAILOUT_266", "Maks. aktyvūs");
define("LAN_MAILOUT_267", "Generuoti viešuosius/privačius raktus");
define("LAN_MAILOUT_268", "Tik kūrėjo režimas");
define("LAN_MAILOUT_269", "Siųsti vėliau");

define("LAN_MAILOUT_270", "Tikrinti SMTP ryšį");
define("LAN_MAILOUT_271", "Autentifikacija nepavyko su vartotojo vardu ([x]) ir slaptažodžiu ([y]):");




