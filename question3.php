<?php

$str = <<<Text
555.168.0.144
10.0.0.189
172.16.0.1
203.0.113.42
198.51.100.17
Text;

$regex = "/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/";

preg_match_all($regex, $str, $matches);

print_r($matches);