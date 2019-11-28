<?php

$array = array();

echo "Hoeveel landen wil je toevoegen?" . PHP_EOL;
$landen = readline();

for ($x = 1; $x <= $landen; $x++) {
    echo "welke landen wil je toevoegen?" . PHP_EOL;
    $land = readline();
    echo "Wat is de hoofdstad van " . $land . PHP_EOL;
    $hoofdstad = readline();
    $array[$land] = $hoofdstad;
    }

echo "De volgede landen en steden zitten in de database:" . PHP_EOL;

print_r ($array);