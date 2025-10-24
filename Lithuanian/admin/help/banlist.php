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
 * $Source: /cvs_backup/e107_0.8/e107_languages/Lithuanian/admin/help/banlist.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Vartotojų blokavimas jūsų svetainėje";
if (e_QUERY) list($action,$junk) = explode('-',e_QUERY.'-'); else $action = 'list';             // Non-standard separator in query

switch ($action)
{
case 'transfer' :
  $text = 'Šis puslapis leidžia perkelti blokuotųjų sąrašo duomenis į šią svetainę ir iš jos kaip CSV (kableliais atskirtas kintamųjų) failus.<br /><br />';
  $text .= "<b>Duomenų eksportas</b><br />
  Pasirinkite blokavimų tipus eksportavimui. Laukai bus atskiriami pasirinktu skirtuku ir papildomai įtraukti į pasirinktus kabutės ženklus.<br /><br />";
  $text .= "<b>Duomenų importas</b><br />
  Galite pasirinkti, ar importuoti blokavimai pakeitų egzistuojančius importuotus blokavimus, ar prideda prie sąrašo. Jei importuojami duomenys apima galiojimo datą/laiką,
  galite pasirinkti, ar tai naudojama, ar naudojama šios svetainės vertė.<br /><br />";
  $text .= "<b>CSV formatas</b><br />
  Kiekvienos failo eilutės formatas yra: IP/el.paštas, data, galiojimas, tipas, priežastis, pastabos.<br />
  Data ir galiojimas yra YYYYMMDD_HHMMDD formatu, išskyrus nulinę vertę, kuri reiškia 'nežinoma' arba 'neribota'<br />
  Būtinas tik IP arba el. pašto adresas; kiti laukai importuojami, jei egzistuoja.<br /><br />
  <b>Pastaba:</b> Jums reikės modifikuoti filetypes.xml, kad leistumėte administratoriams įkelti 'CSV' failo tipą.";
  break;
case 'times' :
  $text = 'Šis puslapis nustato numatytąjį elgesį įvairių tipų blokavimams.<br />
  Jei nurodytas pranešimas, jis bus rodomas vartotojui (kai tinkama). Jei pranešimas prasideda \'http://\' arba \'https://\' valdymas 
  perduodamas nurodytam URL. Priešingu atveju vartotojas greičiausiai gaus tuščią ekraną.<br />
  Blokavimas galioja nurodytą laiką; po to jis bus išvalytas kitą kartą jiems bandant pasiekti svetainę.';
  break;
case 'options' :
  $text = '<b>Atvirkštinis DNS</b><br />
    Jei įjungta, vartotojo IP adresas ieškomas, kad gautumėte susietą domeno vardą. Tai kreipiasi į išorinį serverį, todėl gali
        būti delsa prieš pasiekiant informaciją - ir jei serveris neprisijungęs, gali būti labai ilga delsa.<br /><br />
        Galite pasirinkti ieškoti serverio vardų visuose svetainės prieigose arba tik pridedant naują blokavimą.<br /><br />
        <b>Maksimali prieigos sparta</b><br />
        Tai nustato maksimalų svetainės prieigų skaičių, leidžiamą iš vieno vartotojo ar IP adreso per bet kurį penkių minučių laikotarpį, ir yra skirta
        aptikti paslaugos atsisakymo atakas. Pasiekus 90% pasirinkto limito, vartotojas gauna įspėjimą; pasiekus limitą jie blokuojami.
        Skirtingi slenkščiai gali būti nustatyti svečiams ir prisijungusiems vartotojams.<br /><br />
        <b>Pratęsti blokavimo laikotarpį</b><br />
        Ši parinktis aktuali tik jei naudojama parinktis blokuoti vartotojus nurodytam laikui, o ne neterminuotai. Jei įjungta ir
        vartotojas bando pasiekti svetainę, blokavimo laikotarpis pratęsiamas (tarsi blokavimas būtų ką tik pradėtas).
        ';
  break;
case 'edit' :
case 'add' :
$text = "Šiame ekrane galite užblokuoti vartotojus iš savo svetainės.<br />
Įveskite jų pilną IP adresą arba naudokite pakaitos simbolį IP adresų diapazono blokavimui. Taip pat galite įvesti el. pašto adresą, kad sustabdytumėte vartotojo registraciją kaip narį jūsų svetainėje.<br /><br />
<b>Blokavimas pagal IP adresą:</b><br />
Įvedus IP adresą 123.123.123.123 sustabdysite vartotoją su tuo adresu lankantis jūsų svetainėje.<br />
Įvedus IP adresą su vienu ar daugiau pakaitos simbolių galo blokuose, pvz., 123.123.123.* arba 214.098.*.*, sustabdysite bet ką iš to IP diapazono lankantis jūsų 
svetainėje. (Atkreipkite dėmesį, kad turi būti tiksliai keturios skaitmenų ar žvaigždučių grupės)<br /><br />
IPV6 formato adresai taip pat palaikomi, įskaitant '::' nulinių verčių blokui žymėti. Kiekviena skaitmenų pora galo laukuose gali būti atskiras pakaitos simbolis<br /><br />
<b>Blokavimas pagal el. pašto adresą</b><br />
Įvedus el. pašto adresą foo@bar.com sustabdysite bet ką, naudojantį tą el. pašto adresą, registruotis kaip narį jūsų svetainėje.<br />
Įvedus el. pašto adresą *@bar.com sustabdysite bet ką, naudojantį tą el. pašto domeną, registruotis kaip narį jūsų svetainėje.<br /><br />
<b>Blokavimas pagal vartotojo vardą</b><br />
Tai atliekama iš vartotojų administravimo puslapio.<br /><br />";
  break;
case 'whadd' :
case 'whedit' :
  $text = "Čia galite nurodyti IP adresus, kuriuos žinote esant 'draugiškus' - paprastai tai pagrindinių svetainės administratorių adresai, garantuojančius, kad jie visada
  gali pasiekti svetainę.<br />
  Patariama išlaikyti adresų skaičių šiame sąraše iki absoliutaus minimumo; tiek saugumo sumetimais, tiek siekiant sumažinti poveikį svetainės veikimui.";
  break;
case 'banlog' :
  $text = 'Tai rodo visų svetainės prieigų, apimančių adresą, esantį blokuotųjų sąraše arba baltajame sąraše, sąrašą. Stulpelis \'priežastis\' rodo rezultatą.';
  break;
case 'white' :
  $text = "Šis puslapis rodo visų aiškiai leistinų IP adresų ir el. pašto adresų sąrašą.<br />
    Šis sąrašas turi pirmenybę prieš blokuotųjų sąrašą - turėtų būti neįmanoma, kad adresas iš šio sąrašo būtų užblokuotas.<br />
        Visi adresai turi būti įvesti rankiniu būdu.";
  break;
case 'list' :
default :
$text = 'Šis puslapis rodo visų užblokuotų IP adresų, serverių vardų ir el. pašto adresų sąrašą. 
(Užblokuoti vartotojai rodomi vartotojų administravimo puslapyje)<br /><br />
<b>Automatiniai blokavimai</b><br />
e107 automatiškai blokuoja individualius IP adresus, jei jie bando užtvindyti svetainę, taip pat adresus su nepavykusiais prisijungimais.<br />
Šie blokavimai taip pat pasirodo šiame sąraše. Galite pasirinkti (parinkčių puslapyje), ką daryti su kiekvieno tipo blokavimu.<br /><br />
<b>Blokavimo pašalinimas</b><br />
Galite nustatyti galiojimo laikotarpį kiekvienam blokavimo tipui, tokiu atveju įrašas pašalinamas pasibaigus blokavimo laikotarpiui. Priešingu atveju
 blokavimas išlieka, kol jūs jį pašalinate.<br />
Galite modifikuoti blokavimo laikotarpį iš šio puslapio - laikai skaičiuojami nuo dabar.';
}
$ns -> tablerender($caption, $text);
