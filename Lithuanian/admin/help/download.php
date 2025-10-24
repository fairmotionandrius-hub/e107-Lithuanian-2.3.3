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
 * $Source: /cvs_backup/e107_0.8/e107_languages/Lithuanian/admin/help/download.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Prašome įkelti savo failus į ".e_FILE."downloads aplanką, paveikslėlius į ".e_FILE."downloadimages aplanką ir miniatiūrų paveikslėlius į ".e_FILE."downloadthumbs aplanką.
<br /><br />
Norėdami pateikti atsisiuntimą, pirma sukurkite tėvinį elementą, tada sukurkite kategoriją po tuo tėviniu, tuomet galėsite padaryti atsisiuntimą prieinamą.";
$ns -> tablerender("Atsisiuntimų pagalba", $text);
