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
 * $Source: /cvs_backup/e107_0.8/e107_languages/Lithuanian/admin/help/userclass2.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Vartotojų klasių pagalba";

if (!($action = vartrue($_GET['action'])))
{
        if (e_QUERY)
        {
          $qs = explode(".", e_QUERY);
        }
        $action = varset($qs[0],'display');
}
switch ($action)
{
  case 'initial' :
        $text = "Nustatykite klases, į kurias iš pradžių yra priskiriamas naujas svetainės narys. 
        Jei įjungtas patvirtinimas, šis priskyrimas gali įvykti arba kai vartotojas registruojasi, arba kai vartotojas patvirtinamas.<br /><br />
          Ir nepamirškite, kad jei naudojate hierarchines vartotojų klases, vartotojas automatiškai yra visų klasių, esančių 'aukščiau' kiekvienos pasirinktos klasės medyje, narys";
        break;
  case 'options' :
        $text = "Nustatymų parinktys leidžia sukurti ir pašalinti numatytąją klasių hierarchiją. Efektą galite pamatyti žiūrėdami į vartotojų medį.<br />
        Tai nesunaikins kitų jūsų klasių informacijos, ir vėliau galėsite pakeisti arba pašalinti hierarchiją.<br /><br />
        Klasių hierarchiją turėtumėte atstatyti tik tuo atveju, jei įvyksta duomenų bazės gedimas";
        break;
  case 'membs' :
    $text = "Dabar vartotojų administravimo puslapyje";
        break;
  case 'debug' :
        $text = "Tik pažengusiems vartotojams - rodo klasių hierarchiją, plius priskirtas klases ir klases, prie kurių pirmieji 20 svetainės narių turi prieigą.<br />
        Skaičius priešais klasės pavadinimą yra jos unikalus ID (nuorodos numeris). 'Visi' klasė turi ID 0 (nulį). e107 naudoja šiuos ID visur, nurodydama klases.<br />
        Po klasės pavadinimo yra klasės matomumas ir redaguojamumas - [vis:253, edit: 27] pavyzdžiui. Tai reiškia, kad klasė bus matoma daugelyje selektorių tik jei dabartinis vartotojas yra klasės 253 narys, 
        ir vartotojas gali redaguoti savo klasės narystę tik jei yra klasės 27 narys.<br />
        Galiausiai, po '=', yra visų klasių sąrašas arba virš arba po kiekvienos klasės medyje, plius tos klasės ID. Taigi vartotojas, kuris yra konkretaus klasės narys
         bus visų klasių šiame sąraše narys.<br /><br />
        Siekiant padėti suprasti, rodomos pirmųjų 20 narių klasių narystės. Pirmas įrašas kiekvienoje eilutėje rodo klases, kurių narys yra vartotojas. 
         Antras įrašas išvardija visas klases, kurių narys yra vartotojas, kai įsigalioja paveldėjimas. Trečias įrašas rodo, kurių klasių narystes jie gali redaguoti";
        break;
  case 'test' :
  case 'special' :
    $text = "Nenaudokite šio!!! Tik kūrėjams!!!";
        break;
  case 'edit' :
  case 'config' :
        $text = "Galite kurti klases arba redaguoti esamas klases iš šio puslapio.<br />
         Tai naudinga ribojant vartotojų prieigą prie tam tikrų svetainės dalių. Pavyzdžiui, galite sukurti klasę vadinamą TEST, 
                 tada sukurti forumą, kurį galėtų pasiekti tik TEST klasės vartotojai.<br /><br />
                 Klasės pavadinimas rodomas išskleidžiamuose sąrašuose ir pan.; kai kuriose vietose taip pat rodomas išsamesnis aprašymas.<br /><br />
                 Klasės ikona gali būti rodoma įvairiose svetainės vietose, jei tokia nustatyta.<br /><br />
                 Norėdami leisti vartotojams nuspręsti, ar jie gali būti klasės nariais, leiskite jiems ją valdyti. Jei čia nustatysite 'niekas', tik administratoriai
                 gali valdyti klasės narystę<br /><br />
                 'Matomumo' laukas leidžia paslėpti klasę nuo dauguma narių - galioja kai kuriuose išskleidžiamuose sąrašuose ir žymėjimo laukuose.<br /><br />
                 'Klasės tėvas' leidžia nustatyti klasių hierarchiją. Jei hierarchijos 'viršus' yra 'Visi/Viešos' arba 'Narių' klasės, 
                 klasės, esančios žemiau hierarchijoje, taip pat turi savo tėvinės klasės teises ir tos klasės tėvo teises, ir taip toliau. Jei hierarchijos 'viršus' yra
                 'Niekas' klasė, tada teisės kaupiamos priešinga kryptimi - klasė surenka visas teises klasės, esančios <b>žemiau</b> jų 
                 medyje. Gautas medis rodomas puslapio apatinėje dalyje; galite išplėsti ir susiaurinti šakas spustelėdami '+' ir '-' langelius.";
        break;
  case 'display' :
  default :
        $text = "Iš šio puslapio galite pasirinkti klases redagavimui ir taip pat ištrinti esamas klases.";
}
e107::getRender() -> tablerender($caption, $text);
