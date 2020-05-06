<?php

//date_default_timezone_set('America/Sao_Paulo');

//$amanha = time() + (60*60*24);

$amanha = strtotime("2020-05-06 15:59");
$data = date("d/m/Y H:i", $amanha);

//var_dump($data);

//var_dump(date('e'), date('P'));

//var_dump(time());

function formata_data_para_br($data) {
    $timestamp = strtotime($data);

    return date("d/m/Y", $timestamp);
}

echo formata_data_para_br('2020-12-31');
