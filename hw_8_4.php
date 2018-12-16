<?php
/**
 * Created by PhpStorm.
 * User: Bros
 * Date: 16.12.2018
 * Time: 15:57
 */

header('content-type: text/plain; charset=utf-8');

require "Worker4.php";

$ob = new Worker4('Дима', 25);
$ob->salary = 1000;

echo 'Ответ: ' . ($ob->salary * $ob->getAge());