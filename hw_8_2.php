<?php
/**
 * Created by PhpStorm.
 * User: Bros
 * Date: 16.12.2018
 * Time: 15:33
 */
header('content-type: text/plain; charset=utf-8');

require "Worker2.php";
$ob = new Worker2();
$ob->setName("Вася");
$ob->setAge(26);
$ob->setSalary(2000);

$ob2 = new Worker2();
$ob2->setName("Иван");
$ob2->setAge(25);
$ob2->setSalary(1000);

echo 'Сумма зарплат: ' . ($ob->getSalary() + $ob2->getSalary()) . "\n";
echo 'Сумма возврастов: ' . ($ob->getAge() + $ob2->getAge());