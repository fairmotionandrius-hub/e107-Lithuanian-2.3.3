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
 * $Source: /cvs_backup/e107_0.8/e107_languages/Lithuanian/admin/help/administrator.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Svetainės administratorių pagalba";
$text = "Naudokite šį puslapį svetainės administratorių nustatymams redaguoti arba administratoriams pašalinti. Administratorius turės leidimus tik pažymėtoms funkcijoms.<br /><br />
Norėdami sukurti naują administratorių, eikite į vartotojų konfigūracijos puslapį ir atnaujinkite egzistuojantį vartotoją suteikdami jam administratoriaus statusą.";
$ns -> tablerender($caption, $text);
