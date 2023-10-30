<?php
$str = <<<Text
Nom du patient: Emile
Nom du patient: Martin
Nom du patient: Erféro
Nom du patient: Warris
Text;

$regexp = "/(?<=Nom du patient: ).+/";
// echo $str;

// preg_match_all pour trouver toutes les correspondances
preg_match_all($regexp, $str, $matches);
// recherche moi tous les mots qui viennent après nom du patient
print_r($matches);