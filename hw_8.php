<?php
/**
 * Created by PhpStorm.
 * User: Bros
 * Date: 16.12.2018
 * Time: 15:22
 */

header('content-type: text/plain; charset=utf-8');
require 'Worker.php';

$ob = new Worker();
$ob->name = 'Иван';
$ob->age = 25;
$ob->salary = 1000;

$ob2 = new Worker();
$ob2->name = 'Вася';
$ob2->age = 26;
$ob2->salary = 1000;

$summ_salary = $ob->salary + $ob2->salary;
echo 'Сумма зарплат: ' . $summ_salary . "\n";

$summ_age = $ob->age+ $ob2->age;
echo 'Сумма возврастов: ' . $summ_age;