<?php
/**
 * Created by PhpStorm.
 * User: Bros
 * Date: 16.12.2018
 * Time: 16:18
 */

require "User.php";
require "Worker5.php";
$ob = new Worker5();
$ob->setName('Иван');
$ob->setAge(25);
$ob->setSalary(1000);

$ob2 = new Worker5();
$ob2->setName('Вася');
$ob2->setAge(26);
$ob2->setSalary(2000);

echo $ob->getSalary() + $ob2->getSalary();