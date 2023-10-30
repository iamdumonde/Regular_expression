<?php

$regex = "/(\d{3})-(\d{8})/";
$text = "Le numéro de téléphone est 229-97010203";
//Remplacer le numéro dans le texte
$text_formate = preg_replace($regex, "+$1 $2", $text);
echo $text_formate;

// +229 97010203
preg_match($regex, $text, $matches);
print_r($matches);

if(count($matches) > 0){
    //Récupérer les groupes de capture
    $indicatif = "+" . $matches[1];
    $numero = $matches[2];

    //Formater le numéro de téléphone
    $numeroFormate = "$indicatif $numero";
    echo $numeroFormate;
}