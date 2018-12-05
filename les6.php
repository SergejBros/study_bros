<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 05.12.18
 * Time: 19:31
 */

error_reporting(E_ALL); ini_set("display_errors", 1);

/*
Если переменная $a больше нуля, то выведите 'Верно', иначе выведите 'Неверно'.
Проверьте работу скрипта при $a, равном 1, 0, -3.
*/

$arr = [1, 0, -3];

foreach ($arr as $value) {
    if ($value > 0) {
        echo "Верно";
    }
    else {
        echo "Неверно";
    }
}