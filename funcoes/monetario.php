<?php

$valor = 1879.85;
$valor += 10;

$real = 'R$ ' . number_format($valor, 2, ',', '.');

var_dump($real);