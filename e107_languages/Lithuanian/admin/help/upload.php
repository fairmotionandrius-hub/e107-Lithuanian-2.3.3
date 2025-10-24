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
 * $Source: /cvs_backup/e107_0.8/e107_languages/Lithuanian/admin/help/upload.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'filetypes' :
    $text = "Failų tipai ir maksimalus failo dydis, kurį galima įkelti, nustatomi pagal vartotojų klasę. Ši parinktis sugeneruoja failą vadinamą ".e_UPLOAD_TEMP_DIR.e_SAVE_FILETYPES.",
                kuris turi būti nukopijuotas arba perkeltas į direktoriją ".e_ADMIN_ABS." ir pervardytas į ".e_READ_FILETYPES." prieš pradedant veikti.<br />
                Leidžiamas vienas apibrėžimas vienai klasei.<br />
                Atkreipkite dėmesį, kad šie apibrėžimai galioja visoje svetainėje, net jei viešųjų įkėlimų funkcija išjungta.";
    break;
  case 'options' :
    $text = "Čia gali būti išjungta visa viešųjų įkėlimų sistema.<br />
                Plokščiųjų failų saugojimas yra paprastai tinkamas (priešingu atveju maksimalus failo dydis yra griežtai apribotas iki 500kb).<br />
                Maksimalus failo dydis pakeičia bet kokius apibrėžimus, nustatytus filetypes.xml.<br />
                Viešieji įkėlimai gali būti apriboti konkrečiai vartotojų klasei, bet šie nustatymai taip pat galioja kitoms svetainės sritims, kuriose gali būti leisti įkėlimai, pvz.,
                naujienos ir formos.";
        break;
  case 'view' :
  default :
        $text = "Šis puslapis išvardina visus pateiktus įkėlimus. Galite pasirinkti juos ištrinti, perkelti į atsisiuntimus arba publikuoti juos naujienose";
}
$ns -> tablerender("Viešųjų įkėlimų pagalba", $text);
