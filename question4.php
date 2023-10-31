<?php

$str = <<<Text
12345
12345-6789
Text;

$regex = "/\d{1,5}-?\d{1,4}/";

// ^\d{5}(-\d{4})?

preg_match_all($regex, $str, $matches);

print_r($matches);