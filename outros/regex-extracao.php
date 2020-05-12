<?php

$aniversarios = "Elton 22/08 Daniel 26/04 Luciane 09/12 Uriel 10/02";
$datas = preg_split('/[a-z]+\s/i', $aniversarios, -1, PREG_SPLIT_NO_EMPTY);
var_dump($datas);

$endereco = "Av Paulista, 100 - Sao Paulo/SP";

preg_match('/([a-zA-Z_\s]+),\s([0-9]+)\s-\s([a-zA-Z\s]+)\/([A-Z]{2})/', $endereco, $partes);

var_dump($partes);