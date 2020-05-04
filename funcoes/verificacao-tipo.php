<?php

var_dump(is_int(123)); //true
var_dump(is_int("123")); //falso

var_dump(is_float(123.00)); //true
var_dump(is_float("123.00")); //false

var_dump(is_numeric(123)); //true
var_dump(is_numeric("123")); //true
var_dump(is_numeric("123.00")); //true
var_dump(is_numeric(123.00)); //true

var_dump(is_string("asasdas")); //true
var_dump(is_bool(true)); //true

var_dump(is_scalar("string")); //true
var_dump(is_scalar([1, 2, 3])); //false

var_dump(gettype("string"));
var_dump(gettype(123));
