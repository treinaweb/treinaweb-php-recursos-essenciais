<?php

var_dump("30/01/2020" > "05/02/2020");

var_dump("2020-01-30" > "2020-02-05");

var_dump("0002" > "0001999"); //quando possível converte para int

var_dump("000-2" > "000-1999"); //caractere a caractere

var_dump(
    strtotime("2020-01-30") > strtotime("5-2-2020")
);
