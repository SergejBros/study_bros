<?php

header('Content-type: text/plain; charset=utf-8');

$a = ['пн', 'вт', 'ср'];

foreach ($a as $item){
    echo 'День: '  . $item . "\n";
}

echo "\n";

$salary = [
    'Иван' => 3000,
    'Виктор' => 2000,
    'Светлана' => 2500
];

foreach ($salary as $key => $item){
    echo $key . ' получает '  . $item . "\n";
}

echo "\n";

