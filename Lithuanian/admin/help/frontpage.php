<?php
/*
 * Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * Frontpage Admin Help
 * 
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Pagrindinio puslapio pagalba";
/* FIXME - Lietuvių kalba: kas turėtų likti ir kas turėtų būti pašalinta? 
        <p>
                Taisyklių sąrašas peržiūrimas eilės tvarka, kol randamas dabartinio vartotojo klasės atitikmuo. 
                Tai nustato vartotojo pagrindinį (namai) puslapį ir puslapį, kurį jis pamato iš karto po prisijungimo.
        </p>
 */
$text = "
<p>
        Šiame ekrane galite pasirinkti, ką rodyti kaip savo svetainės pagrindinį puslapį, numatytasis yra naujienos. Taip pat galite nustatyti, ar
        vartotojai po prisijungimo yra nukreipiami į konkretų puslapį.
</p>
<p>
        Taisyklės ieškojamos eilės tvarka, siekiant rasti pirmą, kur dabartinis vartotojas priklauso taisyklėje nurodytai klasei. 
        Ta taisyklė tada nustato pagrindinį (namų) puslapį ir bet kurį specifinį po-prisijungimo puslapį. Jei nė viena taisyklė nesutampa, news.php nustatomas kaip namų puslapis.
</p>
<p>
        Vartotojas nukreipiamas į nurodytą &quot;Po-prisijungimo puslapį&quot; (jei nurodytas) iš karto po prisijungimo.
</p>
";
$ns->tablerender($caption, $text, 'admin_help');
