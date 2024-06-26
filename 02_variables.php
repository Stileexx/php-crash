<?php
/*
- String
- Integer
- Float
- Boolean
- Array dsd
- Object
- NULL
- Resource

- prefix with '$'
- start with letter or _
- case sensetive -> $name and $NAME are different variables

*/

$name = 'Brad'; //String
$age = '40'; //Int
$has_kids = true; // OR hasKids
$cash = 20.75; //Float

// echo $name . ' is ' . $age . ' years old';
// OR
// echo "$name is $age years old";

//BEST
// echo "${name} is ${age} years old lulo";

// $x = '5' + '5';
// var_dump($x);
// echo 10 - 5;
// echo 5 * 21;
// echo 20 / 2;
// echo 20 % 3;

// constants:
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
