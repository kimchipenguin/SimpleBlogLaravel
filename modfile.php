<?php

var_dump($argv);

$such=array("lst_Word", "„", '”', '(aO)', '(al)', 'Druk-ker', 'druk-ker', 'Co-lor', ',aO', 'dO,', 'Do-kument', 'Inhait', 'Pro-gramm', 'vorslellen', 'Compu-ter', 'vro cpyfm', 'Abspeichem', 'SIGNUMI2', 'Informalion', 'kannein', '“', 'verschik-ken', 'beispielweise', 'Dcnsity', 'Belrieb', 'abzuliefem', 'wiederfmden', 'Pattem', 'Anklik-ken', 'abspeichem', 'Fehlem', 'Qualldatai', 'Fland', 'evnt timer', 'Funklion', 'Tabellcn', 'Preiscmpfchlung', ' dO,', 'sub.1', 'move.1', ' dl,', '$£', 'add.1', 'Altemate', 'Computcr', 'oderein', 'Rechnem');

$ersetz=array("1st_Word", '"', '"', '(a0)', '(a1)', 'Drucker', 'drucker', 'Color', ',a0', 'd0,', 'Dokument', 'Inhalt', 'Programm', 'vorstellen', 'Computer', 'vro_cpyfm', 'Abspeichern', 'SIGNUM!2', 'Information', 'kann ein', '"', 'verschicken', 'beispielsweise', 'Density', 'Betrieb', 'abzuliefern', 'wiederfinden', 'Pattern', 'Anklicken', 'abspeichern', 'Fehlern', 'Quelldatei', 'Hand', 'evnt_timer', 'Funktion', 'Tabellen', 'Preisempfehlung', ' d0,', 'sub.l', 'move.l', ' d1,', '$f', 'add.l', 'Alternate', 'Computer', 'oder ein', 'Rechnern');

$homepage = file_get_contents($argv[1]);
$homepage = str_replace($such, $ersetz, $homepage, $counter);
$fp = fopen($argv[1], 'w');
fwrite($fp, $homepage);
fclose($fp);
echo $counter. " Ersetzungen.";
?>