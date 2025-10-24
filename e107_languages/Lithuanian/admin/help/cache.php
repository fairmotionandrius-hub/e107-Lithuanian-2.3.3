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
 * $Source: /cvs_backup/e107_0.8/e107_languages/Lithuanian/admin/help/cache.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Podėjimas";
$text = "Jei turite įjungtą podėjimą, tai žymiai pagerins jūsų svetainės greitį ir sumažins SQL duomenų bazės užklausų skaičių.<br /><br /><b>SVARBU! Jei kuriate savo temą, išjunkite podėjimą, kitaip bet kokie jūsų atlikti pakeitimai nebus atspindėti iš karto.</b>";
$ns -> tablerender($caption, $text);
