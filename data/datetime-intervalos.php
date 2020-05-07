<?php

$daniel = new DateTime('2020-04-26');
$elton = new DateTime('2020-08-22');

$intervalo = $daniel->diff($elton);

var_dump($intervalo->format('%m meses, %d dias'));

$daniel->add(new DateInterval('P3M27D'));

var_dump($daniel);

$daniel->sub(new DateInterval('P21D'));

var_dump($daniel);
