<?php

header('content-type: text/plain; charset=utf-8');

require 'User.php';
require 'Worker.php';

$user = new User('Коля', new DateTime('1992-01-08'));
$user2 = new User('Вася', new DateTime('1992-05-20'));

echo 'Имя:' . $user->name . "\n";
echo 'Возвраст: ' . $user->age. "\n";
echo $user->aboutMe() . "\n\n";
echo $user->aboutAge() . "\n\n";


$worker1 = new Worker('Иван', new DateTime('1988-08-25'));
$worker1->setSalary(1000);
echo 'Имя: ' . $worker1->getName() ."\n";
echo $worker1->aboutAge() . "\n";

