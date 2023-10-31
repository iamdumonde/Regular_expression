<?php

$str = <<<Text
Le numéro de téléphone (123) 456-7890 de certains clients
Le numéro de téléphone 555-1234 de certains clients
Le numéro de téléphone (555) 555-5555 de certains clients
Le numéro de téléphone 800-867-5309 de certains clients
Le numéro de téléphone (123) 555-6789 de certains clients
Le numéro de téléphone 123-456-7890 123 456 7890 123.456.7890 de certains clients
Text;


$regex = "/(\(?\d{3}\)?)?[-. ]?\d{3}[-. ]?\d{4}/";

preg_match_all($regex, $str, $matches);

print_r($matches);

