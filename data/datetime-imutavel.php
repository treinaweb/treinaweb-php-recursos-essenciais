<?php

$aniversarioDaniel = new DateTimeImmutable('2020-04-26');

var_dump($aniversarioDaniel);

$aniversarioElton = $aniversarioDaniel->add(new DateInterval('P3M27D'));

var_dump($aniversarioDaniel, $aniversarioElton);



