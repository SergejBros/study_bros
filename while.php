<?php
header('Content-type: text/plain; charset=utf-8');

$d = 2;

while($d < 100){
 echo 'D: ' . $d . "\n";
 $d *= 2;
}

echo "\n";

do{
    echo 'D: ' . $d . "\n";
    $d /= 2;
} while($d > 1);







