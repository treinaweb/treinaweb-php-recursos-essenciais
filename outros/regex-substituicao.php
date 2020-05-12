<?php

$aniversarios = "Elton 22/08 Daniel 26/04 Luciane 09/12 Uriel 10/02";

$nomes = preg_replace('/[0-9\/]+/', '', $aniversarios);
var_dump($nomes);

$nomes2 = preg_replace(
    ['/[a-z]+/i', '/[0-9\/]+/'], 
    ['#', '*'], 
    $aniversarios,
    -1,
    $contator
);
var_dump($nomes2, $contator);

$aniversarios2 = "Elton 2020-08-22 Daniel 2020-04-26 Luciane 2020-12-09 Uriel 2020-02-10";

$formatado = preg_replace_callback(
    '/[0-9-]+/',
    'tratar',
    $aniversarios2
);

function tratar(array $item): string {
    return DateTime::createFromFormat('Y-m-d', $item[0])->format('d/m/Y');
}

var_dump($formatado);


