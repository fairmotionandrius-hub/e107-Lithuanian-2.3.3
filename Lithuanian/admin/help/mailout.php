<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }

$e107 = e107::getInstance();

$action = e107::getParser()->toDB(varset($_GET['mode'],'makemail'));

  switch ($action)
  {
        case 'justone' :
          $text = 'Siųsti paštą su papildinio nurodytais apribojimais';
          break;
        case 'debug' :
          $text = 'Tik kūrėjams. Šiuo metu nenaudojama';
          break;
        case 'saved' :
          $text = 'Pasirinkite ir naudokite išsaugotą el. pašto šabloną masinio siuntimo el. laiškui. Ištrinkite nebereikalingus šablonus';
          break;
        case 'pending' :
                $text = 'Siuntimui paleistų masinių el. laiškų sąrašas su dabartiniu statusu. Pašto planuotojo užduotis apdoros šiuos el. laiškus pagal galimybes, atsižvelgiant į
                jūsų nustatytus ankščiausiąją ir vėliausiąją siuntimo datas';
                break;
        case 'held' :
                $text = 'El. laiškų, kurie buvo paruošti siuntimui, bet dar nepaleisti, sąrašas';
                break;
        case 'sent' :
          $text = 'Užbaigtų masinių siuntimų sąrašas. Leidžia pamatyti siuntimo rezultatus.<br />';
          break;
        case 'savedmail' :
        case 'makemail' :
        case 'main' :
          $text = 'Sukurkite el. laišką, suteikite jam prasmingą pavadinimą ir pasirinkite gavėjų sąrašą. Galite viską išsaugoti kaip šabloną vėlesniam naudojimui arba siųsti iš karto.<br />';
          $text .= 'El. pašto adresus gali prisidėti įskiepiai (pvz., naujienlaišk is), ir dublikatai pašalinami, kai laiškas siunčiamas<br />';
          $text .= 'Bet koks priedas pasirenkamas iš galiojančių atsisiuntimų sąrašo.<br />';
          $text .= 'Laiškas gali būti siunčiamas kaip paprastas tekstas (universaliausias ir mažiausiai rizikuojantis būti klasifikuojamas kaip šlamštas), arba kaip HTML (tokiu atveju automatiškai sugeneruojama paprasto teksto alternatyva). Temos stilius
                                gali būti papildomai pridėtas prie el. laiško. Alternatyviai gali būti pasirinktas iš anksto apibrėžtas šablonas.';
          break;
        case 'recipients' :
                $text = 'Rodo visus gavėjus arba potencialius el. laiško gavėjus kartu su dabartiniu statusu';
                break;
        case 'prefs' :
          $text = '<b>Konfigūruoti masinio siuntimo parinktis.</b><br />
          Testuojamas el. laiškas siunčiamas naudojant dabartinį metodą ir nustatymus. Jei kyla problemų dėl grįžtančių el. laiškų, pabandykite siųsti testinį el. laišką į: <i>check-auth@verifier.port25.com</i>, kad įsitikintumėte, jog jūsų serverio MX įrašai yra teisingi. Žinoma, prieš tai įsitikinkite, kad jūsų svetainės el. pašto adresas yra teisingas.<br /><br />';
          $text .= '<b>El. pašto siuntimo metodas</b><br />
          Jei įmanoma, naudokite SMTP el. paštui siųsti. Nustatymai priklausys nuo jūsų serverio pašto serverio.<br /><br />';
          $text .= '<b>Numatytasis el. pašto formatas</b><br />
          El. laiškai gali būti siunčiami arba tik paprastu tekstu, arba HTML formatu. Pastarasis paprastai suteikia geresnį išvaizdą, bet yra labiau linkęs būti filtruojamas įvairių
          saugumo priemonių. Jei pasirinksite HTML, pridedama atskira paprasto teksto dalis.<br /><br />';
          $text .= '<b>Masinio siuntimo valdymas</b><br />
          Čia nustatytos vertės priklausys nuo jūsų serverio ir siunčiamų el. laiškų skaičiaus; gali būti įmanoma nustatyti visas vertes į nulį, kad
          pašto eilė būtų iškart ištuštinta. Paprastai geriausia siųsti mažiau nei 500 el. laiškų per valandą.<br /><br />';
          $text .= '<b>Grįžę el. laiškai</b><br />
          Galite nurodyti el. pašto adresą grąžinimo atsakymui gauti, kai el. laiškas nepristatomas. Jei turite valdymą virš savo serverio, galite nurodyti
          atskirą planuotojo valdomą auto-apdorojimo skriptą; jis gauna grįžimo pranešimus, kai jie atvyksta, ir iš karto atnaujina statusą. Priešingu atveju galite nurodyti atskirą el. pašto paskyrą,
          kurią galima tikrinti arba periodiškai (naudojant planuotoją), arba rankiniu būdu per vartotojų parinkčių meniu. Paprastai tai bus standartinė
          POP3 paskyra; naudokite TLS susijusias parinktis tik jei specifiškai reikalaujama jūsų serverio<br /><br />';
          $text .= '<b>El. pašto adresų šaltiniai</b><br />
          Jei turite papildomų su paštu susijusių įskiepių, galite pasirinkti, kurie iš jų gali prisidėti el. pašto adresais prie sąrašo.<br /><br />';
          $text .= '<b>Žurnalizavimas</b><br />
          Žurnalizavimo parinktis sukuria teksto failą sistemos žurnalų direktorijoje. Jį reikia periodiškai ištrinti. \'Tik žurnalizavimo\'
          parinktys leidžia jums pamatyti tiksliai kas gautų el. laiškus, jei jie būtų iš tikrųjų išsiųsti. \'Su klaidomis\' parinktis nesėkmingai siunčia kas
          7-tą el. laišką, daugiausia testavimui';
          break;
         case 'maint' :
                $text = 'Priežiūros funkcijos pašto duomenų bazei';
                break;
        default :
          $text = 'Nedokumentuota parinktis';
  }

$ns->tablerender('Mail Help', $text);
