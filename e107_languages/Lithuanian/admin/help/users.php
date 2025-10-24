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
 * $Source: /cvs_backup/e107_0.8/e107_languages/Lithuanian/admin/help/users.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Vartotojų valdymas";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'create' :
    $text = "Šis puslapis leidžia jums sukurti vartotoją, kuris iš karto tampa normaliu svetainės nariu su bet kokiomis klasių narystėmis, kurias priskirkite.<br /><br />
        Jei pažymėsite 'Siųsti patvirtinimo el. laišką su slaptažodžiu naujam vartotojui' laukelį, prisijungimo vardas ir slaptažodis siunčiami <b>atvirame tekste</b>, todėl vartotojas gavęs turi pakeisti
        savo slaptažodį.
        ";
    break;

  case 'prune' :
        $text = "Masiškai ištrina nepageidautinus vartotojus iš duomenų bazės. Tai gali būti arba tie, kurie nepavyko užbaigti registracijos proceso, arba 
        tie, kurių el. pašto adresai grįžo. Bet kokie forumo pranešimai, komentarai ir kt. lieka ir pažymimi kaip 'Ištrintų vartotojų'.
        ";
        break;

  case 'unverified' :
        $text = "Rodo tuos narius, kurie nepavyko užbaigti registracijos. Parinktys paprastai tokios pačios kaip ir pilnam narių sąrašui.";
    break;

  case 'options' :
        $text = "Nustato įvairias parinktis, paveikiančias visus vartotojus.<br /><br />
        <b>Leisti Avatar įkėlimą</b><br />
        Jei įjungta, vartotojai gali įkelti savo pasirinktą avatarą, kuris saugomas jūsų serveryje. Tai gali turėti saugumo pasekmių.<br /><br />
        <b>Leisti nuotraukos įkėlimą</b><br />
        Jei įjungta, vartotojai gali įkelti savo pasirinktą nuotrauką, kuri saugoma jūsų serveryje. Tai gali turėti saugumo pasekmių.<br /><br />
        <b>Prisijungusių vartotojų sekimas</b><br />
        Tai turi būti įjungta, kad būtų galima sekti daugumą vartotojų veiklų, įskaitant prisijungusių narių skaičių. Tai gerokai padidina duomenų bazės aktyvumą.<br /><br />
        <b>Narių informacija</b><br />
        Nustato, kuri narių klasė gali peržiūrėti narių sąrašą.
        ";
    break;

  default :
        $text = "Šis puslapis rodo jūsų registruotų narių sąrašą. Galite atnaujinti jų nustatymus, suteikti administratoriaus statusą ir nustatyti jų vartotojų klasę 
        tarp kitų dalykų.<br /><br />

        Rūšiavimo tvarką galima pakeisti spustelėjus stulpelio antraštę.<br /><br />

        <b>Vartotojų klasės</b><br />
        Vartotojų klases galima nustatyti dviem būdais: arba 'tiesiogiai' spustelėjus 'vartotojų klasės' stulpelyje, arba pasirinkus vieną/kelis vartotoją(-us) ir naudojant 'paketo' parinktis lentelės apačioje. <br /><br />

        <b>Redaguoti</b><br />
        Peržiūrėti ir redaguoti visus šio vartotojo nustatymus. <br /><br />

        <b>Užblokuoti/Atblokuoti</b><br />
        Nustatyti, ar vartotojas gali pasiekti svetainę. <br /><br />

        <b>Aktyvuoti</b><br />
        Tai aktyvuoja vartotoją, kuris paprastai būtų atsakęs į aktyvacijos el. laišką.<br /><br />

        <b>Pakartotinai siųsti el. laišką</b><br />
        Pakartotinai išsiunčia aktyvacijos el. laišką vartotojui.<br /><br />

        <b>Tikrinti el. paštą</b><br />
        Patikrina vartotojo el. pašto adreso galiojimą (neišsiunčia el. laiško)<br /><br />

        <b>Ištrinti</b><br />
        Visiškai pašalina vartotoją iš svetainės narystės (bet kokie forumo pranešimai, komentarai ir kt. lieka ir pažymimi kaip 'Ištrinto vartotojo')
        ";
}


$ns -> tablerender($caption, $text);
unset($text);