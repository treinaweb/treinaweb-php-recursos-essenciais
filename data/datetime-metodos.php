<?php

$aniversario = new DateTime('2020-08-22');

//$aniversario->setDate(2020, 8, 23);
//$aniversario->setTimestamp(500_000_000);

var_dump($aniversario->getOffset()/60/60);
var_dump($aniversario->getTimezone());
var_dump($aniversario->getTimestamp());

$aniversario->modify('next Saturday');
$aniversario->setTime(15, 30);

var_dump($aniversario);