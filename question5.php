<?php

$str = <<<Text
1900-01-25
1500-12-25
2099-06-13
Text;

$regex = "/^(19|20)\d{2}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])/";

preg_match_all($regex, $str, $matches);

print_r($matches);