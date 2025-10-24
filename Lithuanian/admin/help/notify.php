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
 * $Source: /cvs_backup/e107_0.8/e107_languages/Lithuanian/admin/help/notify.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Pranešimai siunčia el. pašto pranešimus, kai įvyksta e107 įvykiai.<br /><br />
Pavyzdžiui, nustatykite 'IP užblokuotas dėl svetainės perkrovimo' vartotojų klasei 'Administratorius' ir visi administratoriai gaus el. laišką, kai jūsų 
svetainė bus perkrauta.<br /><br />
Taip pat, kaip kitą pavyzdį, galite nustatyti 'Naujienų elementą paskelbė administratorius' vartotojų klasei 'Nariai' ir visi jūsų vartotojai gaus 
naujienas, kurias skeliate svetainėje, el. paštu.<br /><br />
Jei norite, kad el. pašto pranešimai būtų siunčiami alternatyviu el. pašto adresu - pasirinkite 'El. paštas' parinktį ir 
įveskite el. pašto adresą numatytame lauke.";

$ns -> tablerender("Pranešimų pagalba", $text);
