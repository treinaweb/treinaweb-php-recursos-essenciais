<?php

$agora = new DateTime;
$ontem = new DateTime('yesterday');

$outroData = new DateTime('2020-08-22');

$outroData2 = DateTime::createFromFormat("d/m/Y H:i:s", "22/08/2020 00:00:00");

//var_dump($outroData->format('d/m/Y'), $outroData2);

function iso_para_brasil($data) {
    $dateTime = new DateTime($data);

    return $dateTime->format("d/m/Y");
}

function brasil_para_iso($data) {
    $dateTime = DateTime::createFromFormat("d/m/Y", $data);

    return $dateTime->format('Y-m-d');
}

var_dump(iso_para_brasil('2020-08-22'));

var_dump(brasil_para_iso('22/08/2020'));


