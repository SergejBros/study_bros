<?php


$file = fopen('users.txt', 'r');
echo '<table style="border: solid 1px;"><thead><th>Имя</th><th>Email</th><th>Пароль</th><th>Подписка</th></thead>';
while (!feof($file)) {
    $one_line = explode("\t", fgets($file));
    echo '<tr>';
    foreach($one_line as $value): ;
    echo '<td>' . $value . '</td>';
    endforeach;
    echo '</tr>';
}
echo '</table>';
fclose($file);