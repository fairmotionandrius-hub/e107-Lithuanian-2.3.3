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
 * $Source: /cvs_backup/e107_0.8/e107_languages/Lithuanian/admin/help/admin_log.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Sistemos žurnalų pagalba";
if (e_QUERY) list($action,$junk) = explode('.', e_QUERY); else $action = 'list';

function common_filters()
{
  $ret = "<b>Duomenų filtrai</b><br />
  Galite nurodyti įvairius filtrus, kurie apriboja peržiūrimos informacijos kiekį. Jie išsaugomi slapuke, kol atsijungsite.<br />
  Pradžios ir pabaigos datos/laiko filtrus reikia įjungti per atitinkamus pažymėjimo laukus.<br />
  Kiti filtrai aktyviai, kai laukelyje yra vertė.<br />
  ";
  return $ret;
}


switch ($action)
{
case 'auditlog' :
  $text = "Šis puslapis rodo vartotojų veiklą, kurią pasirinkote žurnalizuoti.<br /><br />";
  $text .= common_filters();
  break;
case 'config' :
  $text = "Šis puslapis konfigurėra įvairias sistemos žurnalų parinktis.<br /><br />
  <b>Bendrieji nustatymai</b><br />
  Nustato eilučių skaičių žurnalo rodinyje.<br /><br />
  <b>Administratoriaus žurnalas</b><br />
  Šis žurnalas išsaugo įvykius, kol jie specialiai ištrinami; naudokite šią parinktį senų įvykių šalinimui.<br /><br />
  <b>Vartotojų audito žurnalas</b><br />
  Šis žurnalas seka vartotojų veiklą. Registruotiems vartotojams sekama tik nurodyta klasė - galite nustatyti 'Nariai', kad sektumėte 
  visus, arba sukurti specifinę vartotojų klasę žurnalizavimui. Tada nustatote veiklų tipus, kuriuos norite žurnalizuoti.<br />
  Registracijos įvykiai gali būti sekama atskirai.<br /><br />
  <b>Besisukantis žurnalas</b><br />
  Šis žurnalas naudojamas nenormalių įvykių sekimui, derinimo pagalbai ir t.t. Jį galima išjungti. Įvykiai automatiškai pašalinami po nustatyto dienų skaičiaus.
  ";
  break;
case 'rolllog' :
  $text = "Besisukantis žurnalas rodo įvairius nenormalius įvykius, kurie kitaip nėra įrašomi. Jis taip pat gali būti naudojamas kodo derinimui ir stebėjimui.<br /><br />";
  $text .= common_filters();
  break;
case 'downlog' :
  $text = "Šis puslapis rodo vartotojų atsisiuntimus.<br /><br />";
  $text .= common_filters();
  break;
case 'comments' :
  $text = "Šis puslapis rodo vartotojų komentarus su parinktimis pasirinkti pagal vartotojo ID, tipą ir datą. Nepageidaujami komentarai gali būti ištrinti.";
  break;
case 'detailed' :
  $text = "Pagrindiniai sistemos žurnalai įrašo laiką su dideliu tikslumu (jei pagrindinis serveris tai palaiko), ir šis puslapis leidžia peržiūrėti įrašus,
        įvykusius santykinai mažame laiko lange. Įrašai iš administratoriaus žurnalo, audito žurnalo ir besisukančio žurnalo sujungiami, kad galėtumėte matyti tikslius 
        ryšius tarp įvykių.";
  break;
case 'adminlog' :
default :
  $text = "Šis puslapis rodo administratorių veiklą.<br /><br />
  (Šiuo metu žurnalizavimas dar pridedamas į kodą, todėl sąrašas nėra pilnas.)<br /><br />";
  $text .= common_filters();
}
$ns -> tablerender($caption, $text);
