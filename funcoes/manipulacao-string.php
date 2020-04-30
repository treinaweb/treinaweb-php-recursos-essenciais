<?php

$frase = "Treinaweb Cursos";
$posicaoR = strpos($frase, 'web');
var_dump($posicaoR);

$fraseModificada = str_replace('r', '*', $frase);
var_dump($fraseModificada);

$fraseModificada = str_replace(['r', 'w'], '*', $frase);
var_dump($fraseModificada);

$fraseModificada = str_replace(['r', 'w'], ['*', '#'], $frase);
var_dump($fraseModificada);

$fraseModificada2 = substr($frase, 6, 3);
var_dump($fraseModificada2);

$fraseModificada2 = substr($frase, -6);
var_dump($fraseModificada2);


