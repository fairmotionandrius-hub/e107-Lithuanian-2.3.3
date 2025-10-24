<?php
/*
 * Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * Search Admin Help
 * 
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Paieškos pagalba";
$text = "
        Jei jūsų MySQL serverio versija tai palaiko, galite pereiti 
        prie MySQL rūšiavimo metodo, kuris yra greitesnis nei PHP rūšiavimo metodas. Žr. nuostatas.
<br /><br />
        Jei jūsų svetainėje naudojamos ideografinės kalbos, tokios kaip kinų ir japonų, turite 
        naudoti PHP rūšiavimo metodą ir išjungti viso žodžio atitikimo funkciją.

";
$ns->tablerender($caption, $text);
