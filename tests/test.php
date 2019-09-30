<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use HelloWorld\Greetings;
$arr = [
    ['seat' => '11B', 'order' => 7, 'type'=>'train','baggage'=>'automatic','from'=>'Madrid','to'=>'Barcelona'],
    ['seat' => '11eeB', 'order' => 2, 'type'=>'plane','baggage'=>'223f','from'=>'Nwe York','to'=>'Gerona Airport'],
    ['seat' => '1122B', 'order' => 8, 'type'=>'train','baggage'=>'automatic','from'=>'Pirot','to'=>'Labin'],
    ['seat' => '11zzzB', 'order' => 10, 'type'=>'train','baggage'=>'r4444','from'=>'Labin','to'=>'Amsterdam'],
];
echo Greetings::generateTrip($arr);