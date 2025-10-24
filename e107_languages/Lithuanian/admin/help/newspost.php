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
 * $Source: /cvs_backup/e107_0.8/e107_languages/Lithuanian/admin/help/newspost.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Naujienų skelbimo pagalba";
$action = varset($_GET['action']);
switch ($action)
{
  case 'create' :
        $text = "<b>Bendras</b><br />
Turinys bus rodomas pagrindiniame puslapyje; išplėstas turinys bus skaitomas spustelėjus 'Skaityti daugiau' nuorodą.
<br />
<br />
<b>Rodyti tik pavadinimą</b>
<br />
Įjunkite tai, kad pirmajame puslapyje būtų rodomas tik naujienų pavadinimas su spustelėjama nuoroda į pilną straipsnį.
<br /><br />
<b>Aktyvavimas</b>
<br />
Jei nustatote pradžios ir/arba pabaigos datą, jūsų naujienų elementas bus rodomas tik tarp šių datų.
";
        break;
  case 'cat' :
        $text = "Galite atskirti savo naujienų elementus į skirtingas kategorijas ir leisti lankytojams rodyti tik tų kategorijų naujienų elementus. <br /><br />Įkelkite naujienų piktogramų paveikslėlius į ".e_THEME."-yourtheme-/images/ arba themes/shared/newsicons/.";
    break;
  case 'pref' :
    $text = 'Nustatykite įvairias su naujienomis susijusias parinktis<br /><br />
        <b>Naujienų kategorijų stulpeliai</b><br />
        Reikalauja temos palaikymo, kad būtų pasirenkama<br /><br />
        <b>Naujienų įrašų rodymas vienam puslapiui</b><br />
        Pagrindiniam naujienų puslapiui; rodo elementus neišplėstame formate.<br /><br />
        <b>Naujienų įrašų rodymas archyve</b><br />
        Nustato naujienų įrašų skaičių, kurie rodomi tik kaip pavadinimas kiekviename naujienų puslapyje (įskaičiuotas į ankstesnę sumą).<br /><br />
        <b>Įjungti WYSIWYG redaktorių</b><br />
        Reikalauja, kad vartotojai, galintys pateikti naujienas, taip pat galėtų publikuoti HTML.
        ';
        break;
  case 'list' :
  default :
        $text = 'Visų naujienų elementų sąrašas. Norėdami redaguoti ar ištrinti, spustelėkite vieną iš piktogramų stulpelyje \'parinktys\'. Norėdami peržiūrėti elementą, spustelėkite
                ant ID.';
}
$ns -> tablerender($caption, $text);
