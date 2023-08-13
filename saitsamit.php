<?php

$saitler = ['a', 'i', 'o', 'u', 'e'];
$string = "men kod yaziram";

$string = str_replace($saitler, '', $string);

echo $string;

?>