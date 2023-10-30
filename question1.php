<?php

$str = <<<Text
email adresse john.doe@example.com adresse mail
email adresse alice.smith@gmail.com adresse mail
email adresse jane_doe123@yahoo.com adresse mail
email adresse robert_jones@hotmail.com adresse mail
email adresse emily.brown@example.org adresse mail
email adresse mike.john-son@outlook.com adresse mail
email adresse sarah_adams123@live.com adresse mail
email adresse david.miller@gmail.com adresse mail
email adresse lisa.and_erson@example.net adresse mail
email adresse brian_wilson@yahoo.uk adresse mail
Text;

$regex = "/[a-zA-Z0-9-_.]+@[a-zA-Z]+\.[a-z]+/";
preg_match_all($regex, $str, $matches);
print_r($matches);