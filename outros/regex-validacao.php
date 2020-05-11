<?php

$email = "elton#fonseca@treinaweb.com.br";

if (preg_match("/^[a-z0-9_.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?/i", $email) === 1) {
    echo "valido";
} else {
    echo "invalido";
}

$emails = ["elton@treinaweb.com.br", "elton", "elton@treinaweb", "elton.fonseca@treinaweb.com.br"];

$validos = preg_grep("/^[a-z0-9_.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?/i", $emails);

$invalidos = preg_grep("/^[a-z0-9_.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?/i", $emails, PREG_GREP_INVERT);

var_dump($validos, $invalidos);