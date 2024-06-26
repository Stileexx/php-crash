<?php

//simple array
$numbers = [1, 44, 23, 42];
$fruits = array('apple', 'orange', 'pear');

// echo $fruits[2];

//Associative Array
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

// echo $colors[4];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

// echo $hex['blue'];

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Trevorsky',
  'email' => 'brad@gmail.com'
];

// echo $person['email'];

//Multi-dimensional array (Arrays in Array)
$people = [
  [
    'first_name' => 'Brad',
    'last_name' => 'Trevorsky',
    'email' => 'brad@gmail.com'
  ],
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'jonny@gmail.com'
  ],
  [
    'first_name' => 'Felicity',
    'last_name' => 'Arrow',
    'email' => 'farrow@gmail.com'
  ]
];

// echo $people[1]['email'];

//encode -> turn array into JSON
//decode -> turn JSON in array
var_dump(json_encode($people));
