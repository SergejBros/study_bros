<?php

header('Content-type: text/plain; charset=utf-8');

for($i = 0; $i < 10; $i++){
    echo 'I: ' . $i . "\n";
}

echo "\n";

for($n = 0; $n < 10; $n++){
    if($n == 5){
        continue;
    }
    echo 'N: ' . $n . "\n";
}

